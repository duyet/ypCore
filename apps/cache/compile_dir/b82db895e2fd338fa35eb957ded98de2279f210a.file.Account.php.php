<?php /* Smarty version Smarty-3.1.16, created on 2014-02-09 16:35:25
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\module\User\Account.php" */ ?>
<?php /*%%SmartyHeaderCode:297552f7a03d7486e4-68396719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b82db895e2fd338fa35eb957ded98de2279f210a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\User\\Account.php',
      1 => 1388835833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297552f7a03d7486e4-68396719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Header' => 0,
    'text_account' => 0,
    'user' => 0,
    'link' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f7a03d778878_79758446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f7a03d778878_79758446')) {function content_52f7a03d778878_79758446($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Header']->value;?>



<main class="content" role="main" >
  <article class="post" >
    <h1><?php echo $_smarty_tpl->tpl_vars['text_account']->value;?>
</h1>
    <div class="row">
      <div class="span6">
          UserName: <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
 <br />
          Email: <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
 <br />
          Fullname: <?php echo $_smarty_tpl->tpl_vars['user']->value['full_name'];?>

      </div>
      <div class="span3">
        
      </div>
      <div class="span3">
        <ol>
         <li><?php echo $_smarty_tpl->tpl_vars['link']->value['account'];?>
</li>
         <?php if (isset($_smarty_tpl->tpl_vars['link']->value['admincp'])) {?><?php echo $_smarty_tpl->tpl_vars['link']->value['admincp'];?>
<?php }?>
         <li><?php echo $_smarty_tpl->tpl_vars['link']->value['changepass'];?>
</li>
         <li><?php echo $_smarty_tpl->tpl_vars['link']->value['changeemail'];?>
</li>
         <li><?php echo $_smarty_tpl->tpl_vars['link']->value['logout'];?>
</li>
    	</ol>
      </div>
    </div>
    </article>  
</main>

<?php echo $_smarty_tpl->tpl_vars['Footer']->value;?>
<?php }} ?>
