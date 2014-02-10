<?php /* Smarty version Smarty-3.1.16, created on 2014-02-10 10:24:53
         compiled from "D:\xampp\htdocs\ypCore2\content\\default\layout\Footer.php" */ ?>
<?php /*%%SmartyHeaderCode:946852f89ae54ac5f6-38080367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89a6be8dcfe98d2ac3aa77aeb2d6fa59fbbdac4e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\layout\\Footer.php',
      1 => 1392022909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '946852f89ae54ac5f6-38080367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ypcore_version' => 0,
    'system_stat' => 0,
    'debug_db_info' => 0,
    'i' => 0,
    'data' => 0,
    'js_var' => 0,
    'static_url' => 0,
    'js_addon' => 0,
    'template_url' => 0,
    'google_analytics_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f89ae54f63f8_23183247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f89ae54f63f8_23183247')) {function content_52f89ae54f63f8_23183247($_smarty_tpl) {?>
</div>
<footer class="site-footer" id="footer">
    <div class="inner container">
         <section class="copyright">ypCore v<?php echo $_smarty_tpl->tpl_vars['ypcore_version']->value;?>
 &middot; (c) 2014 &bull; All rights reserved.</section>
         <section class="poweredby">Published with <a class="" href="http://ypcore.org">ypCore</a>.</section>
         <section class="theme"><span class="tooltip">ypCore CMS</span></section>
  </div>
</footer>

<?php echo $_smarty_tpl->tpl_vars['system_stat']->value;?>


  <?php if (($_smarty_tpl->tpl_vars['debug_db_info']->value)) {?>
  <hr />
  <table class="container table">
    <thead><tr><td>#</td><td>Query</td><td>Time (<?php echo $_smarty_tpl->tpl_vars['debug_db_info']->value['time'];?>
)</td></tr></thead>
    <tbody>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug_db_info']->value['queries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
     <tr><td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value['query'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value['time'];?>
</td></tr>
    <?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
<?php } ?>
   </tbody>
  </table>
  <?php }?>

<script><?php echo $_smarty_tpl->tpl_vars['js_var']->value;?>
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
<script>!window.jQuery && document.write('<scr'+'ipt type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/jquery/jquery-1.9.1.js"><\/scr'+'ipt>');</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/bootstrap/bootstrap.js"></script>
<?php echo $_smarty_tpl->tpl_vars['js_addon']->value;?>

<script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/main.js"></script>

<script type="text/javascript">
    $('#loadstatus').fadeOut(3000);
    $('a').click(function(){
      $('#loadstatus').fadeIn();
    });
</script>

<?php if ($_smarty_tpl->tpl_vars['google_analytics_code']->value) {?>
<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = [._setAccount', '<?php echo $_smarty_tpl->tpl_vars['google_analytics_code']->value;?>
, ._trackPageview];
!function(t, d) {
  var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
  g.async = true; g.src = '//www.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g, s);
} ('script', document);
</script>
<!-- / Google Analytics -->
<?php }?>

</body></html><?php }} ?>
