<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:43:38
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\module\News\Comment_Block.php" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_52f89f4a6dd534_55828630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89f4a6dd534_55828630')) {function content_52f89f4a6dd534_55828630($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
" method="POST">	<div class="control-group">		<h3><?php echo $_smarty_tpl->tpl_vars['text_comment']->value;?>
</h3>		<div class="comment-status">		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="alert-error "><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>		<?php if ($_smarty_tpl->tpl_vars['success']->value) {?><div class="alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div><?php }?>		</div>		 <?php if (($_smarty_tpl->tpl_vars['is_login']->value==true)) {?>		   <blockquote class="">		     <p><?php echo $_smarty_tpl->tpl_vars['text_username']->value;?>
: <?php if (!empty($_smarty_tpl->tpl_vars['user']->value['full_name'])) {?><?php echo $_smarty_tpl->tpl_vars['user']->value['full_name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
<?php }?></p>		     <p><?php echo $_smarty_tpl->tpl_vars['text_email']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>		   </blockquote>		 <?php } else { ?>		   <input type="text" name="name" class="input-block-level input-text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['text_placeholder_username']->value;?>
">		   <input type="text" name="email" class="input-block-level input-text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['text_placeholder_email']->value;?>
">		 <?php }?>		 <?php if (($_smarty_tpl->tpl_vars['captcha']->value)) {?>		   <img src="<?php echo $_smarty_tpl->tpl_vars['captcha_img_url']->value;?>
" alt="" title="" />		   <input type="text" name="captcha" class="input-block-level input-text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['text_placeholder_captcha']->value;?>
" style="width: 50%" />		 <?php }?>		 <input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
" /> 		 <input type="hidden" name="is_login" value="<?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>true<?php } else { ?>false<?php }?>" /> 		 <textarea rows="5" cols="20" class="input-block-level" name="comment_content" id="comment_content" placeholder="<?php echo $_smarty_tpl->tpl_vars['text_placeholder_comment']->value;?>
"></textarea>		 		 <button name="submit" value="1" class="comment-button"><?php echo $_smarty_tpl->tpl_vars['text_button_comment']->value;?>
</button> 		 <?php if ((!$_smarty_tpl->tpl_vars['is_login']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['text_login_after_button']->value;?>
<?php }?>	</div></form><?php }} ?>
