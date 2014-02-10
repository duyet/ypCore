<?php /*%%SmartyHeaderCode:1242052f8b9c2c5bd79-38077729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '558104503553da03bed644f689cb0c7f619cf5b8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\News\\View.php',
      1 => 1392012454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1242052f8b9c2c5bd79-38077729',
  'variables' => 
  array (
    'Header' => 0,
    'news' => 0,
    'site_url' => 0,
    'quick_edit' => 0,
    'comment_disqus' => 0,
    'comment_disqus_alias' => 0,
    'Comment' => 0,
    'ListComment' => 0,
    'static_url' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f8b9c2d60d99_62003644',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8b9c2d60d99_62003644')) {function content_52f8b9c2d60d99_62003644($_smarty_tpl) {?><!DOCTYPE html> 
<html id="ypCore_html" lang="" dir="LTR" class="html" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
  <head id="ypHead" profile="http://gmpg.org/xfn/11">
    <meta http-equiv="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">    
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" /><link rel="shortcut icon" href="http://localhost/ypCore2/content/default/images/favicon.ico" />
    <noscript><meta http-equiv="refresh" content="0; URL=/ypCore2/?noscript=1" /></noscript>    
    <base href="http://localhost/ypCore2" />
    <title>ypCore NewsFeed</title>

    <link rel="alternate" media="handheld" href="http://localhost/ypCore2" />
    <link rel="alternate" type="application/rss+xml" title="News Feed" href="http://localhost/ypCore2/rss" />
    <link rel="stylesheet" type="text/css" href="http://localhost/ypCore2/static/css/bootstrap3/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic|Open+Sans:700,400">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,800|Source+Code+Pro">
    <link rel="stylesheet" href="http://localhost/ypCore2/content/default/css/screen.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="ypCore System is a blogging platform. Build in base fast and simple. Just enjoy it!" />
    <meta name="keywork" content="ypcore, news, tin tức, blog công nghệ" />
    <meta name="software" content="[ypCore.Tester]" />
    

    <meta property="og:description" content="ypCore System is a blogging platform. Build in base fast and simple. Just enjoy it!" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:site_name" content="ypCore NewsFeed" />

    <!--[if IE]>
      <script src="http://localhost/ypCore2/content/default/js/html5.js"></script>
      <link rel='stylesheet' href='http://localhost/ypCore2/content/default/css/ie.css'>
    <![endif]--> 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e911dd9207371f5"></script>
    <script type="text/javascript">
      addthis.layers({
        'theme' : 'transparent',
        'share' : {
          'position' : 'left',
          'numPreferredServices' : 5
        },  
        'whatsnext' : { },  
        'recommended' : {
          'title': 'Recommended for you:'
        } 
      });
    </script>
    
    <noscript><style type="text/css">#loadstatus{ display: none }</style></noscript>
  </head>
<body class="ypCore_root _no_script_ body_moduif home-template" id="ypCore_root" onload="loadstatus.display='none'"><div id="ypLoadingbar"></div> 
  <div id="loadstatus">Loading ...</div>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/ypCore2">ypNews</a>
        </div>
        <div class="collapse navbar-collapse">  <ul class="nav navbar-nav">    <li class="active"><a href="http://localhost/ypCore2">Home</a></li>    <li><a href="http://localhost/ypCore2/news">News</a></li>    <li><a href="#about">About</a></li>  </ul></div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">





<article class="post">
	<h1 class="post-title">Mẹo ẩn nội dung bạn bè Facebook mà không cần 'unfriend'</h1>
	<div class="time-author">
		By <a href="/ypCore2/user/user?userid=0">admin</a> 
		at <time pubdate datetime="10/02/2014 06:04" class="date">10/02/2014 06:04</time> 
		 on <a href="/ypCore2/news/tag?tag=facebook" alt="Tag facebook">facebook</a>, <a href="/ypCore2/news/tag?tag=mẹo" alt="Tag mẹo">mẹo</a>, <a href="/ypCore2/news/tag?tag=ẩn" alt="Tag ẩn">ẩn</a>, <a href="/ypCore2/news/tag?tag=thủ thuật" alt="Tag thủ thuật">thủ thuật</a>		 | <a href="http://localhost/ypCore2">Back to home</a>
	</div>

	<section class="post-content">
		<p ><p>V&agrave;i bước đơn giản bạn dễ d&agrave;ng l&agrave;m theo khi kh&ocirc;ng muốn nh&igrave;n thấy bất kỳ nội dung n&agrave;o từ ai đ&oacute; tr&ecirc;n Facebook m&agrave; kh&ocirc;ng hủy kết bạn (unfriend).</p>

<p>Nhiều bạn b&egrave; tr&ecirc;n&nbsp;<a href="http://tiin.vn/search.html?search%5Bquery%5D=Facebook">Facebook</a>&nbsp;cuả ch&uacute;ng ta cả ng&agrave;y c&oacute; thể cập nhật trạng th&aacute;i, h&igrave;nh ảnh m&agrave; kh&ocirc;ng biết ch&aacute;n. Bạn c&oacute; thể nhanh ch&oacute;ng chặn (block) hay hủy kết bạn (unfriend) họ, song nếu họ lại l&agrave; một người bạn hay một th&agrave;nh vi&ecirc;n gia đ&igrave;nh, việc đ&oacute; lại kh&ocirc;ng đơn giản. Tuy nhi&ecirc;n, Facebook cho ph&eacute;p bạn ẩn nội dung từ họ m&agrave; kh&ocirc;ng phải hủy kết bạn khiến họ &ldquo;kinh động&rdquo;.</p>

<p><img alt="Mẹo ẩn nội dung bạn bè Facebook mà không cần unfriend" src="http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/38a5515c-2a72-4619-9905-a7e136fa4daa.jpg" style="text-align:center" /></p>

<div style="page-break-after: always;"><span style="display:none">&nbsp;</span></div>

<p>Truy cập t&agrave;i khoản Facebook, t&igrave;m một cập nhật bạn kh&ocirc;ng muốn thấy tr&ecirc;n d&ograve;ng tin mới News Feed. Click chuột v&agrave;o dấu mũi t&ecirc;n b&ecirc;n cạnh, một tr&igrave;nh đơn sẽ xổ xuống, click v&agrave;o &ldquo;T&ocirc;i kh&ocirc;ng muốn thấy c&aacute;i n&agrave;y&rdquo; (I don&rsquo;t want to see this) để đảm bảo những cập nhật n&agrave;y kh&ocirc;ng xuất hiện tr&ecirc;n News Feed rồi click v&agrave;o &ldquo;Hủy theo d&otilde;i&rdquo; (Unfollow) để bạn kh&ocirc;ng bao giờ thấy người n&agrave;y nữa.</p>

<p>Để ẩn chat bạn l&agrave;m theo c&aacute;c bước sau:</p>

<p><img alt="Mẹo ẩn nội dung bạn bè Facebook mà không cần unfriend" src="http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/25fca273-eb06-45cf-a3c6-89678d4dc484.jpg" /></p>

<p>Đến mục chat trong Facebook, ở cuối m&agrave;n h&igrave;nh, click v&agrave;o biểu tượng t&ugrave;y chọn v&agrave; truy cập v&agrave;o c&agrave;i đặt n&acirc;ng cao (advanced settings). Một tr&igrave;nh đơn sẽ xuất hiện, click v&agrave;o &ldquo;Bật tr&ograve; chuyện với tất cả bạn b&egrave; ngoại trừ&rdquo; rồi g&otilde; t&ecirc;n của người bạn kh&ocirc;ng muốn chat c&ugrave;ng.</p>

<p><img alt="Mẹo ẩn nội dung bạn bè Facebook mà không cần unfriend" src="http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/a88cef6d-0680-4881-91af-3944fe753c0b.jpg" /></p>

<p>Sau khi ho&agrave;n th&agrave;nh c&aacute;c bước tr&ecirc;n, t&agrave;i khoản của bạn tr&ocirc;ng vẫn như b&igrave;nh thường, người bị bạn ẩn đi vẫn c&oacute; thể viết l&ecirc;n &ldquo;tường&rdquo; Facebook của bạn nhưng bạn kh&ocirc;ng phải lo nh&igrave;n thấy họ lần nữa hay bị họ ch&agrave;o hỏi qua chat.</p>
</p>
	</section>

	<hr />

	<div class="comment row">
				<h3 class="comment">Comment</h3>
			<div id="disqus_thread"></div>
			<script type="text/javascript">
	        (function() {
	            var yp_comment_disqus = document.createElement('script'); 
	            yp_comment_disqus.type = 'text/javascript'; 
	            yp_comment_disqus.async = true;
	            yp_comment_disqus.src = '//lvdcoder.disqus.com/embed.js';
	            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(yp_comment_disqus);
	        })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">Comments powered by <span class="logo-disqus">Disqus</span></a>
	    	</div>


</article>


</div>
<footer class="site-footer" id="footer">
    <div class="inner container">
         <section class="copyright">ypCore v0.1.0 &middot; (c) 2014 &bull; All rights reserved.</section>
         <section class="poweredby">Published with <a class="" href="http://ypcore.org">ypCore</a>.</section>
         <section class="theme"><span class="tooltip">ypCore CMS</span></section>
  </div>
</footer>

<img src="/ypCore2/system/stat" width="0" height="0" style="display:none"/>

  
<script></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
<script>!window.jQuery && document.write('<scr'+'ipt type="text/javascript" src="http://localhost/ypCore2/static/javascript/jquery/jquery-1.9.1.js"><\/scr'+'ipt>');</script>
<script src="http://localhost/ypCore2/static/javascript/bootstrap/bootstrap.js"></script>

<script src="http://localhost/ypCore2/content/default/js/main.js"></script>

<script type="text/javascript">
    $('#loadstatus').fadeOut(3000);
    $('a').click(function(){
      $('#loadstatus').fadeIn();
    });
</script>


</body></html><?php }} ?>
