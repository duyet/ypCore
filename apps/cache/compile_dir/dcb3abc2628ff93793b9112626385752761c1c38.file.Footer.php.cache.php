<?php /* Smarty version Smarty-3.1.16, created on 2014-02-08 04:47:50
         compiled from "D:\xampp\htdocs\ypCore2\apps\view\\default\layout\Footer.php" */ ?>
<?php /*%%SmartyHeaderCode:718352f5a8e6c9c1e8-38743874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb3abc2628ff93793b9112626385752761c1c38' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\apps\\view\\\\default\\layout\\Footer.php',
      1 => 1391829835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718352f5a8e6c9c1e8-38743874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ypcore_version' => 0,
    'debug_db_info' => 0,
    'i' => 0,
    'data' => 0,
    'static_url' => 0,
    'template_url' => 0,
    'js_addon' => 0,
    'js_var' => 0,
    'google_analytics_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f5a8e6cf0706_09216527',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f5a8e6cf0706_09216527')) {function content_52f5a8e6cf0706_09216527($_smarty_tpl) {?>

<footer class="site-footer">
      <div class="inner">
           <section class="copyright"><?php echo $_smarty_tpl->tpl_vars['ypcore_version']->value;?>
 &middot; (c) 2014 &bull; All rights reserved.</section>
           <section class="poweredby">Published with <a class="" href="http://ypcore.org">ypCore</a>.</section>
           <section class="theme"><span class="tooltip">ypCore CMS</span></section>
    </div>
</footer>

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


<script type="text/javascript">$('body').removeClass('_no_script_','');</script> 

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
  <script>!window.jQuery && document.write('<scr'+'ipt type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/jquery/jquery-1.9.1.js"><\/scr'+'ipt>');</script>   
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/jquery.loadingbar.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/bootstrap/bootstrap.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['static_url']->value;?>
/javascript/jquery/jquery.animatescroll.js"></script>
<?php echo $_smarty_tpl->tpl_vars['js_addon']->value;?>

<script src="<?php echo $_smarty_tpl->tpl_vars['template_url']->value;?>
/js/main.js"></script>



  <script><?php echo $_smarty_tpl->tpl_vars['js_var']->value;?>


  </script>

  <script type="text/javascript">
    $("a").loadingbar({
      target: "#ypLoadingbar",
      replaceURL: true,
      direction: "right",
     
      /* Default Ajax Parameters.  */
      async: true, 
      complete: function(xhr, text) {
      },
      cache: true,
      error: function(xhr, text, e) {},
      global: true,
      headers: {},
      statusCode: {},
      dataType: "html",
      done: function(data) {
        alert(data);
    }
    });
  </script>

<?php if ($_smarty_tpl->tpl_vars['google_analytics_code']->value) {?>
<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = [._setAccount', '<?php echo $_smarty_tpl->tpl_vars['google_analytics_code']->value;?>
, ._trackPageview];
!function(t, d) {
  var ypCoreJs_g = d.createElement(t),
  ypCoreJs_s = d.getElementsByTagName(t)[0];
  ypCoreJs_g.async = true;
  ypCoreJs_g.src = 'http://www.google-analytics.com/ga.js';
  ypCoreJs_s.parentNode.insertBefore(ypCoreJs_g, ypCoreJs_s);
} ('script', document);
</script>
<!-- / Google Analytics -->
<?php }?>

  </body>
</html><?php }} ?>
