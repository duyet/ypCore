-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2014 at 03:09 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Table structure for table `yp_module_news`
--

CREATE TABLE IF NOT EXISTS `yp_module_news` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `title_alias` varchar(250) NOT NULL,
  `post` text NOT NULL,
  `tag` varchar(250) NOT NULL,
  `keyword` varchar(250) NOT NULL,
  `reply_count` int(10) NOT NULL DEFAULT '0',
  `view_count` int(10) NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `post_date` int(10) NOT NULL,
  `like` varchar(250) NOT NULL,
  `like_count` int(10) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `time_last_change` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Table structure for table `yp_module_news_cat`
--

CREATE TABLE IF NOT EXISTS `yp_module_news_cat` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `title_alias` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `cat_parent_id` int(10) NOT NULL DEFAULT '0',
  `order` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `yp_module_news_cat`
--

INSERT INTO `yp_module_news_cat` (`cat_id`, `title`, `title_alias`, `description`, `cat_parent_id`, `order`) VALUES
(1, 'Thông báo', 'Thong-bao', 'Thông báo, tin tức mới', 0, 1),
(2, 'Tin tức', 'Tin-tuc', 'Tin tức, tin giới trẻ, tin thế giới...', 0, 0),
(3, 'Hệ thống', 'He-thong', 'Thông báo mới từ hệ thống', 1, 0),
(4, 'Đội code', 'Doi-code', 'Thông tin từ đội code', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `yp_module_news_comment`
--

CREATE TABLE IF NOT EXISTS `yp_module_news_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_id` int(10) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `comment` text NOT NULL,
  `date` int(10) NOT NULL,
  `like` text NOT NULL,
  `like_count` int(10) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT '1',
  `parent_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `yp_module_news_comment`
--

INSERT INTO `yp_module_news_comment` (`id`, `post_id`, `user_id`, `username`, `email`, `comment`, `date`, `like`, `like_count`, `status`, `parent_id`) VALUES
(1, 1, 1, 'admin', '', 'Tuyệt! Phải test thử mới được!', 0, '', 0, '', 0),
(2, 1, 1, 'MOD', '', 'Good Job!', 0, '', 0, '', 0),
(3, 1, 5, 'admin', 'duyet2000@gmail.com', 'hello!!!!!!!', 1375110716, '', 0, '', 0),
(4, 1, 5, 'admin', 'duyet2000@gmail.com', 'Goooooooooooooooooooooooooooooooooooooooooooooooo!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', 1375110759, '', 0, '', 0),
(5, 1, 5, 'admin', 'duyet2000@gmail.com', '&lt;b&gt;Google.com&lt;/b&gt;', 1375110793, '', 0, '', 0),
(6, 1, 5, 'admin', 'duyet2000@gmail.com', '\r\nHOME\r\nNEWS\r\nDOWNLOAD\r\nACCOUNT\r\nCONTACT\r\nra mắt chính thức ypcore cms v1.0\r\n23/07/2013 12:39	 ·  by admin	 ·  view 187 time(s)	 ·  5 like(s) Add-this share \r\nChính thức ra mắt ypCore ampha v1.0 \r\n\r\nSau 2 tháng Code cuối cùng bản Final cũng đã hoàn thành!\r\n\r\nTag: No tag\r\ncomment\r\nComment was successfully!\r\nAccount: admin\r\nEmail: duyet2000@gmail.com\r\n   Comment\r\nlist comment\r\n admin 07:00 01/01/1970: Tuyệt! Phải test thử mới được!\r\n\r\n MOD 07:00 01/01/1970: Good Job!\r\n\r\n admin 11:11 29/07/2013: hello!!!!!!!\r\n\r\n admin 11:12 29/07/2013: Goooooooooooooooooooooooooooooooooooooooooooooooo!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!\r\n\r\n admin 11:13 29/07/2013: &lt;b&gt;Google.com&lt;/b&gt;\r\n\r\nypCore v1.1.46 r6542 · (c) 2013 · Lemon9x · Facebook · Twitter · Build in 0.29166s · Explain debug\r\n', 1375110814, '', 0, '', 0),
(7, 5, 0, 'Google', 'google@gmail.com', 'Test a comment from ypCore !!!', 1375111292, '', 0, '', 0),
(8, 5, 5, 'admin', 'duyet2000@gmail.com', 'wwwwwwwwwwwwwwwwwwwwwww', 1375237930, '', 0, '', 0),
(9, 5, 5, 'admin', 'duyet2000@gmail.com', 'Test minify', 1375252369, '', 0, '', 0),
(10, 5, 5, 'admin', 'duyet2000@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaa', 1375252391, '', 0, '', 0),
(11, 5, 5, 'admin', 'duyet2000@gmail.com', 'Testttttttttttttttttttttttttttttttttttttttttt minifyt', 1375257328, '', 0, '', 0),
(12, 5, 0, 'XUtttt', 'duye@gamil.com', 'st Comment\r\n Google 11:21 29/07/2013: Test a comment from ypCore !!!\r\n\r\n admin 10:32 31/07/2013: wwwwwwwwwwwwwwwwwwwwwww\r\n\r\n admin 02:32 31/07/2013: Test minify\r\n\r\n admin 02:33 31/07/2013: aaaaaaaaaaaaaaaaaaaaaaa\r\n\r\n admin 03:55 31/07/2013: Testttttt', 1375261192, '', 0, '', 0),
(13, 1, 7, 'google', 'googl@ggoo.com', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 1375335856, '', 0, '', 0),
(14, 1, 5, 'admin', 'duyet2000@gmail.com', 'sjsdjkfskjdfsjkdhfd', 1375589429, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `yp_module_news_tag`
--

CREATE TABLE IF NOT EXISTS `yp_module_news_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(25) NOT NULL,
  `tag` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `yp_module_news_tag`
--

INSERT INTO `yp_module_news_tag` (`id`, `post_id`, `tag`) VALUES
(36, 22, 'test'),
(37, 22, 'test'),
(38, 22, 'test'),
(39, 22, 'test'),
(40, 22, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `yp_settings`
--

CREATE TABLE IF NOT EXISTS `yp_settings` (
  `setting` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `serialized` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`setting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yp_settings`
--

INSERT INTO `yp_settings` (`setting`, `value`, `serialized`) VALUES
('addthis', '0', 0),
('admin_fake_link', 'Admincp', 0),
('admin_language', 'en', 0),
('admin_template', 'simple', 0),
('admin_template_list', 'a:3:{i:0;s:7:"default";i:1;s:6:"simple";i:2;s:13:"simple - Copy";}', 1),
('allow_comment', '1', 0),
('cache', '1', 0),
('captcha_lenght', '4', 0),
('comment_captcha', '1', 0),
('comment_disqus_active', '1', 0),
('comment_disqus_alias', 'lvdcoder', 0),
('comment_maxchars', '600', 0),
('comment_minchars', '5', 0),
('compression_level', '9', 0),
('compress_html', '0', 0),
('compress_page', '1', 0),
('custom_route', 'a:2:{i:0;a:4:{s:3:"new";s:3:"rss";s:5:"route";s:8:"News/Rss";s:6:"delete";b:0;s:14:"replace_to_new";b:1;}i:1;a:4:{s:3:"new";s:11:"sitemap.xml";s:5:"route";s:12:"News/Sitemap";s:6:"delete";b:0;s:14:"replace_to_new";b:1;}}', 1),
('debug', '0', 0),
('default_module', 'News/Index', 0),
('deny_if_none_useragent', '1', 0),
('download_path', 'source/d.png', 0),
('FACEBOOK_APP_ID', '', 0),
('FACEBOOK_SECRET', '', 0),
('fb_login', '0', 0),
('firewall', '1', 0),
('floodchecktime', '45', 0),
('flood_check_time', '45', 0),
('google_analytics_code', '', 0),
('language', 'en', 0),
('layouts', 'a:4:{s:5:"About";i:2;s:7:"Contact";i:2;s:8:"Download";i:4;s:4:"News";i:1;}', 1),
('like_active', '1', 0),
('menu', 'a:1:{s:8:"top_menu";a:9:{i:0;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:4:"Home";s:4:"link";s:1:"/";}i:1;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:4:"News";s:4:"link";s:10:"News/Index";}i:2;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:8:"Download";s:4:"link";s:14:"Download/Index";}i:3;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:7:"Account";s:4:"link";s:12:"User/Account";}i:4;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:7:"Contact";s:4:"link";s:13:"Contact/Index";}i:5;a:4:{s:5:"level";i:2;s:9:"parent_id";i:1;s:4:"text";s:8:"Category";s:4:"link";s:8:"News/Cat";}i:6;a:4:{s:5:"level";i:2;s:9:"parent_id";i:1;s:4:"text";s:11:"Newest Post";s:4:"link";s:11:"News/Newest";}i:7;a:4:{s:5:"level";i:2;s:9:"parent_id";i:2;s:4:"text";s:15:"Download Source";s:4:"link";s:15:"Download/Source";}i:8;a:4:{s:5:"level";i:2;s:9:"parent_id";i:2;s:4:"text";s:17:"Download Software";s:4:"link";s:17:"Download/Software";}}}', 1),
('modules', 'a:4:{i:0;a:3:{s:3:"dir";s:5:"About";s:6:"active";b:1;s:4:"info";a:4:{s:11:"module_name";s:5:"About";s:7:"version";s:3:"1.0";s:6:"author";s:6:"System";s:4:"date";s:10:"01/07/2013";}}i:1;a:3:{s:3:"dir";s:7:"Contact";s:6:"active";b:0;s:4:"info";a:4:{s:11:"module_name";s:7:"Contact";s:7:"version";s:3:"1.0";s:6:"author";s:6:"System";s:4:"date";s:10:"01/07/2013";}}i:2;a:3:{s:3:"dir";s:8:"Download";s:6:"active";b:0;s:4:"info";a:4:{s:11:"module_name";s:8:"Download";s:7:"version";s:3:"1.0";s:6:"author";s:6:"System";s:4:"date";s:10:"01/07/2013";}}i:3;a:3:{s:3:"dir";s:4:"News";s:6:"active";b:1;s:4:"info";a:4:{s:11:"module_name";s:4:"News";s:7:"version";s:3:"1.0";s:6:"author";s:6:"System";s:4:"date";s:10:"01/07/2013";}}}', 1),
('module_About_active', '1', 0),
('module_Contact_active', '0', 0),
('module_Download_active', '0', 0),
('module_News_active', '1', 0),
('pageview', '5044', 0),
('postautosave', '1', 0),
('postmaxchars', '100000', 0),
('post_request_type', '1', 0),
('quick_edit_post', '1', 0),
('register_active', '1', 0),
('rewrite', '1', 0),
('rss_content_maxchars', '0', 0),
('rss_max_post', '20', 0),
('security_https', '0', 0),
('show_view_counter', '1', 0),
('site_description', 'ypCore System is a blogging platform. Build in base fast and simple. Just enjoy it!', 0),
('site_email', 'duyet2000@gmail.com', 0),
('site_keywork', 'ypcore, news', 0),
('site_title', 'ypCore System', 0),
('site_title_construct', '#TITLE# · ypCore System', 0),
('static_url', 'http://localhost/ypCore_CDN', 0),
('static_url_active', '1', 0),
('template', 'ypBootstrap', 0),
('template_list', 'a:3:{i:0;s:7:"default";i:1;s:6:"twover";i:2;s:11:"ypBootstrap";}', 1),
('titlemaxchars', '250', 0),
('tmp', '/tmp', 0),
('upload_dir', '/apps/upload', 0),
('url_lowcase', '1', 0),
('version', 'ypCore v0.1.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `yp_usergroup`
--

CREATE TABLE IF NOT EXISTS `yp_usergroup` (
  `groupid` int(11) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`groupid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `yp_usergroup`
--

INSERT INTO `yp_usergroup` (`groupid`, `groupname`, `description`) VALUES
(1, 'Member', ''),
(2, 'Moderation', ''),
(3, 'Supper Moderation', ''),
(4, 'Administrator', '');

-- --------------------------------------------------------

--
-- Table structure for table `yp_users`
--

CREATE TABLE IF NOT EXISTS `yp_users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `salt` varchar(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `groupid` tinyint(2) NOT NULL DEFAULT '1',
  `birthday` date NOT NULL,
  `register_day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `yp_users`
--

INSERT INTO `yp_users` (`userid`, `username`, `password`, `salt`, `full_name`, `email`, `groupid`, `birthday`, `register_day`) VALUES
(5, 'admin', 'de9efea127212e7a9abadf6b717eeb56', '7389AEEA88', '', 'duyet2000@gmail.com', 4, '0000-00-00', '2013-07-21 01:27:56'),
(6, 'cute_test', 'd8586a864be4e608a7a3d76bec1b2ef9', '2F4C2A704F', 'Test', 'just_test@gmail.com', 1, '0000-00-00', '2013-08-01 04:58:46'),
(7, 'google', '8e8edabd3686a86bf72bbffa28d0d7a0', '7ADFCA2F2A', 'Google.om', 'googl@ggoo.com', 1, '0000-00-00', '2013-08-01 05:02:12'),
(8, 'admin', '', '0E3E0FEE23', '', 'duyet2000@gmail.com', 4, '0000-00-00', '2013-08-06 12:14:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
