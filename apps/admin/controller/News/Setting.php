<?php 
class Controller_Admin_News_Setting extends ypAdminController {
	/**
	 * Disqus frame
	 * 
	 * @access 	 public
	 */
	public function Disqus() {
		$this->checkLogin();

		if (!$this->Setting->get('comment_disqus_active')) {

			// Getting out
			return;
		}

		$disqus_alias = $this->Setting->get('comment_disqus_alias');
		if (empty($disqus_alias)) {
			// Not set disqus alias or not yet register
			return;
		}

		$this->set('disqus_alias', $disqus_alias);
		$this->set('disqus_frame_url', 'http://' . $disqus_alias . '.disqus.com/admin/moderate/');
		//$this->set('disqus_frame_url', 'http://localhost');

		$this->setTemplate('module/News/Setting.DisqusFrame.php');
		$this->setTemplateChild(array(
			'Admin/System/Header', 
			'Admin/System/Footer',
		));
		$this->Response->setOutput($this->render());
	}

	/**
	 * Disqus register
	 *
	 * @access 	public
	 */
	public function DisqusRegister() {

	}

	/**
	 * Google keyword trends
	 *
	 * @access 	public 
	 */
	public function Trend() {
		$this->checkLogin();

		$keyword = 'ypCore';
		if (!empty($this->Request->REQUEST['q'])) {
			$keyword = urlencode($this->Request->REQUEST['q']);
		}

		$this->set('keyword', urldecode($keyword));
		$width = 1000;
		$height = 400;
		$show_everage_value = false;
		$lang = 'vi-VN'; // 'en-Us'
		$cid = !$show_everage_value ? 'TIMESERIES_GRAPH_0' : 'TIMESERIES_GRAPH_AVERAGES_CHART';

		$this->GoogleTrendScript = '<script type="text/javascript" src="//www.google.com/trends/embed.js?hl=' . $lang . '&q=' . $keyword . '&date3-month&cmpt=q&content=1&cid=' . $cid . '&export=5&w=' . $width . '&h=' . $height . '"></script>';

	//	die($this->GoogleTrendScript . "\n\n\n" . '<script type="text/javascript" src="//www.google.com/trends/embed.js?hl=en-US&q=can&cmpt=q&content=1&cid=TIMESERIES_GRAPH_0&export=5&w=500&h=330"></script>');

		$this->set('GoogleTrendScript', $this->GoogleTrendScript);

		$this->setTemplate('module/News/Setting.GoogleTrend.php');
		$this->setTemplateChild(array(
			'Admin/System/Header', 
			'Admin/System/Footer',
		));
		$this->Response->setOutput($this->render());
	}

	/**
	 * News module settings
	 *
	 * @access 	public
	 */
	public function Index() {
		$this->checkLogin();
		
		$this->loadLanguage('Admin/News/Setting');
		
		if ($this->Request->POST) {
			$data['titlemaxchars'] = (int) $this->Request->POST('titlemaxchars');
			$data['postmaxchars'] = (int) $this->Request->POST('postmaxchars');
			$data['show_view_counter'] = $this->_getBool($this->Request->POST('show_view_counter'));
			$data['like_active'] = $this->_getBool($this->Request->POST('like_active'));
			$data['quick_edit'] = $this->_getBool($this->Request->POST('quick_edit'));
			$data['comment_captcha'] = $this->_getBool($this->Request->POST('comment_captcha'));
			$data['captcha_lenght'] = (int) $this->Request->POST('captcha_lenght');
			$data['comment_minchars'] = (int) $this->Request->POST('comment_minchars');
			$data['comment_maxchars'] = (int) $this->Request->POST('comment_maxchars');
			$data['allow_comment'] = (int) $this->Request->POST('allow_comment');
			$data['post_request_type'] = $this->_getBool($this->Request->POST('post_request_type')); // 0,1
			$data['rss_content_maxchars'] = (int) $this->Request->POST('rss_content_maxchars');
			$data['rss_max_post'] = (int) $this->Request->POST('rss_max_post');

			$this->Loader->model('Admin/News/Setting');
			$this->Model_Admin_Module_News_Setting->saveSetting($data);
			// Clean cache
			$this->Cache->delete('category_*');
			$this->set('success', $this->_data['text_save_setting_success']);
		}

		$this->set('settings', $this->Setting->gets());
		$this->set('form_action', $this->Link->build($this->Link->this()));
		
		$this->setTemplate('module/Module/News/Setting.php');
		$this->setTemplateChild(array(
			'Admin/System/Header', 
			'Admin/System/Footer',
			'Admin/News/Setting/Leftcolumn'
		));
		$this->Response->setOutput($this->render());
	}
	
	public function LeftColumn() {
		$this->checkLogin();
		
		$this->loadLanguage('Admin/Module/News/Setting');
		
		$links = array();
		$links[] = $this->Link->a('Admin/Module/News/Newpost', $this->_data['text_newpost']);
		$links[] = $this->Link->a('Admin/Module/News/Listpost', $this->_data['text_listpost']);
		$links[] = $this->Link->a('Admin/Module/News/Listcat', $this->_data['text_listcat']);
		$links[] = $this->Link->a('Admin/Module/News/Newcat', $this->_data['text_newcat']);
		$links[] = $this->Link->a('Admin/Module/News/Setting', $this->_data['text_setting']);
		
		$this->set('links', $links);
		$this->setTemplate('module/Module/News/LeftColumn.php');
		$this->render();
	}
	
	private function _getBool($value) {
		$value = (int) $value;
		if ($value != 1) {
			return 0;
		}
		
		return 1;
	}
}