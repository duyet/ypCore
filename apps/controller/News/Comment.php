<?php 
class Controller_News_Comment extends ypController {
	// Comment form
	public function Index() {
		$this->loadLanguage('News/Comment');
		$this->set('error', '');
		$this->set('success', '');

		if ((int) $this->Setting->get('allow_comment') == 0) { // 0: Not allow comment
			return $this->setOutput();
		} elseif ((int) $this->Setting->get('allow_comment') == 1 AND $this->User->isLogin() == FALSE) { // 1: Allow user 
			$comment = sprintf($this->_data['not_comment_permission_announment'], 
					$this->Link->build('Login/Index'), 
					$this->Link->build('Register/Index'));
			return $this->setOutput($comment);
		}
		// 2 : Allow all

		$this->Loader->controller('User/User');
		if ($this->Controller_User_User->isLogin()) {
			$this->set('is_login', TRUE);
			
			// Load user info
			$this->Loader->model('User/User');
			$this->set('user', $this->Model_User_User->getUserInfo());
		} else {
			$this->set('is_login', FALSE);
			$this->_data['text_login_after_button'] = sprintf($this->_data['text_login_after_button'], 
					$this->Link->build('Login'), $this->Link->build('Register'));
		}

		$this->set('captcha', FALSE);
		if ($this->Setting->get('comment_captcha')) {
			$this->set('captcha', TRUE);
			$captcha_lenght = $this->Setting->get('captcha_lenght') ? $this->Setting->get('captcha_lenght') : 4;
			$this->set('captcha_img_url', $this->Link->build('System/Captcha', TRUE, array('strlen' => $captcha_lenght)));
		}

		$this->set('post_id', intval($this->Request->REQUEST['id']));
		$params = $this->Link->getParams();
		$action_param['id'] = $params['id'];
		$action_param['alias'] = isset($params['alias']) ? $params['alias'] : '';
		$this->set('form_action', $this->Link->build('News/Comment/Progress', TRUE, $action_param));

		if (isset($this->Request->GET['is_comment_error']) AND $this->Request->GET['is_comment_error'] == 'true') {
			$error = trim($this->Request->GET['comment_error']);
			if ($this->_data[$error]) {
				$this->set('error', $this->_data[$error]);
			} else {
				$this->set('error', '');
			}
		}
		if (isset($this->Request->GET['comment_success']) AND $this->Request->GET['comment_success'] == 'true') {
			$this->set('success', $this->_data['text_comment_success']);
		}

		$this->setTemplate('module/News/Comment_Block.php');
		$this->render();
	}

	// List all comment
	public function ListComment() {
		$threadId = intval($this->Request->GET['id']);
		if (!$threadId) {
			trigger_error('Error: Post ID error!');
		}

		$this->loadLanguage('News/Comment');

		$this->Loader->model("News/Comment");
		$comments = $this->Model_News_Comment->loadComment($threadId);
		if (!$comments) {
			$comments = array();
		}

		$this->set('is_admin', FALSE);
		if ($this->User->isAdmin()) {
			$this->set('is_admin', TRUE);
			
			// Delete link 
			$delete_link = array();
			if (!empty($comments)) {
				foreach ($comments as $comment) {
					$delete_link[$comment['id']] = $this->Link->build('Admin/Module/News/Comment/DeleteComment',
						array('comment_id' => $comment['id'], 
							'redirect_to' => $this->Link->build($this->Link->this(), TRUE, $this->Link->getParams())));
				}
			}
			$this->set('delete_link', $delete_link);
		}

		$this->set('comments', $comments);
		$this->setTemplate('module/News/Comment_List_Block.php');
		$this->render();
	}

	// Comment submit
	public function Progress() {
		$this->Link->removeParam('is_comment_error');
		$this->Link->removeParam('comment_error');

		$last_comment_time = $this->Session->get('last_comment');
		if ($last_comment_time AND (microtime() - $last_comment_time) < (int) $this->Setting->get('flood_check_time')) {
			$this->set('error', 'max_request_time');
		}

		if (!$this->Request->POST) {
			die('Only accept POST method!');
		}

		$this->set('error', '');
		if ((int) $this->Setting->get('allow_comment') == 0) {
			$this->redirect($this->Link->build('News/Views', TRUE, $this->Link->getParams()));
		}
		if ((int) $this->Setting->get('allow_comment') == 1 AND $this->User->isLogin() == FALSE) {
			$this->redirect($this->Link->build('News/Views', TRUE, $this->Link->getParams()));
		}
		if ((int) $this->Setting->get('allow_comment') == 2 AND $this->User->isLogin() == FALSE) {
			$this->set('username', $this->Request->POST['name']);
			$this->set('user_id', 0);
			$this->set('email', $this->Request->POST['email']);
		} else {
			$userInfo = $this->User->getUserInfo();
			$this->set('username', $userInfo['username']);
			$this->set('user_id', $userInfo['userid']);
			$this->set('email', $userInfo['email']);
		}
		if ($this->Setting->get('comment_captcha')) {
			if ($this->Request->POST['captcha'] != $this->Session->get('captcha_code')) {
				$this->set('error', 'error_captcha_invalid');
			}
		}
		$this->set('comment', htmlspecialchars($this->Request->POST['comment_content']));
		$this->set('post_id', intval($this->Request->POST['post_id']));
		// Check email
		if (!$this->get('error')) {
			$this->Loader->helper('Email');
			if (!isEmail($this->get('email'))) {
				$this->set('error', 'error_email_invalid');
			}
		}
		// Comment lenght
		if (!$this->get('error')) {
			if (strlen($this->get('comment')) > $this->Setting->get('comment_maxchars')) {
				$this->set('error', $this->_data['error_comment_maxchars']);
			} else if (strlen($this->get('comment')) < $this->Setting->get('comment_minchars')) {
				$this->set('error', 'error_comment_minchars');
			}
		}
		if ($this->get('post_id') == 0) {
			$this->redirect($this->Link->build('Index/Home'));
		}
		
		$this->Link->addParam('key', md5(time()));
		
		if($this->get('error')) {
			$this->Link->addParam('is_comment_error', 'true');
			$this->Link->addParam('comment_error', $this->get('error'));
			$this->redirect($this->Link->build('News/View', TRUE, $this->Link->getParams()));
		}
		
		// Add comment
		$this->Loader->model('News/Comment');
		$this->Model_News_Comment->addComment($this->_data);
		
		// Set last comment to anti flood
		$this->Session->set('last_comment_time', microtime());
		
		$this->Link->addParam('comment_success', 'true');
		$this->redirect($this->Link->build('News/View', TRUE, $this->Link->getParams()));
	}
}