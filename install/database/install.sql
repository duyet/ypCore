-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2014 at 03:25 PM
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
CREATE DATABASE IF NOT EXISTS `ypcore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ypcore`;

-- --------------------------------------------------------

--
-- Table structure for table `yp_admin_logs`
--

DROP TABLE IF EXISTS `yp_admin_logs`;
CREATE TABLE IF NOT EXISTS `yp_admin_logs` (
  `id` int(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `time` int(250) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `user_agent` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yp_admin_logs`
--

INSERT INTO `yp_admin_logs` (`id`, `username`, `message`, `time`, `ip`, `user_agent`, `url`) VALUES
(0, 'admin', 'Edit URL and HTML Setting.', 1391589335, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fadmincp%2Fsetting%2Furlandhtml'),
(0, 'admin', 'Edit URL and HTML Setting.', 1391589715, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fadmincp%2Fsetting%2Furlandhtml'),
(0, 'admin', 'Edit User setting.', 1391590161, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fadmincp%2Fsetting%2Fuser'),
(0, 'admin', 'Edit User setting.', 1391590196, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fadmincp%2Fsetting%2Fuser'),
(0, 'admin', 'Edit Security Setting.', 1391590866, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fadmincp%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit Security Setting.', 1391590872, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcontrol%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit Security Setting.', 1391590962, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcontrol%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit Security Setting.', 1391591070, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcontrol%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit Security Setting.', 1391591155, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcontrol%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit Security Setting.', 1391591158, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fadmincp%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit Security Setting.', 1391591288, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fadmincp%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit Security Setting.', 1391591293, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fadmincp%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit Security Setting.', 1391598865, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit URL and HTML Setting.', 1391600009, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Furlandhtml'),
(0, 'admin', 'Edit Security Setting.', 1391600158, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Fsecurity'),
(0, 'admin', 'Edit User setting.', 1391650750, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Fuser'),
(0, 'admin', 'Edit Template Setting.', 1391740443, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1391740461, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1391740466, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1391740756, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1391740763, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1391740768, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1392003326, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', 'http%3A%2F%2Fypcore-system.net%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1392024257, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1392024282, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate'),
(0, 'admin', 'Edit Template Setting.', 1392024300, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate');

-- --------------------------------------------------------

--
-- Table structure for table `yp_data`
--

DROP TABLE IF EXISTS `yp_data`;
CREATE TABLE IF NOT EXISTS `yp_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `value` text NOT NULL,
  `serialized` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yp_module_news`
--

DROP TABLE IF EXISTS `yp_module_news`;
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
  `editor` varchar(25) NOT NULL DEFAULT 'ckeditor',
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `yp_module_news`
--

INSERT INTO `yp_module_news` (`post_id`, `title`, `title_alias`, `post`, `tag`, `keyword`, `reply_count`, `view_count`, `user_id`, `username`, `post_date`, `like`, `like_count`, `status`, `time_last_change`, `editor`) VALUES
(1, 'GoDaddy changing security policy after infamous social engineering attack on @N', 'GoDaddy-changing-security-policy-after-infamous-social-engineering-attack-on-@N.html', '&lt;p&gt;&lt;a href=&quot;http://thenextweb.com/socialmedia/2014/01/29/lost-50000-twitter-username/&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;Naoki Hiroshima&amp;rsquo;s&lt;/a&gt;&amp;nbsp;scary tale of losing his single-character Twitter handle has captivated the internet over the last few days. First,&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/socialmedia/2014/01/29/lost-50000-twitter-username/#!t9ais&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;we heard the story of how Naoki was held ransom&lt;/a&gt;&amp;nbsp;for the rare handle,&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/insider/2014/01/30/godaddy-accepts-partial-responsibility-social-engineering-attack-ns-customer-account/#!t9ajq&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;then GoDaddy admitted it was partially responsible&lt;/a&gt;&amp;nbsp;for giving out details that lead to the compromise.&lt;/p&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;Today, GoDaddy said on Twitter that it is changing its security policies to help protect against similar attacks of social engineering in the future:&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;a href=&quot;https://twitter.com/N_is_stolen&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;@N_is_stolen&lt;/a&gt;&amp;nbsp;Will do. We now require 8 card digits, lock after 3 attempts and deal with 2-factor authentication accounts differently. ^NF&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;mdash; GoDaddy (@GoDaddy)&amp;nbsp;&lt;a href=&quot;https://twitter.com/GoDaddy/statuses/429607819147739137&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;February 1, 2014&lt;/a&gt;&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;The change may appear small on the surface, but should help prevent a repeat of the same story. It would be extremely hard for an attacker to gain 8 digits of a credit card (unless the whole card was stolen) and by locking the account after 3 attempts the company is protecting itself from attackers that would just hang up the phone and try again with a new representative.&lt;/p&gt;\r\n\r\n&lt;p&gt;Unfortunately, Naoki&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/twitter/2014/01/30/the-original-owner-of-n-still-hasnt-got-his-twitter-account-back-someone-else-snapped-it-up/#!t9bLv&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;still hasn&amp;rsquo;t received his Twitter account back&lt;/a&gt;&amp;nbsp;with the handle now in the grips of yet another squatter. The story isn&amp;rsquo;t quite over yet.&lt;/p&gt;\r\n\r\n&lt;p&gt;➤&amp;nbsp;&lt;a href=&quot;http://techcrunch.com/2014/02/01/godaddy-updates-its-user-protection-policies-in-wake-of-infamous-twitter-account-extortion/&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;GoDaddy Updates Its User Protection Policies In Wake Of Infamous Twitter Account Extortion&amp;nbsp;[Techcrunch]&lt;/a&gt;&lt;/p&gt;\r\n', 'Godady, TNW', '', 0, 3, 0, 'duyet2000@gmail.com', 1391346420, '', 0, '1', 1391346516, 'ckeditor'),
(2, 'Google brings Chrome apps to Android and iOS, lets developers submit to Google Play and Apple’s App Store', 'Google-brings-Chrome-apps-to-Android-and-iOS-lets-developers-submit-to-Google-Play-and-Apple’s-App-Store.html', '&lt;p&gt;Google today&amp;nbsp;&lt;a href=&quot;http://blog.chromium.org/2014/01/run-chrome-apps-on-mobile-using-apache.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;launched&lt;/a&gt;&amp;nbsp;Chrome apps for Android and iOS. The company is offering an early developer preview of a toolchain based on&amp;nbsp;&lt;a href=&quot;http://cordova.apache.org/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Apache Cordova&lt;/a&gt;, an open-source mobile development framework for building native mobile apps using HTML, CSS and JavaScript. Developers can use the tool to wrap their Chrome app with a native application shell that enables them to distribute it via Google Play and Apple&amp;rsquo;s App Store.&lt;/p&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;Today&amp;rsquo;s announcement builds on the company&amp;rsquo;s&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/09/05/google-chrome-becomes-a-true-platform-with-todays-launch-of-chrome-apps/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;launch of Chrome apps in September&lt;/a&gt;&amp;nbsp;that work offline by default and act like native applications on the host operating system. Those Chrome apps work on Windows,&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/12/11/googles-chrome-app-launcher-now-available-mac-users/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Mac&lt;/a&gt;, and Chrome OS, but now the company wants to bring them to the mobile world.&lt;/p&gt;\r\n\r\n&lt;p&gt;Last month, we&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/12/03/google-building-chrome-apps-support-android-ios-beta-release-coming-soon-january-2014/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;broke the news&lt;/a&gt;&amp;nbsp;that the company was working on bringing Chrome packaged apps from the desktop to the mobile world. At the time, Google developer advocate Joe Marini said the beta toolkit for porting and building such apps would be ready in January. In the last week of the month, Google has delivered as promised.&lt;/p&gt;\r\n\r\n&lt;p&gt;Google offers two developer workflows for the aforementioned native app packaging process. You can run your Chrome app on a device or emulator using the command-line or an IDE, and you can also use the&amp;nbsp;&lt;a href=&quot;https://github.com/MobileChromeApps/harness/releases/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Chrome Apps Developer Tool&lt;/a&gt;&amp;nbsp;to run your app on an Android device without the need to install the mobile platform&amp;rsquo;s SDK or an IDE.&lt;/p&gt;\r\n\r\n&lt;p&gt;Here is an example of a basic to-do list Chrome app running on OS X as well as Android:&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;http://cdn2.tnwcdn.com/wp-content/blogs.dir/1/files/2014/01/chrome_app_mac_android.png&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;&lt;img alt=&quot;chrome app mac android Google brings Chrome apps to Android and iOS, lets developers submit to Google Play and Apples App Store&quot; class=&quot;aligncenter size-full wp-image-730536&quot; src=&quot;http://cdn3.tnwcdn.com/wp-content/blogs.dir/1/files/2014/01/chrome_app_mac_android.png&quot; style=&quot;-webkit-user-select:none; border-image:none; border:0px currentColor; box-sizing:border-box; display:block; height:auto; margin-left:auto; margin-right:auto; max-width:100%; width:485px&quot; title=&quot;chrome app mac android photo&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;For those who don&amp;rsquo;t know, Chrome packaged apps are written in HTML, JavaScript, and CSS, but launch outside the browser, work offline by default, and access certain APIs not available to Web apps. For these mobile apps, developers have access to&amp;nbsp;&lt;a href=&quot;http://plugins.cordova.io/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Cordova APIs&lt;/a&gt;&amp;nbsp;as well as many of the core Chrome APIs, including:&lt;/p&gt;\r\n\r\n&lt;ul style=&quot;list-style: none; margin: 1em 0px; color: rgb(78, 88, 96); line-height: 28.79px; padding-right: 0px; padding-left: 2em; font-family: &amp;quot;FF Tisa&amp;quot;; font-size: 16px; box-sizing: border-box;&quot;&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/identity.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;identity&lt;/a&gt;&amp;nbsp;&amp;ndash; sign-in users usingOAuth2 without prompting for passwords.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/in_app_payments.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;payments&lt;/a&gt;&amp;nbsp;(currently Android only) &amp;ndash; sell virtual goods within your mobile app.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/pushMessaging.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;pushMessaging&lt;/a&gt;&amp;nbsp;&amp;ndash; push messages to your app from your server.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/socket.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;sockets&lt;/a&gt;&amp;nbsp;&amp;ndash; send and receive data over the network using TCP and UDP.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/notifications.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;notifications&lt;/a&gt;&amp;nbsp;(currently Android only) &amp;ndash; send rich notifications from your mobile app.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;https://developer.chrome.com/apps/storage.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;storage&lt;/a&gt;&amp;nbsp;&amp;ndash; store and retrieve key-value data locally.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;https://developer.chrome.com/apps/storage.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;syncFileSystem&lt;/a&gt;&amp;nbsp;&amp;ndash; store and retrieve files backed by Google Drive.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/alarms.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;alarms&lt;/a&gt;&amp;nbsp;&amp;ndash; run tasks periodically.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;If you&amp;rsquo;re a developer interested in building Chrome apps for mobile, or porting your existing Chrome apps to mobile, you can get started by checking out&amp;nbsp;&lt;a href=&quot;https://github.com/MobileChromeApps/mobile-chrome-apps/blob/master/README.md&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;the readme&lt;/a&gt;, as well as the links below.&lt;/p&gt;\r\n\r\n&lt;p&gt;➤&amp;nbsp;&lt;a href=&quot;https://github.com/GoogleChrome/chrome-app-samples#mobile-support&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Sample apps&lt;/a&gt;&amp;nbsp;|&amp;nbsp;&lt;a href=&quot;http://stackoverflow.com/questions/tagged/google-chrome-app&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Stack Overflow&lt;/a&gt;&amp;nbsp;|&amp;nbsp;&lt;a href=&quot;https://groups.google.com/a/chromium.org/forum/#!forum/chromium-apps&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Developer Forum&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;See also &amp;ndash;&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/11/21/google-building-chrome-app-based-development-environment-using-dart-polymer/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Google is building a Chrome app-based development environment called Spark&lt;/a&gt;&amp;nbsp;and&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/11/28/googles-chromium-team-building-way-launch-apps-without-installation-just-clicking-link/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Google&amp;rsquo;s Chromium team is building a way to launch apps without installation by just clicking a link&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;em&gt;Top Image Credit:&amp;nbsp;&lt;a href=&quot;http://www.gettyimages.co.uk/Search/Search.aspx?assettype=image&amp;amp;artist=AFP&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Kimihiro Hoshino/AFP/Getty Images&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;\r\n', 'Google, TNW', '', 0, 6, 0, 'admin', 1391346485, '', 0, '1', 1391689520, 'ckeditor'),
(3, 'Chạy thử mã nguồn mở ypCore v0.1.0 mã hiệu releases beta test', 'Ra-mắt-beta-test-ma-nguồn-mở-ypCore-v0-1-0.html', '&lt;p&gt;[Lemon9x.com] 02/02/2014 - Ch&amp;iacute;nh thức ra mắt m&amp;atilde; nguồn mở ypCore v.0.1.0 Beta Test.&amp;nbsp;&lt;br /&gt;\r\nM&amp;atilde; hiệu 521d-test&lt;br /&gt;\r\nAuthor: &lt;a href=&quot;https://lvduit.appspot.com&quot;&gt;LvDuit&lt;/a&gt;&lt;br /&gt;\r\nUpdate: 02/02/2014&lt;br /&gt;\r\nEmail: &lt;a href=&quot;mail:duyet2000@gmail.com&quot;&gt;duyet2000@gmail.com&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;This is new post from tester. It&amp;#39;s very easy to use. Now, I try to find a new content, some trouble, such as Editor, Front and Core themes, and so so.&amp;nbsp;&lt;/p&gt;\r\n', 'open-beta, new, test', '', 0, 11, 0, 'duyet2000@gmail.com', 1391346785, '', 0, '1', 1391403620, 'ckeditor'),
(4, 'This is Tiếng Việt and this is English, I just test Font', 'This-is-tieng-Viet-and-this-is-English-I-just-test-Font.html', '&lt;p&gt;Đ&amp;acirc;y l&amp;agrave; b&amp;agrave;i viết test để phục vụ mục đ&amp;iacute;ch test. Nếu bạn k muốn test th&amp;igrave; đừng c&amp;oacute; viết c&amp;aacute;i b&amp;agrave;i viết test để phục vụ cho mục đ&amp;iacute;ch test để test giống như t&amp;ocirc;i đang test thế n&amp;agrave;y.&amp;nbsp;&lt;/p&gt;\r\n', 'Test cái *beep*', 'Đây là 1 cái test keyword thôi, chứ nó éo có phải là keyword', 0, 4, 0, 'admin', 1391531641, '', 0, '1', 1391615767, 'ckeditor'),
(5, 'Sample Page', 'Sample-Page.html', '&lt;div class=&quot;entry-content&quot;&gt;\r\n&lt;p&gt;This is an example page. It&amp;rsquo;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;Hi there! I&amp;rsquo;m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&amp;ntilde;a coladas. (And gettin&amp;rsquo; caught in the rain.)&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&amp;hellip;or something like this:&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;As a new WordPress user, you should go to &lt;a href=&quot;http://localhost/wordpress-3.8/wp-admin/&quot;&gt;your dashboard&lt;/a&gt; to delete this page and create new pages for your content. Have fun!&lt;/p&gt;\r\n&lt;/div&gt;\r\n', '', '', 0, 10, 0, 'duyet2000@gmail.com', 1391611146, '', 0, '1', 1391959305, 'ckeditor'),
(6, 'Những stt buồn', 'nhung-stt-buon', '&lt;p&gt;Chấp nhận y&amp;ecirc;u anh l&amp;agrave; em đ&amp;atilde; chấp nhận mọi tổn thương...bởi Người dự bị...phải chịu đau&lt;/p&gt;\r\n\r\n&lt;p&gt;- Người đến sau...bao giờ cũng kh&amp;oacute;c Hạnh ph&amp;uacute;c&lt;/p&gt;\r\n\r\n&lt;p&gt;- Đổi bằng nước mắt Niềm tin&lt;/p&gt;\r\n\r\n&lt;p&gt;- Mua bằng tổn thương Cuối c&amp;ugrave;ng&lt;/p&gt;\r\n\r\n&lt;p&gt;- Y&amp;ecirc;u l&amp;agrave; cho v&amp;agrave; nhận&lt;/p&gt;\r\n\r\n&lt;p&gt;- Hay đơn giản...chỉ l&amp;agrave; hận v&amp;agrave; đau&lt;/p&gt;\r\n', 'Fb', '', 0, 0, 0, 'admin', 1391615963, '', 0, '1', 1391617693, 'ckeditor'),
(7, 'Hello world!', 'hello-word', '&lt;p&gt;Welcome to ypCore. This is your first post. Edit or delete it, then start blogging!&lt;/p&gt;\r\n', 'sssssssssss', '', 0, 8, 0, 'admin', 1391649663, '', 0, '1', 1392022773, 'ckeditor'),
(10, 'Firefox’s Chrome-Like Australis Redesign Arrives In Aurora Release Channel', 'Firefox’s-Chrome-Like-Australis-Redesign-Arrives-In-Aurora-Release-Channel', '&lt;p&gt;This has been a long time in the making, but after almost&amp;nbsp;&lt;a href=&quot;https://blog.mozilla.org/ux/2013/12/whywhatiswhere/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;three months&lt;/a&gt;&amp;nbsp;of testing in the highly experimental Firefox Nightly release channel, Firefox&amp;rsquo;s new Australis user interface has now&amp;nbsp;&lt;a href=&quot;http://www.mozilla.org/en-US/firefox/29.0a2/auroranotes/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;found its way&lt;/a&gt;&amp;nbsp;into the&amp;nbsp;&lt;a href=&quot;http://www.mozilla.org/en-US/firefox/aurora/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;pre-beta Aurora channel&lt;/a&gt;. The&amp;nbsp;&lt;a href=&quot;https://blog.mozilla.org/futurereleases/2014/02/07/test-the-new-firefox-sync-and-customize-the-new-ui-in-firefox-aurora/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;new user interface&lt;/a&gt;, which the company has been working on for&amp;nbsp;&lt;a href=&quot;http://techcrunch.com/2013/06/01/mozilla-readies-major-firefox-redesign-as-it-ponders-what-the-browser-of-the-future-should-look-like/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot;&gt;a long time&lt;/a&gt;, gives the browser a more Chrome-like look. As in Chrome, the settings and options are now behind the same kind of&amp;nbsp;&lt;a href=&quot;http://www.designfloat.com/blog/2013/09/09/hamburger-menu-prominent-ui-evolution/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;drawer menu&lt;/a&gt;&amp;nbsp;next to the URL bar as in Google&amp;rsquo;s browser and rounded tabs at the top of the screen.&lt;/p&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;These similarities with Chrome is likely the first thing users will notice. Indeed, if you quickly switch back and forth between the two, you&amp;rsquo;ll likely get confused about which one is which.&lt;/p&gt;\r\n\r\n&lt;p&gt;The team also completely redesigned the menu too, and added a large number of customization options that aren&amp;rsquo;t available in most other browsers. While Firefox was always pretty customizable, this new version makes it far easier to discover these customization options and use them. Just click on &amp;lsquo;customize&amp;rsquo; in the menu and drag and drop menu items around to improve your user experience.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;australis_menu_001&quot; class=&quot;alignright wp-image-955030&quot; src=&quot;http://tctechcrunch2011.files.wordpress.com/2014/02/australis_menu_001.png?w=350&amp;amp;h=434&quot; style=&quot;border:1px solid rgb(213, 213, 213); box-sizing:content-box; float:right; height:auto; margin:0px 0px 1em 1em; max-width:100%; width:350px&quot; /&gt;If you always want to have the developer tools accessible in the URL bar, for example, that&amp;rsquo;s now easy to do.&lt;/p&gt;\r\n\r\n&lt;p&gt;As&amp;nbsp;Mozilla&amp;rsquo;s VP of Firefox engineering Jonathan Nightingale told me&amp;nbsp;&lt;a href=&quot;http://techcrunch.com/2013/06/01/mozilla-readies-major-firefox-redesign-as-it-ponders-what-the-browser-of-the-future-should-look-like/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot;&gt;last year&lt;/a&gt;, the idea behind the redesign was to give users a browser that is simpler to use, with a cleaner and more intuitive design. As you open more tabs, for example, those that aren&amp;rsquo;t in the foreground fade into the background &amp;ldquo;to make it faster for you to find and focus on the tab you want.&amp;rdquo;&lt;/p&gt;\r\n\r\n&lt;p&gt;Now that Australis is part of Firefox&amp;rsquo;s regular release channels, it will slowly find its way into the beta and stable channels, too. It&amp;rsquo;s unclear when exactly this will happen. Mozilla often holds back features from graduating to the next channel until it feels they are ready for a wider release, and this new user interface will surely spark some interesting discussions among Firefox&amp;rsquo;s users.&lt;/p&gt;\r\n\r\n&lt;p&gt;As part of today&amp;rsquo;s update, Mozilla is also launching&amp;nbsp;&lt;a href=&quot;https://blog.mozilla.org/blog/2014/02/07/introducing-mozilla-firefox-accounts/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;Firefox Accounts&lt;/a&gt;, which will offer access to the latest update of&amp;nbsp;&lt;a href=&quot;https://blog.mozilla.org/services/2014/02/07/a-better-firefox-sync/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;Firefox Sync&lt;/a&gt;&amp;nbsp;and other tools. While Mozilla has long offered users a way to sync their bookmarks, add-ons, passwords and open tabs across machines, it never offered users an easy way to just sign up and sign in to access all the integrated services across its products.&lt;/p&gt;\r\n\r\n&lt;p&gt;Firefox Accounts are now available in the Aurora release channel, too, so if you want to try both the new user interface and these new tools, just head&amp;nbsp;&lt;a href=&quot;http://www.mozilla.org/en-US/firefox/aurora/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;over here&lt;/a&gt;&amp;nbsp;and install the Aurora release. It won&amp;rsquo;t overwrite your existing Firefox install.&lt;/p&gt;\r\n', '', '', 0, 15, 0, 'admin', 1391852097, '', 0, '1', 0, 'ckeditor'),
(11, 'Flappy Bird đã bị xóa khỏi các kho ứng dụng', 'Flappy-Bird-da-bị-xoa-khỏi-cac-kho-ung-dụng', '&lt;p&gt;Khoảng 1h s&amp;aacute;ng 10/2, tr&amp;ograve; chơi g&amp;acirc;y sốt Flappy Bird đ&amp;atilde; bị hạ xuống khỏi hai kho ứng dụng Android v&amp;agrave; iOS.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;Đ&amp;uacute;ng như th&amp;ocirc;ng b&amp;aacute;o, t&amp;aacute;c giả Nguyễn H&amp;agrave; Đ&amp;ocirc;ng bắt đầu x&amp;oacute;a tr&amp;ograve; chơi đang dẫn đầu c&amp;aacute;c kho ứng dụng v&amp;agrave;o rạng s&amp;aacute;ng 10/2. Cập nhật l&amp;uacute;c 0h30, t&amp;igrave;m kiếm từ kh&amp;oacute;a&amp;nbsp;&lt;a href=&quot;http://tiin.vn/chuyen-muc/sanh/go-bo-flappy-bird-la-quyet-dinh-thong-minh-cua-ha-dong.html&quot; style=&quot;padding: 0px; margin: 0px; text-decoration: none; color: rgb(3, 103, 159);&quot;&gt;&lt;strong&gt;Flappy Bird&lt;/strong&gt;&lt;/a&gt;&amp;nbsp;tr&amp;ecirc;n Google Play v&amp;agrave; App Store đều kh&amp;ocirc;ng ra kết quả.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Flappy Bird đã bị xóa khỏi các kho ứng dụng&quot; src=&quot;http://media6.tiin.vn/media01/4f7a58b257985/2014/02/10/77f8a39e-c8dd-48fb-b408-4e9bf641c1f3.jpg&quot; style=&quot;border:1px solid rgb(221, 221, 221); margin:0px; max-width:585px; padding:6px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;Flappy Bird bắt đầu bị x&amp;oacute;a khỏi c&amp;aacute;c gian ứng dụng. Ảnh: Quốc Huy.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;Tr&amp;ecirc;n iOS, Flappy Bird đ&amp;atilde; bị ẩn ho&amp;agrave;n to&amp;agrave;n. Người d&amp;ugrave;ng Android tại Mỹ v&amp;agrave; một số quốc gia kh&amp;aacute;c cũng kh&amp;ocirc;ng tải được phần mềm n&amp;agrave;y. Trong khi đ&amp;oacute;, cập nhật l&amp;uacute;c 0h45, người d&amp;ugrave;ng Android tại Việt Nam vẫn đang download được nhưng sau đ&amp;oacute; kh&amp;ocirc;ng thể.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Flappy Bird đã bị xóa khỏi các gian ứng dụng&quot; src=&quot;http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/dcfba335-b0cd-4d2d-9734-df961d47083e.jpg&quot; style=&quot;border:1px solid rgb(221, 221, 221); margin:0px; max-width:585px; padding:6px; text-align:justify&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;Flappy Bird biến mất khỏi kho ứng dụng Android.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;Khi bắt đầu hạ Flappy Bird, ứng dụng n&amp;agrave;y kh&amp;ocirc;ng t&amp;igrave;m kiếm được, nhưng vẫn hiển thị trong nh&amp;oacute;m tải miễn ph&amp;iacute; nhiều nhất. Sau đ&amp;oacute;, tựa game n&amp;agrave;y lần lượt biến mất.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;Flappy Bird đã bị xóa khỏi các gian ứng dụng&quot; src=&quot;http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/4de95849-9fb2-443e-880b-c4e488c81047.jpg&quot; style=&quot;border:1px solid rgb(221, 221, 221); margin:0px; max-width:585px; padding:6px; text-align:justify&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;Flappy Bird kh&amp;ocirc;ng c&amp;ograve;n nằm trong top những ứng dụng miễn ph&amp;iacute; phổ biến nhất tr&amp;ecirc;n iOS. Ảnh: Th&amp;agrave;nh Duy.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;22 tiếng đồng hồ trước,&amp;nbsp;&lt;strong&gt;Nguyễn H&amp;agrave; Đ&amp;ocirc;ng&lt;/strong&gt;&amp;nbsp;th&amp;ocirc;ng b&amp;aacute;o tr&amp;ecirc;n Twitter rằng anh sẽ x&amp;oacute;a Flappy Bird v&amp;igrave; kh&amp;ocirc;ng chịu th&amp;ecirc;m được nữa. Đ&amp;acirc;y l&amp;agrave; th&amp;ocirc;ng tin g&amp;acirc;y sốc, b&amp;aacute;o ch&amp;iacute; quốc tế v&amp;agrave; trong nước đồng loạt đưa tin sự kiện n&amp;agrave;y.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;Flappy Bird được đưa l&amp;ecirc;n App Store khoảng th&amp;aacute;ng 5/2013 v&amp;agrave; Android ngay sau đ&amp;oacute;. Ứng dụng n&amp;agrave;y c&amp;oacute; sự tăng trưởng đột ngột cuối 2013 v&amp;agrave; trở th&amp;agrave;nh phần mềm ăn kh&amp;aacute;ch nhất tr&amp;ecirc;n Android, iOS. T&amp;aacute;c giả tựa game tiết lộ với The Verge, doanh thu quảng c&amp;aacute;o tr&amp;ecirc;n game đạt 50.000 USD/ng&amp;agrave;y.&lt;/p&gt;\r\n', 'flappy bird, tech, Công Nghệ, Game', '', 0, 2, 0, 'duyet2000@gmail.com', 1392005965, '', 0, '1', 1392006283, 'ckeditor'),
(12, '''Gỡ bỏ Flappy Bird là quyết định thông minh của Hà Đông''', '''Gỡ-bỏ-Flappy-Bird-la-quyết-dịnh-thong-minh-của-Ha-Dong''', '&lt;p&gt;&amp;Ocirc;ng Nguyễn Anh Tuấn, Gi&amp;aacute;m đốc c&amp;ocirc;ng ty ePi Technologies cho rằng, Flappy Bird sẽ c&amp;oacute; lượng download đột biến trước thời điểm game bị hạ khỏi c&amp;aacute;c gian ứng dụng.&lt;/p&gt;\r\n\r\n&lt;div&gt;&lt;strong&gt;Quyết định hạ Flappy Bird của Nguyễn H&amp;agrave; Đ&amp;ocirc;ng khiến nhiều người nuối tiếc, anh nh&amp;igrave;n nhận việc n&amp;agrave;y như thế n&amp;agrave;o?&lt;/strong&gt;&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Theo t&amp;ocirc;i đ&amp;oacute; l&amp;agrave; quyết định th&amp;ocirc;ng minh v&amp;agrave; hợp l&amp;yacute; của Đ&amp;ocirc;ng. D&amp;acirc;n c&amp;ocirc;ng nghệ thường c&amp;oacute; cuộc sống kh&amp;aacute; đơn giản v&amp;agrave; kh&amp;eacute;p k&amp;iacute;n, họ chỉ muốn tập trung l&amp;agrave;m việc v&amp;igrave; đam m&amp;ecirc; của họ m&amp;agrave; th&amp;ocirc;i. Thời gian vừa qua r&amp;otilde; r&amp;agrave;ng l&amp;agrave; truyền th&amp;ocirc;ng đ&amp;atilde; g&amp;acirc;y ảnh hưởng qu&amp;aacute; nhiều v&amp;agrave; kh&amp;ocirc;ng tốt đến cuộc sống của t&amp;aacute;c giả, v&amp;igrave; thế việc gỡ bỏ game sẽ l&amp;agrave;m giảm thiểu những &amp;aacute;p lực n&amp;agrave;y.\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Trong v&amp;ograve;ng 22 tiếng trước khi Flappy Bird bị hạ, lượng download của game n&amp;agrave;y sẽ tăng ch&amp;oacute;ng mặt. L&amp;yacute; do rất r&amp;otilde; r&amp;agrave;ng, Flappy Bird sẽ trở th&amp;agrave;nh một m&amp;oacute;n đồ cổ &amp;quot;hot&amp;quot;. Người d&amp;ugrave;ng sẽ cố gắng giữ lại một bản tr&amp;ecirc;n thiết bị của m&amp;igrave;nh. Những ai chưa download, chưa biết tới game n&amp;agrave;y sẽ nhanh ch&amp;oacute;ng v&amp;agrave;o App Store, Google Play tải về. Bởi nếu kh&amp;ocirc;ng download, sau n&amp;agrave;y sẽ kh&amp;oacute; m&amp;agrave; biết lấy ở đ&amp;acirc;u.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Việc gỡ bỏ Flappy Bird khỏi c&amp;aacute;c kho ứng dụng cũng kh&amp;ocirc;ng ảnh hưởng nhiều đến doanh thu quảng c&amp;aacute;o. V&amp;igrave; người d&amp;ugrave;ng đ&amp;atilde; tải về vẫn chơi, trong khi c&amp;aacute;c rắc rối li&amp;ecirc;n quan tới ứng dụng n&amp;agrave;y sẽ được chấm dứt.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Flappy Bird chỉ mất đi khi tất cả mọi người x&amp;oacute;a tr&amp;ecirc;n m&amp;aacute;y hoặc kh&amp;ocirc;ng chơi nữa. C&amp;oacute; thể n&amp;oacute; sẽ xảy ra trong v&amp;agrave;i th&amp;aacute;ng tới khi mọi thứ đ&amp;atilde; hạ nhiệt, nhưng chắc chắn kh&amp;ocirc;ng phải l&amp;uacute;c n&amp;agrave;y.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;strong&gt;C&amp;oacute; th&amp;ocirc;ng tin cho rằng, Nintendo c&amp;oacute; thể kiện Nguyễn H&amp;agrave; Đ&amp;ocirc;ng v&amp;igrave; vi phạm bản quyền thiết kế ống kh&amp;oacute;i trong game Mario. Theo anh, khả năng n&amp;agrave;y c&amp;oacute; thể xảy ra kh&amp;ocirc;ng?&lt;/strong&gt;&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Điều n&amp;agrave;y kh&amp;oacute; xảy ra. Nếu c&amp;oacute; th&amp;igrave; sẽ gần như l&amp;agrave; lần đầu ti&amp;ecirc;n trong lịch sử l&amp;agrave;ng game. C&amp;aacute;c vụ kiện bản quyền của Nintendo li&amp;ecirc;n quan tới Mario đều do nh&amp;aacute;i, lấy t&amp;ecirc;n l&amp;agrave; Mario hoặc c&amp;oacute; chữ Mario v&amp;agrave;/hoặc h&amp;igrave;nh ảnh nh&amp;acirc;n vật với kịch bản tương tự. Vấn đề cơ bản l&amp;agrave; game Flappy Bird l&amp;agrave; một tr&amp;ograve; chơi c&amp;oacute; kịch bản v&amp;agrave; c&amp;aacute;ch chơi ho&amp;agrave;n to&amp;agrave;n kh&amp;aacute;c với Mario, kh&amp;ocirc;ng g&amp;acirc;y nhầm lẫn v&amp;agrave; cũng kh&amp;ocirc;ng g&amp;acirc;y ảnh hưởng g&amp;igrave; tới tr&amp;ograve; Mario cũng như Nintendo. Đặc biệt, nếu c&amp;aacute;c bạn biết rằng Nintendo c&amp;ograve;n chưa bao giờ l&amp;agrave;m game cho di động.&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&lt;img alt=&quot;Gỡ bỏ Flappy Bird là quyết định thông minh của Hà Đông&quot; src=&quot;http://media6.tiin.vn/media01/4ecda874f3335/2014/02/09/647225ea-267f-4458-8ea3-a73d2e64293a.jpg&quot; style=&quot;border:1px solid rgb(221, 221, 221); margin:0px; max-width:585px; padding:6px&quot; /&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: center;&quot;&gt;&lt;span style=&quot;font-size:12px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;Việc Nintendo muốn kiện Flappy Bird về ống kh&amp;oacute;i trong game sẽ kh&amp;oacute; xảy ra. Ảnh: Quốc Huy.&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: center;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Giả sử Nintendo muốn kiện, họ c&amp;ograve;n phải chứng minh được thiệt hại trực tiếp g&amp;acirc;y ra bởi c&amp;aacute;i ống kh&amp;oacute;i trong Flappy Bird đối với game Mario của họ. Trong trường hợp n&amp;agrave;y, giả sử c&amp;oacute; chứng minh được v&amp;agrave; thuyết phục được t&amp;ograve;a, th&amp;igrave; thiệt hại cũng l&amp;agrave; rất nhỏ. Hai tr&amp;ograve; chơi kh&amp;aacute;c nhau ho&amp;agrave;n to&amp;agrave;n v&amp;agrave; được sử dụng ở một m&amp;ocirc;i trường kh&amp;ocirc;ng hề c&amp;oacute; sự cạnh tranh với game gốc.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Cuối c&amp;ugrave;ng, theo &amp;yacute; kiến c&amp;aacute; nh&amp;acirc;n của t&amp;ocirc;i, việc một h&amp;atilde;ng game đứng đầu thế giới như Nintendo đi kiện một c&amp;aacute; nh&amp;acirc;n viết game kiếm được một ch&amp;uacute;t tiền lẻ so với doanh thu của họ chỉ v&amp;igrave; h&amp;igrave;nh ảnh c&amp;aacute;i ống kh&amp;oacute;i l&amp;agrave; một điều nực cười, được dựng ra bởi những người c&amp;oacute; đầu &amp;oacute;c h&amp;agrave;i hước m&amp;agrave; th&amp;ocirc;i.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&lt;strong&gt;Vậy nhiều &amp;yacute; kiến cho rằng, t&amp;aacute;c giả Flappy Bird d&amp;ugrave;ng thủ thuật cheat để game của m&amp;igrave;nh leo l&amp;ecirc;n top gian ứng dụng Apple v&amp;agrave; Android thưa &amp;ocirc;ng?&lt;/strong&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;C&amp;aacute;c c&amp;aacute;o buộc n&amp;agrave;y thực ra đều đến từ một b&amp;agrave;i viết của một blogger c&amp;oacute; t&amp;ecirc;n&amp;nbsp;Carter Thomas, chủ của một h&amp;atilde;ng tư vấn marketing di động tr&amp;ecirc;n iPhone. B&amp;agrave;i ph&amp;acirc;n t&amp;iacute;ch của Carter Thomas theo t&amp;ocirc;i, n&amp;oacute; được viết với mục đ&amp;iacute;ch g&amp;acirc;y scandal v&amp;agrave; để PR t&amp;ecirc;n tuổi cho c&amp;ocirc;ng ty của anh ta.&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Rất tiếc, l&amp;agrave; n&amp;oacute; lại g&amp;acirc;y ra t&amp;aacute;c dụng ngược lại. Tất cả những người trong nghề đều nh&amp;igrave;n ra những lập luận của anh trong b&amp;agrave;i viết l&amp;agrave; đầy sơ hở, nếu kh&amp;ocirc;ng muốn n&amp;oacute;i l&amp;agrave; ngớ ngẩn. Tất cả c&amp;aacute;c h&amp;atilde;ng th&amp;ocirc;ng tấn lớn tr&amp;ecirc;n thế giới đều kh&amp;ocirc;ng tr&amp;iacute;ch dẫn lại b&amp;agrave;i viết n&amp;agrave;y, ngoại trừ tờ Telegraph. T&amp;ocirc;i sẽ ph&amp;acirc;n t&amp;iacute;ch cụ thể c&amp;aacute;c luận điểm của Thomas trong b&amp;agrave;i viết n&amp;agrave;y như sau.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Luận điểm 1: Thomas đưa ra c&amp;aacute;c screenshots để chỉ ra rằng 3 game của Đ&amp;ocirc;ng đ&amp;atilde; c&amp;oacute; sự thay đổi thứ hạng (ranking) tr&amp;ecirc;n c&amp;aacute;c bảng xếp hạng nhảy vọt trong th&amp;aacute;ng 12 v&amp;agrave; th&amp;aacute;ng 1 một c&amp;aacute;ch đột ngột v&amp;agrave; kết luận rằng điều đ&amp;oacute; l&amp;agrave; bất thường, v&amp;igrave; c&amp;aacute;c game c&amp;ograve;n lại của Đ&amp;ocirc;ng kh&amp;ocirc;ng hề được tiếp thị ch&amp;eacute;o (cross-promotion) trong game Flappy Bird.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Luận điểm 2: Thomas đưa ra screenshot c&amp;aacute;c đ&amp;aacute;nh gi&amp;aacute; của user m&amp;agrave; anh ta cho l&amp;agrave; ti&amp;ecirc;u cực đối với game của Đ&amp;ocirc;ng nhưng lại chấm điểm l&amp;agrave; 5 sao (cao nhất). V&amp;agrave; sau đ&amp;oacute;, anh kết luận đ&amp;oacute; l&amp;agrave; điều bất thường v&amp;igrave; hầu hết c&amp;aacute;c b&amp;igrave;nh luận đều c&amp;oacute; giọng điệu giống nhau (i.e: game n&amp;agrave;y đ&amp;atilde; l&amp;agrave;m t&amp;ocirc;i ph&amp;aacute;t đi&amp;ecirc;n&amp;hellip;), lặp đi lặp lại ca th&amp;aacute;n việc đau khổ như n&amp;agrave;o khi chơi m&amp;agrave; lại vẫn chấm điểm cao nhất.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Luận điểm 3: Anh ta kết luận rằng Đ&amp;ocirc;ng đ&amp;atilde; d&amp;ugrave;ng thủ thuật giả lập h&amp;agrave;ng trăm ngh&amp;igrave;n t&amp;agrave;i khoản ảo tr&amp;ecirc;n Apple v&amp;agrave; khiến cho tr&amp;ograve; chơi được tải về cả triệu lần.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&lt;img alt=&quot;Thời điểm Carter Thomas phân tích Flappy Bird tăng trưởng từ 31/1, khi ứng dụng này đã lên vị trí top 1.&quot; src=&quot;http://media6.tiin.vn/media01/4ecda874f3335/2014/02/09/7e1a6e8a-cfbf-4321-a287-00f1b86d86e5.jpg&quot; style=&quot;border:1px solid rgb(221, 221, 221); margin:0px; max-width:585px; padding:6px&quot; /&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: center;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Ở luận điểm thứ nhất, t&amp;ocirc;i nghi ngờ&amp;nbsp;Thomas&amp;nbsp;c&amp;oacute; vấn đề về thời gian. Anh ta viết b&amp;agrave;i n&amp;agrave;y v&amp;agrave;o l&amp;uacute;c 31/1/2014, thời điểm m&amp;agrave; Flappy Bird đ&amp;atilde; nổi tiếng tr&amp;ecirc;n to&amp;agrave;n thế giới. Trước đ&amp;oacute;, ng&amp;agrave;y 17/1 Flappy Bird đ&amp;atilde; đứng đầu ở Mỹ. Khoảng 1 tuần sau th&amp;igrave; 2 game kh&amp;aacute;c của Đ&amp;ocirc;ng bắt đầu lọp dần v&amp;agrave;o top 1.000 tại Mỹ v&amp;agrave; sau đ&amp;oacute; đến cuối th&amp;aacute;ng 1 th&amp;igrave; lọt v&amp;agrave;o top 10.&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;L&amp;yacute; giải việc n&amp;agrave;y rất đơn giản, tất cả những người chơi h&amp;acirc;m mộ Flappy Bird t&amp;igrave;m đến c&amp;aacute;c game tương tự của t&amp;aacute;c giả v&amp;agrave; họ tải về để kh&amp;aacute;m ph&amp;aacute; th&amp;ecirc;m. Đ&amp;acirc;y l&amp;agrave; điều hết sức b&amp;igrave;nh thường v&amp;agrave; tự nhi&amp;ecirc;n. N&amp;oacute; giống như việc, khi bạn h&amp;acirc;m mộ một ai đ&amp;oacute; th&amp;igrave; thường sẽ th&amp;iacute;ch tất cả những g&amp;igrave; li&amp;ecirc;n quan tới người đ&amp;oacute;. App Store tr&amp;ecirc;n iPhone c&amp;oacute; sẵn t&amp;iacute;nh năng đ&amp;oacute; để những người chơi game c&amp;oacute; thể nh&amp;igrave;n thấy c&amp;aacute;c tr&amp;ograve; li&amp;ecirc;n quan c&amp;ugrave;ng t&amp;aacute;c giả chỉ với 1 c&amp;uacute; click. Tr&amp;ecirc;n iPad hoặc Android thậm ch&amp;iacute; bạn c&amp;ograve;n c&amp;oacute; thể nh&amp;igrave;n thấy ngay lập tức c&amp;aacute;c tr&amp;ograve; chơi c&amp;ograve;n lại khi nhấn v&amp;agrave;o m&amp;agrave;n h&amp;igrave;nh download Flappy Bird.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Ngo&amp;agrave;i ra, trong suốt thời gian từ 17 tới 31/1, truyền th&amp;ocirc;ng, c&amp;aacute;c trang mạng x&amp;atilde; hội nổi tiếng như Twitter, YouTube, Reddit v&amp;agrave; cả c&amp;aacute;c ng&amp;ocirc;i sao truyền h&amp;igrave;nh nổi tiếng cũng tung h&amp;ocirc; c&amp;aacute;c tr&amp;ograve; chơi của H&amp;agrave; Đ&amp;ocirc;ng. Thậm ch&amp;iacute;, một số &amp;yacute; kiến c&amp;ograve;n cho rằng Super Ball Juggling hay hơn cả Flappy Bird.&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&lt;img alt=&quot;Ảnh chụp màn hình các bình luận của người chơi đều xuất hiện khi game đã hot. &quot; src=&quot;http://media6.tiin.vn/media01/4ecda874f3335/2014/02/09/48ef8400-e336-42e5-9d5d-f703e308ae40.jpg&quot; style=&quot;border:1px solid rgb(221, 221, 221); margin:0px; max-width:585px; padding:6px&quot; /&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;padding: 0px; margin: 0px; color: rgb(69, 69, 69); font-family: Tahoma; line-height: 18px; text-align: justify;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Ở luận điểm thứ 2, t&amp;ocirc;i khẳng định l&amp;agrave; Thomas c&amp;oacute; vấn đề về thời gian v&amp;agrave; cả về &amp;oacute;c h&amp;agrave;i hước. Nếu bạn xem ảnh chụp m&amp;agrave;n h&amp;igrave;nh tr&amp;ecirc;n, tất cả c&amp;aacute;c b&amp;igrave;nh luận đều đăng v&amp;agrave;o cuối th&amp;aacute;ng 1/2014. Đ&amp;acirc;y l&amp;agrave; thời điểm Flappy Bird đ&amp;atilde; chinh phục thế giới suốt 2 tuần. Ở thời điểm đ&amp;oacute;, Nguyễn H&amp;agrave; Đ&amp;ocirc;ng cũng kh&amp;ocirc;ng cần v&amp;agrave; kh&amp;ocirc;ng thể giả danh hay ngăn cản sự đ&amp;aacute;nh gi&amp;aacute; của h&amp;agrave;ng triệu người d&amp;ugrave;ng mỗi ng&amp;agrave;y.&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Cho đến tận b&amp;acirc;y giờ, Flappy Bird vẫn được đ&amp;aacute;nh gi&amp;aacute; 4,5/5 điểm, một đ&amp;aacute;nh gi&amp;aacute; gần như l&amp;agrave; ho&amp;agrave;n hảo v&amp;agrave; đ&amp;aacute;ng mơ ước cho bất cứ ứng dụng n&amp;agrave;o. Nếu đọc kỹ c&amp;aacute;c b&amp;igrave;nh luận trong ảnh chụp m&amp;agrave;n h&amp;igrave;nh m&amp;agrave; Thomas đưa ra, tất cả những sự ca th&amp;aacute;n, than phiền đ&amp;oacute; thực ra l&amp;agrave; lời ngợi khen kh&amp;ocirc;ng thể tốt hơn cho độ g&amp;acirc;y nghiện cũng như độ kh&amp;oacute; của Flappy Bird. Tất cả đều ph&amp;aacute;t đi&amp;ecirc;n với ch&amp;uacute; chim, đ&amp;oacute; ch&amp;iacute;nh l&amp;agrave; l&amp;yacute; do tr&amp;ograve; chơi được y&amp;ecirc;u th&amp;iacute;ch đến thế. V&amp;igrave; vậy, việc họ cho điểm tuyệt đối cũng l&amp;agrave; điều dễ hiểu. Chắc chỉ c&amp;oacute; Thomas l&amp;agrave; người duy nhất kh&amp;ocirc;ng hiểu m&amp;agrave; th&amp;ocirc;i.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Ở kết luận cuối c&amp;ugrave;ng, cho thấy&amp;nbsp;Thomas&amp;nbsp;thực sự l&amp;agrave; một kẻ ngoại đạo. Lừa được cả Apple v&amp;agrave; Google - 2 c&amp;ocirc;ng ty lớn nhất thế giới để đưa một ứng dụng game v&amp;agrave;o vị tr&amp;iacute; số 1 của tất cả c&amp;aacute;c bảng xếp hạng l&amp;agrave; một điều m&amp;agrave; chưa ai tr&amp;ecirc;n thế giới từng l&amp;agrave;m được. N&amp;oacute;i một c&amp;aacute;ch h&amp;agrave;i hước, nếu l&amp;agrave;m được điều đ&amp;oacute; th&amp;igrave; Đ&amp;ocirc;ng thật sự l&amp;agrave; một đại thi&amp;ecirc;n t&amp;agrave;i v&amp;agrave; vị tr&amp;iacute; số 1 cũng xứng đ&amp;aacute;ng th&amp;ocirc;i. V&amp;agrave; giả sử Đ&amp;ocirc;ng c&amp;oacute; l&amp;agrave;m được điều đ&amp;oacute; thật, th&amp;igrave; c&amp;aacute;c kỹ sư t&amp;agrave;i năng của Apple v&amp;agrave; Google chắc hẳn n&amp;ecirc;n mời chuy&amp;ecirc;n gia tiếp thị Carter Thomas tư vấn th&amp;ecirc;m v&amp;igrave; họ vẫn kh&amp;ocirc;ng biết Đ&amp;ocirc;ng gian lận như thế n&amp;agrave;o trong suốt cả th&amp;aacute;ng qua để trừng phạt.&lt;/div&gt;\r\n\r\n&lt;div&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n&lt;div&gt;Cuối c&amp;ugrave;ng, t&amp;ocirc;i mong rằng giới truyền th&amp;ocirc;ng h&amp;atilde;y nh&amp;igrave;n nhận lại to&amp;agrave;n bộ sự việc v&amp;agrave; để cho Đ&amp;ocirc;ng được y&amp;ecirc;n. Flappy Bird sẽ được gỡ bỏ, mọi sự n&amp;ecirc;n chấm dứt ở đ&amp;acirc;y. Đừng dập tắt đam m&amp;ecirc; của Đ&amp;ocirc;ng cũng như l&amp;agrave;m cho ng&amp;agrave;nh c&amp;ocirc;ng nghệ non trẻ của Việt Nam cảm thấy sợ h&amp;atilde;i khi lao động v&amp;agrave; th&amp;agrave;nh c&amp;ocirc;ng.&lt;/div&gt;\r\n', 'flappy bird, tech, Công Nghệ, Game', '', 0, 4, 0, 'duyet2000@gmail.com', 1392006330, '', 0, '1', 1392007065, 'ckeditor');
INSERT INTO `yp_module_news` (`post_id`, `title`, `title_alias`, `post`, `tag`, `keyword`, `reply_count`, `view_count`, `user_id`, `username`, `post_date`, `like`, `like_count`, `status`, `time_last_change`, `editor`) VALUES
(13, 'Mẹo ẩn nội dung bạn bè Facebook mà không cần ''unfriend''', 'Mẹo-ẩn-nội-dung-bạn-be-Facebook-ma-khong-cần-''unfriend''', '&lt;p&gt;V&amp;agrave;i bước đơn giản bạn dễ d&amp;agrave;ng l&amp;agrave;m theo khi kh&amp;ocirc;ng muốn nh&amp;igrave;n thấy bất kỳ nội dung n&amp;agrave;o từ ai đ&amp;oacute; tr&amp;ecirc;n Facebook m&amp;agrave; kh&amp;ocirc;ng hủy kết bạn (unfriend).&lt;/p&gt;\r\n\r\n&lt;p&gt;Nhiều bạn b&amp;egrave; tr&amp;ecirc;n&amp;nbsp;&lt;a href=&quot;http://tiin.vn/search.html?search%5Bquery%5D=Facebook&quot;&gt;Facebook&lt;/a&gt;&amp;nbsp;cuả ch&amp;uacute;ng ta cả ng&amp;agrave;y c&amp;oacute; thể cập nhật trạng th&amp;aacute;i, h&amp;igrave;nh ảnh m&amp;agrave; kh&amp;ocirc;ng biết ch&amp;aacute;n. Bạn c&amp;oacute; thể nhanh ch&amp;oacute;ng chặn (block) hay hủy kết bạn (unfriend) họ, song nếu họ lại l&amp;agrave; một người bạn hay một th&amp;agrave;nh vi&amp;ecirc;n gia đ&amp;igrave;nh, việc đ&amp;oacute; lại kh&amp;ocirc;ng đơn giản. Tuy nhi&amp;ecirc;n, Facebook cho ph&amp;eacute;p bạn ẩn nội dung từ họ m&amp;agrave; kh&amp;ocirc;ng phải hủy kết bạn khiến họ &amp;ldquo;kinh động&amp;rdquo;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Mẹo ẩn nội dung bạn bè Facebook mà không cần unfriend&quot; src=&quot;http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/38a5515c-2a72-4619-9905-a7e136fa4daa.jpg&quot; style=&quot;text-align:center&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;Truy cập t&amp;agrave;i khoản Facebook, t&amp;igrave;m một cập nhật bạn kh&amp;ocirc;ng muốn thấy tr&amp;ecirc;n d&amp;ograve;ng tin mới News Feed. Click chuột v&amp;agrave;o dấu mũi t&amp;ecirc;n b&amp;ecirc;n cạnh, một tr&amp;igrave;nh đơn sẽ xổ xuống, click v&amp;agrave;o &amp;ldquo;T&amp;ocirc;i kh&amp;ocirc;ng muốn thấy c&amp;aacute;i n&amp;agrave;y&amp;rdquo; (I don&amp;rsquo;t want to see this) để đảm bảo những cập nhật n&amp;agrave;y kh&amp;ocirc;ng xuất hiện tr&amp;ecirc;n News Feed rồi click v&amp;agrave;o &amp;ldquo;Hủy theo d&amp;otilde;i&amp;rdquo; (Unfollow) để bạn kh&amp;ocirc;ng bao giờ thấy người n&amp;agrave;y nữa.&lt;/p&gt;\r\n\r\n&lt;p&gt;Để ẩn chat bạn l&amp;agrave;m theo c&amp;aacute;c bước sau:&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Mẹo ẩn nội dung bạn bè Facebook mà không cần unfriend&quot; src=&quot;http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/25fca273-eb06-45cf-a3c6-89678d4dc484.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Đến mục chat trong Facebook, ở cuối m&amp;agrave;n h&amp;igrave;nh, click v&amp;agrave;o biểu tượng t&amp;ugrave;y chọn v&amp;agrave; truy cập v&amp;agrave;o c&amp;agrave;i đặt n&amp;acirc;ng cao (advanced settings). Một tr&amp;igrave;nh đơn sẽ xuất hiện, click v&amp;agrave;o &amp;ldquo;Bật tr&amp;ograve; chuyện với tất cả bạn b&amp;egrave; ngoại trừ&amp;rdquo; rồi g&amp;otilde; t&amp;ecirc;n của người bạn kh&amp;ocirc;ng muốn chat c&amp;ugrave;ng.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;Mẹo ẩn nội dung bạn bè Facebook mà không cần unfriend&quot; src=&quot;http://media6.tiin.vn/media01/4ecda874f3335/2014/02/10/a88cef6d-0680-4881-91af-3944fe753c0b.jpg&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Sau khi ho&amp;agrave;n th&amp;agrave;nh c&amp;aacute;c bước tr&amp;ecirc;n, t&amp;agrave;i khoản của bạn tr&amp;ocirc;ng vẫn như b&amp;igrave;nh thường, người bị bạn ẩn đi vẫn c&amp;oacute; thể viết l&amp;ecirc;n &amp;ldquo;tường&amp;rdquo; Facebook của bạn nhưng bạn kh&amp;ocirc;ng phải lo nh&amp;igrave;n thấy họ lần nữa hay bị họ ch&amp;agrave;o hỏi qua chat.&lt;/p&gt;\r\n', 'facebook, mẹo, ẩn, thủ thuật', '', 0, 13, 0, 'admin', 1392008685, '', 0, '1', 1392020155, 'ckeditor'),
(17, 'This just a test, test tag', 'This-just-a-test-test-tag', '&lt;p&gt;sdfsdfsdf&lt;/p&gt;\r\n', 'sssssssssss', '', 0, 0, 0, 'admin', 1392019900, '', 0, '0', 1392020048, 'ckeditor');

-- --------------------------------------------------------

--
-- Table structure for table `yp_module_news_cat`
--

DROP TABLE IF EXISTS `yp_module_news_cat`;
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

DROP TABLE IF EXISTS `yp_module_news_comment`;
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
-- Table structure for table `yp_sessions`
--

DROP TABLE IF EXISTS `yp_sessions`;
CREATE TABLE IF NOT EXISTS `yp_sessions` (
  `hash` varchar(250) NOT NULL,
  `last_time` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('cache_template', '1', 0),
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
('pageview', '7053', 0),
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
('services_check_version_url', 'http://ypcore-update.lemon9x.com/version/current_version.php', 0),
('show_view_counter', '1', 0),
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

-- --------------------------------------------------------

--
-- Table structure for table `yp_stat`
--

DROP TABLE IF EXISTS `yp_stat`;
CREATE TABLE IF NOT EXISTS `yp_stat` (
  `day` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `value` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `yp_usergroup`
--

DROP TABLE IF EXISTS `yp_usergroup`;
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

DROP TABLE IF EXISTS `yp_users`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `yp_users`
--

INSERT INTO `yp_users` (`userid`, `username`, `password`, `salt`, `full_name`, `email`, `groupid`, `birthday`, `register_day`) VALUES
(1, 'admin', 'de9efea127212e7a9abadf6b717eeb56', '7389AEEA88', '', 'duyet2000@gmail.com', 4, '0000-00-00', '2013-07-21 01:27:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
