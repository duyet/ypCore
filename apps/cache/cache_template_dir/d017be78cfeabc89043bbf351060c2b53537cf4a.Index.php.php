<?php /*%%SmartyHeaderCode:2968452f8b9be6cd861-70080537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd017be78cfeabc89043bbf351060c2b53537cf4a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ypCore2\\content\\\\default\\module\\News\\Index.php',
      1 => 1392022080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2968452f8b9be6cd861-70080537',
  'variables' => 
  array (
    'Header' => 0,
    'posts' => 0,
    'post' => 0,
    'text_on' => 0,
    'pre_page_link' => 0,
    'next_page_link' => 0,
    'Footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_52f8b9be771800_44155119',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52f8b9be771800_44155119')) {function content_52f8b9be771800_44155119($_smarty_tpl) {?><!DOCTYPE html> 
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



<main class="content" role="main">
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="10-02-14">10 Feb 2014</time> on <a href="/ypCore2/news/tag?tag=facebook" alt="Tag facebook">facebook</a>, <a href="/ypCore2/news/tag?tag=mẹo" alt="Tag mẹo">mẹo</a>, <a href="/ypCore2/news/tag?tag=ẩn" alt="Tag ẩn">ẩn</a>, <a href="/ypCore2/news/tag?tag=thủ thuật" alt="Tag thủ thuật">thủ thuật</a></span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=13">Mẹo ẩn nội dung bạn bè Facebook mà không cần 'unfriend'</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>V&agrave;i bước đơn giản bạn dễ d&agrave;ng l&agrave;m theo khi kh&ocirc;ng muốn nh&igrave;n thấy bất kỳ nội dung n&agrave;o từ ai đ&oacute; tr&ecirc;n Facebook m&agrave; kh&ocirc;ng hủy kết bạn (unfriend).</p>

<p>Nhiều bạn b&egrave; tr&ecirc;n&nbsp;<a href="http://tiin.vn/search.html?search%5Bquery%5D=Facebook">Facebook</a>&nbsp;cuả ch&uacute;ng ta cả ng&agrave;y c&oacute; thể cập nhật trạng th&aacute;i, h&igrave;nh ảnh m&agrave; kh&ocirc;ng biết ch&aacute;n. Bạn c&oacute; thể nhanh ch&oacute;ng chặn (block) hay hủy kết bạn (unfriend) họ, song nếu họ lại l&agrave; một người bạn hay một th&agrave;nh vi&ecirc;n gia đ&igrave;nh, việc đ&oacute; lại kh&ocirc;ng đơn giản. Tuy nhi&ecirc;n, Facebook cho ph&eacute;p bạn ẩn nội dung từ họ m&agrave; kh&ocirc;ng phải hủy kết bạn khiến họ &ldquo;kinh động&rdquo;.</p>

<p><img alt="Mẹo ẩn nội dung bạn bè Facebook mà không cần unfriend" src="http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/38a5515c-2a72-4619-9905-a7e136fa4daa.jpg" style="text-align:center" /></p>

</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="10-02-14">10 Feb 2014</time> on <a href="/ypCore2/news/tag?tag=flappy bird" alt="Tag flappy bird">flappy bird</a>, <a href="/ypCore2/news/tag?tag=tech" alt="Tag tech">tech</a>, <a href="/ypCore2/news/tag?tag=Công Nghệ" alt="Tag Công Nghệ">Công Nghệ</a>, <a href="/ypCore2/news/tag?tag=Game" alt="Tag Game">Game</a></span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=12">'Gỡ bỏ Flappy Bird là quyết định thông minh của Hà Đông'</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>&Ocirc;ng Nguyễn Anh Tuấn, Gi&aacute;m đốc c&ocirc;ng ty ePi Technologies cho rằng, Flappy Bird sẽ c&oacute; lượng download đột biến trước thời điểm game bị hạ khỏi c&aacute;c gian ứng dụng.</p>

<div><strong>Quyết định hạ Flappy Bird của Nguyễn H&agrave; Đ&ocirc;ng khiến nhiều người nuối tiếc, anh nh&igrave;n nhận việc n&agrave;y như thế n&agrave;o?</strong></div>

<div>&nbsp;</div>

<div>Theo t&ocirc;i đ&oacute; l&agrave; quyết định th&ocirc;ng minh v&agrave; hợp l&yacute; của Đ&ocirc;ng. D&acirc;n c&ocirc;ng nghệ thường c&oacute; cuộc sống kh&aacute; đơn giản v&agrave; kh&eacute;p k&iacute;n, họ chỉ muốn tập trung l&agrave;m việc v&igrave; đam m&ecirc; của họ m&agrave; th&ocirc;i. Thời gian vừa qua r&otilde; r&agrave;ng l&agrave; truyền th&ocirc;ng đ&atilde; g&acirc;y ảnh hưởng qu&aacute; nhiều v&agrave; kh&ocirc;ng tốt đến cuộc sống của t&aacute;c giả, v&igrave; thế việc gỡ bỏ game sẽ l&agrave;m giảm thiểu những &aacute;p lực n&agrave;y.
</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="10-02-14">10 Feb 2014</time> on <a href="/ypCore2/news/tag?tag=flappy bird" alt="Tag flappy bird">flappy bird</a>, <a href="/ypCore2/news/tag?tag=tech" alt="Tag tech">tech</a>, <a href="/ypCore2/news/tag?tag=Công Nghệ" alt="Tag Công Nghệ">Công Nghệ</a>, <a href="/ypCore2/news/tag?tag=Game" alt="Tag Game">Game</a></span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=11">Flappy Bird đã bị xóa khỏi các kho ứng dụng</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>Khoảng 1h s&aacute;ng 10/2, tr&ograve; chơi g&acirc;y sốt Flappy Bird đ&atilde; bị hạ xuống khỏi hai kho ứng dụng Android v&agrave; iOS.</p>

<p style="text-align:justify">Đ&uacute;ng như th&ocirc;ng b&aacute;o, t&aacute;c giả Nguyễn H&agrave; Đ&ocirc;ng bắt đầu x&oacute;a tr&ograve; chơi đang dẫn đầu c&aacute;c kho ứng dụng v&agrave;o rạng s&aacute;ng 10/2. Cập nhật l&uacute;c 0h30, t&igrave;m kiếm từ kh&oacute;a&nbsp;<a href="http://tiin.vn/chuyen-muc/sanh/go-bo-flappy-bird-la-quyet-dinh-thong-minh-cua-ha-dong.html" style="padding: 0px; margin: 0px; text-decoration: none; color: rgb(3, 103, 159);"><strong>Flappy Bird</strong></a>&nbsp;tr&ecirc;n Google Play v&agrave; App Store đều kh&ocirc;ng ra kết quả.</p>

<p style="text-align:center"><img alt="Flappy Bird đã bị xóa khỏi các kho ứng dụng" src="http://media6.tiin.vn/media01/4f7a58b257985/2014/02/10/77f8a39e-c8dd-48fb-b408-4e9bf641c1f3.jpg" style="border:1px solid rgb(221, 221, 221); margin:0px; max-width:585px; padding:6px" /></p>

</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="08-02-14">08 Feb 2014</time> </span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=10">Firefox’s Chrome-Like Australis Redesign Arrives In Aurora Release Channel</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>This has been a long time in the making, but after almost&nbsp;<a href="https://blog.mozilla.org/ux/2013/12/whywhatiswhere/" style="box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;" target="_blank">three months</a>&nbsp;of testing in the highly experimental Firefox Nightly release channel, Firefox&rsquo;s new Australis user interface has now&nbsp;<a href="http://www.mozilla.org/en-US/firefox/29.0a2/auroranotes/" style="box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;" target="_blank">found its way</a>&nbsp;into the&nbsp;<a href="http://www.mozilla.org/en-US/firefox/aurora/" style="box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;" target="_blank">pre-beta Aurora channel</a>. The&nbsp;<a href="https://blog.mozilla.org/futurereleases/2014/02/07/test-the-new-firefox-sync-and-customize-the-new-ui-in-firefox-aurora/" style="box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;" target="_blank">new user interface</a>, which the company has been working on for&nbsp;<a href="http://techcrunch.com/2013/06/01/mozilla-readies-major-firefox-redesign-as-it-ponders-what-the-browser-of-the-future-should-look-like/" style="box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;">a long time</a>, gives the browser a more Chrome-like look. As in Chrome, the settings and options are now behind the same kind of&nbsp;<a href="http://www.designfloat.com/blog/2013/09/09/hamburger-menu-prominent-ui-evolution/" style="box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;" target="_blank">drawer menu</a>&nbsp;next to the URL bar as in Google&rsquo;s browser and rounded tabs at the top of the screen.</p>

</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="06-02-14">06 Feb 2014</time> on <a href="/ypCore2/news/tag?tag=sssssssssss" alt="Tag sssssssssss">sssssssssss</a></span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=7">Hello world!</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>Welcome to ypCore. This is your first post. Edit or delete it, then start blogging!</p>
</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="05-02-14">05 Feb 2014</time> on <a href="/ypCore2/news/tag?tag=Fb" alt="Tag Fb">Fb</a></span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=6">Những stt buồn</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>Chấp nhận y&ecirc;u anh l&agrave; em đ&atilde; chấp nhận mọi tổn thương...bởi Người dự bị...phải chịu đau</p>

<p>- Người đến sau...bao giờ cũng kh&oacute;c Hạnh ph&uacute;c</p>

<p>- Đổi bằng nước mắt Niềm tin</p>

<p>- Mua bằng tổn thương Cuối c&ugrave;ng</p>

<p>- Y&ecirc;u l&agrave; cho v&agrave; nhận</p>

<p>- Hay đơn giản...chỉ l&agrave; hận v&agrave; đau</p>
</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="05-02-14">05 Feb 2014</time> </span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=5">Sample Page</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><div class="entry-content">
<p>This is an example page. It&rsquo;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>

<blockquote>
<p>Hi there! I&rsquo;m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&ntilde;a coladas. (And gettin&rsquo; caught in the rain.)</p>
</blockquote>

<p>&hellip;or something like this:</p>

<blockquote>
<p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>
</blockquote>

<p>As a new WordPress user, you should go to <a href="http://localhost/wordpress-3.8/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>
</div>
</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="04-02-14">04 Feb 2014</time> on <a href="/ypCore2/news/tag?tag=Test cái *beep*" alt="Tag Test cái *beep*">Test cái *beep*</a></span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=4">This is Tiếng Việt and this is English, I just test Font</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>Đ&acirc;y l&agrave; b&agrave;i viết test để phục vụ mục đ&iacute;ch test. Nếu bạn k muốn test th&igrave; đừng c&oacute; viết c&aacute;i b&agrave;i viết test để phục vụ cho mục đ&iacute;ch test để test giống như t&ocirc;i đang test thế n&agrave;y.&nbsp;</p>
</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="02-02-14">02 Feb 2014</time> on <a href="/ypCore2/news/tag?tag=open-beta" alt="Tag open-beta">open-beta</a>, <a href="/ypCore2/news/tag?tag=new" alt="Tag new">new</a>, <a href="/ypCore2/news/tag?tag=test" alt="Tag test">test</a></span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=3">Chạy thử mã nguồn mở ypCore v0.1.0 mã hiệu releases beta test</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>[Lemon9x.com] 02/02/2014 - Ch&iacute;nh thức ra mắt m&atilde; nguồn mở ypCore v.0.1.0 Beta Test.&nbsp;<br />
M&atilde; hiệu 521d-test<br />
Author: <a href="https://lvduit.appspot.com">LvDuit</a><br />
Update: 02/02/2014<br />
Email: <a href="mail:duyet2000@gmail.com">duyet2000@gmail.com</a></p>

<p>&nbsp;</p>

<p>This is new post from tester. It&#39;s very easy to use. Now, I try to find a new content, some trouble, such as Editor, Front and Core themes, and so so.&nbsp;</p>
</p>
			</section>
		</article>
			<article class="post tag">
			<header class="post-header">
				<span class="post-meta"><time datetime="02-02-14">02 Feb 2014</time> on <a href="/ypCore2/news/tag?tag=Google" alt="Tag Google">Google</a>, <a href="/ypCore2/news/tag?tag=TNW" alt="Tag TNW">TNW</a></span>
				<h2 class="post-title"><a href="/ypCore2/news/view?id=2">Google brings Chrome apps to Android and iOS, lets developers submit to Google Play and Apple’s App Store</a></h2>
			</header>
			<section class="post-excerpt">
				<p style="font-family: 'Droid Serif',serif;"><p>Google today&nbsp;<a href="http://blog.chromium.org/2014/01/run-chrome-apps-on-mobile-using-apache.html" style="color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;">launched</a>&nbsp;Chrome apps for Android and iOS. The company is offering an early developer preview of a toolchain based on&nbsp;<a href="http://cordova.apache.org/" style="color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;">Apache Cordova</a>, an open-source mobile development framework for building native mobile apps using HTML, CSS and JavaScript. Developers can use the tool to wrap their Chrome app with a native application shell that enables them to distribute it via Google Play and Apple&rsquo;s App Store.</p>

</p>
			</section>
		</article>
	
<section class="pagination">
		<div class="next-page"><a class="newer-posts" href="/ypCore2/news/index?p=2">Next page</a></div>	
</section>
</main>


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
