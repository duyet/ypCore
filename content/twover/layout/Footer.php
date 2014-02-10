      <hr />
      <div class="row">
        <div class="container">
          <div class="span2"></div>
          <div class="span8 footer"><center> 
            <?php echo $ypcore_version ?> &middot; (c) 2013 &middot; 
            <a href="https://lemon9x.com" title="" alt=""><?php echo $text_lemon9x ?></a> &middot; 
            <a href="https://facebook.com/yplitgroup" title="" alt=""><?php echo $text_fb ?></a> &middot; 
            <a href="https://twitter.com/yplitgroup" title="" alt=""><?php echo $text_twitter ?></a> &middot;
            <a href="javascript: void(0);" title="" alt="" id="gotop" onClick="ypCore_gotop()">Go top</a>
           <?php if ($is_debug) { ?>
          &middot; <?php echo $text_built_in ?> <?php echo $debug_time ?>s &middot; <a href="<?php echo $explain_link ?>"><?php echo $text_explain_debug ?></a>
            <?php } ?>
          </center></div>
          <div class="span2"></div>
        </div>
      </div>
      <br />
    </div>
  </div>

  <?php if ($debug_db_info) { ?>
  <hr />
  <table class="container table">
    <thead><tr><td>#</td><td>Query</td><td>Time (<?php echo $debug_db_info['time'] ?>)</td></tr></thead>
    <tbody>
    <?php $i = 1; foreach($debug_db_info['queries'] as $data) { ?>
     <tr><td><?php echo $i ?></td><td><?php echo $data['query'] ?></td><td><?php echo $data['time'] ?></td></tr>
    <?php $i++; } ?>
   <tbody>
  </table>
  <?php } ?>


<script type="text/javascript">$('body').removeClass('_no_script_','');</script> 
<script src="<?php echo $static_url ?>/javascript/bootstrap/bootstrap.js"></script>
<script src="<?php echo $static_url ?>/javascript/jquery/jquery.animatescroll.js"></script>
<?php echo $js_addon ?>
<script src="<?php echo $template_url ?>/js/main.js"></script>

<?php if ($google_analytics_code) { ?>
<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = [['_setAccount', '<?php echo $google_analytics_code ?>'], ['_trackPageview']];
!function(t, d) {
  var ypCoreJs_g = d.createElement(t),
  ypCoreJs_s = d.getElementsByTagName(t)[0];
  ypCoreJs_g.async = true;
  ypCoreJs_g.src = 'http://www.google-analytics.com/ga.js';
  ypCoreJs_s.parentNode.insertBefore(ypCoreJs_g, ypCoreJs_s);
} ('script', document);
</script>
<!-- / Google Analytics -->
<?php } ?>

  </body>
</html>