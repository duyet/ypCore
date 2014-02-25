-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2014 at 10:06 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ypcore`
--

-- --------------------------------------------------------

--
-- Table structure for table `yp_settings`
--

DROP TABLE IF EXISTS `yp_settings`;
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
('addthis', '1', 0),
('addthis_id', 'ra-4e911dd9207371f5', 0),
('admin_fake_link', 'cp', 0),
('admin_language', 'en', 0),
('admin_template', 'simple', 0),
('admin_template_list', 'a:3:{i:0;s:7:"default";i:1;s:6:"simple";i:2;s:13:"simple - Copy";}', 1),
('allow_comment', '1', 0),
('cache', '1', 0),
('cache_template', '0', 0),
('captcha_lenght', '4', 0),
('comment_captcha', '1', 0),
('comment_disqus_active', '1', 0),
('comment_disqus_alias', 'lvdcoder', 0),
('comment_maxchars', '600', 0),
('comment_minchars', '5', 0),
('compression_level', '9', 0),
('compress_html', '0', 0),
('compress_page', '0', 0),
('custom_route', 'a:2:{i:0;a:4:{s:3:"new";s:3:"rss";s:5:"route";s:8:"News/Rss";s:6:"delete";b:0;s:14:"replace_to_new";b:1;}i:1;a:4:{s:3:"new";s:11:"sitemap.xml";s:5:"route";s:12:"News/Sitemap";s:6:"delete";b:0;s:14:"replace_to_new";b:1;}}', 1),
('debug', '0', 0),
('default_module', 'News/Index', 0),
('deny_if_none_useragent', '1', 0),
('download_path', 'source/d.png', 0),
('editor', 'ckeditor', 0),
('FACEBOOK_APP_ID', '', 0),
('facebook_login', '0', 0),
('FACEBOOK_SECRET', '', 0),
('fb_login', '0', 0),
('firewall', '0', 0),
('floodchecktime', '45', 0),
('flood_check_time', '45', 0),
('google_analytics_code', '', 0),
('google_login', '1', 0),
('language', 'en', 0),
('layouts', 'a:4:{s:5:"About";i:2;s:7:"Contact";i:2;s:8:"Download";i:4;s:4:"News";i:1;}', 1),
('like_active', '1', 0),
('menu', 'a:1:{s:8:"top_menu";a:9:{i:0;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:4:"Home";s:4:"link";s:1:"/";}i:1;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:4:"News";s:4:"link";s:10:"News/Index";}i:2;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:8:"Download";s:4:"link";s:14:"Download/Index";}i:3;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:7:"Account";s:4:"link";s:12:"User/Account";}i:4;a:4:{s:5:"level";i:1;s:9:"parent_id";i:0;s:4:"text";s:7:"Contact";s:4:"link";s:13:"Contact/Index";}i:5;a:4:{s:5:"level";i:2;s:9:"parent_id";i:1;s:4:"text";s:8:"Category";s:4:"link";s:8:"News/Cat";}i:6;a:4:{s:5:"level";i:2;s:9:"parent_id";i:1;s:4:"text";s:11:"Newest Post";s:4:"link";s:11:"News/Newest";}i:7;a:4:{s:5:"level";i:2;s:9:"parent_id";i:2;s:4:"text";s:15:"Download Source";s:4:"link";s:15:"Download/Source";}i:8;a:4:{s:5:"level";i:2;s:9:"parent_id";i:2;s:4:"text";s:17:"Download Software";s:4:"link";s:17:"Download/Software";}}}', 1),
('modules', 'a:4:{i:0;a:3:{s:3:"dir";s:5:"About";s:6:"active";b:1;s:4:"info";a:4:{s:11:"module_name";s:5:"About";s:7:"version";s:3:"1.0";s:6:"author";s:6:"System";s:4:"date";s:10:"01/07/2013";}}i:1;a:3:{s:3:"dir";s:7:"Contact";s:6:"active";b:0;s:4:"info";a:4:{s:11:"module_name";s:7:"Contact";s:7:"version";s:3:"1.0";s:6:"author";s:6:"System";s:4:"date";s:10:"01/07/2013";}}i:2;a:3:{s:3:"dir";s:8:"Download";s:6:"active";b:0;s:4:"info";a:4:{s:11:"module_name";s:8:"Download";s:7:"version";s:3:"1.0";s:6:"author";s:6:"System";s:4:"date";s:10:"01/07/2013";}}i:3;a:3:{s:3:"dir";s:4:"News";s:6:"active";b:1;s:4:"info";a:4:{s:11:"module_name";s:4:"News";s:7:"version";s:3:"1.0";s:6:"author";s:6:"System";s:4:"date";s:10:"01/07/2013";}}}', 1),
('module_About_active', '1', 0),
('module_Contact_active', '0', 0),
('module_Download_active', '0', 0),
('module_News_active', '1', 0),
('news_view_request_type', 'alias', 0),
('pageview', '8514', 0),
('password_maxchars', '30', 0),
('password_minchars', '5', 0),
('postautosave', '1', 0),
('postmaxchars', '100000', 0),
('post_request_type', '1', 0),
('quick_edit_post', '1', 0),
('register_active', '0', 0),
('rewrite', '1', 0),
('rss_content_maxchars', '0', 0),
('rss_max_post', '20', 0),
('security_https', '0', 0),
('services_check_version_url', 'http://ypcore.github.io/update.json', 0),
('site_description', 'ypCore System is a blogging platform. Build in base fast and simple. Just enjoy it!', 0),
('site_email', 'duyet2000@gmail.com', 0),
('site_keywork', 'ypcore, news, tin tức, blog công nghệ', 0),
('site_title', 'ypNews', 0),
('site_title_construct', '#TITLE# · ypCore System', 0),
('static_url', 'http://localhost/ypCore_CDN', 0),
('static_url_active', '0', 0),
('template', 'default', 0),
('template_list', 'a:2:{i:0;s:7:"default";i:1;s:6:"twover";}', 1),
('titlemaxchars', '250', 0),
('tmp', '/tmp', 0),
('totaldraft', '0', 0),
('totalpost', '0', 0),
('upload_dir', '/apps/upload', 0),
('url_lowcase', '1', 0),
('username_maxchars', '30', 0),
('username_minchars', '5', 0),
('version', '0.1.0', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
