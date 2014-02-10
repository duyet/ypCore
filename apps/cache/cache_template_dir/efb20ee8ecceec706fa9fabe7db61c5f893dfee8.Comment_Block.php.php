<?php /*%%SmartyHeaderCode:264452f89f4a63ea17-30890186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efb20ee8ecceec706fa9fabe7db61c5f893dfee8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\News\\Comment_Block.php',
      1 => 1389803997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264452f89f4a63ea17-30890186',
  'variables' => 
  array (
    'form_action' => 0,
    'text_comment' => 0,
    'error' => 0,
    'success' => 0,
    'is_login' => 0,
    'text_username' => 0,
    'user' => 0,
    'text_email' => 0,
    'text_placeholder_username' => 0,
    'text_placeholder_email' => 0,
    'captcha' => 0,
    'captcha_img_url' => 0,
    'text_placeholder_captcha' => 0,
    'post_id' => 0,
    'text_placeholder_comment' => 0,
    'text_button_comment' => 0,
    'text_login_after_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89f4a6ee948_30101007',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89f4a6ee948_30101007')) {function content_52f89f4a6ee948_30101007($_smarty_tpl) {?><form action="http://localhost/ypCore2/news/comment/progress?id=13&alias=" method="POST">	<div class="control-group">		<h3>Comment</h3>		<div class="comment-status">						</div>		 		   <blockquote class="">		     <p>Account: admin</p>		     <p>Email: duyet2000@gmail.com</p>		   </blockquote>		 		 		   <img src="http://localhost/ypCore2/system/captcha?strlen=4" alt="" title="" />		   <input type="text" name="captcha" class="input-block-level input-text" value="" placeholder="Captcha" style="width: 50%" />		 		 <input type="hidden" name="post_id" value="13" /> 		 <input type="hidden" name="is_login" value="true" /> 		 <textarea rows="5" cols="20" class="input-block-level" name="comment_content" id="comment_content" placeholder="Your comment"></textarea>		 		 <button name="submit" value="1" class="comment-button">Comment</button> 		 	</div></form><?php }} ?>
