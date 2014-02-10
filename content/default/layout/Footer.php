
</div>
<footer class="site-footer" id="footer">
    <div class="inner container">
         <section class="copyright">ypCore v{$ypcore_version} &middot; (c) 2014 &bull; All rights reserved.</section>
         <section class="poweredby">Published with <a class="" href="http://ypcore.org">ypCore</a>.</section>
         <section class="theme"><span class="tooltip">ypCore CMS</span></section>
  </div>
</footer>

{$system_stat}

  {if ($debug_db_info)}
  <hr />
  <table class="container table">
    <thead><tr><td>#</td><td>Query</td><td>Time ({$debug_db_info.time})</td></tr></thead>
    <tbody>
    {$i = 1}{foreach $debug_db_info.queries as $data}
     <tr><td>{$i}</td><td>{$data.query}</td><td>{$data.time}</td></tr>
    {$i++}{/foreach}
   </tbody>
  </table>
  {/if}

<script>{$js_var}</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
<script>!window.jQuery && document.write('<scr'+'ipt type="text/javascript" src="{$static_url}/javascript/jquery/jquery-1.9.1.js"><\/scr'+'ipt>');</script>
<script src="{$static_url}/javascript/bootstrap/bootstrap.js"></script>
{$js_addon}
<script src="{$template_url}/js/main.js"></script>

<script type="text/javascript">
    $('#loadstatus').fadeOut(3000);
    $('a').click(function(){
      $('#loadstatus').fadeIn();
    });
</script>

{if $google_analytics_code}
<!-- Google Analytics -->
<script type="text/javascript">
var _gaq = [._setAccount', '{$google_analytics_code}, ._trackPageview];
!function(t, d) {
  var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
  g.async = true; g.src = '//www.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g, s);
} ('script', document);
</script>
<!-- / Google Analytics -->
{/if}

</body></html>