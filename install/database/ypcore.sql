-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2014 at 09:37 AM
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
(0, 'admin', 'Edit Template Setting.', 1391740768, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', 'http%3A%2F%2Flocalhost%2FypCore2%2Fcp%2Fsetting%2Ftemplate');

-- --------------------------------------------------------

--
-- Table structure for table `yp_data`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `yp_module_news`
--

INSERT INTO `yp_module_news` (`post_id`, `title`, `title_alias`, `post`, `tag`, `keyword`, `reply_count`, `view_count`, `user_id`, `username`, `post_date`, `like`, `like_count`, `status`, `time_last_change`) VALUES
(1, 'GoDaddy changing security policy after infamous social engineering attack on @N', 'GoDaddy-changing-security-policy-after-infamous-social-engineering-attack-on-@N.html', '&lt;p&gt;&lt;a href=&quot;http://thenextweb.com/socialmedia/2014/01/29/lost-50000-twitter-username/&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;Naoki Hiroshima&amp;rsquo;s&lt;/a&gt;&amp;nbsp;scary tale of losing his single-character Twitter handle has captivated the internet over the last few days. First,&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/socialmedia/2014/01/29/lost-50000-twitter-username/#!t9ais&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;we heard the story of how Naoki was held ransom&lt;/a&gt;&amp;nbsp;for the rare handle,&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/insider/2014/01/30/godaddy-accepts-partial-responsibility-social-engineering-attack-ns-customer-account/#!t9ajq&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;then GoDaddy admitted it was partially responsible&lt;/a&gt;&amp;nbsp;for giving out details that lead to the compromise.&lt;/p&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;Today, GoDaddy said on Twitter that it is changing its security policies to help protect against similar attacks of social engineering in the future:&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;&lt;a href=&quot;https://twitter.com/N_is_stolen&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;@N_is_stolen&lt;/a&gt;&amp;nbsp;Will do. We now require 8 card digits, lock after 3 attempts and deal with 2-factor authentication accounts differently. ^NF&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;mdash; GoDaddy (@GoDaddy)&amp;nbsp;&lt;a href=&quot;https://twitter.com/GoDaddy/statuses/429607819147739137&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;February 1, 2014&lt;/a&gt;&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;The change may appear small on the surface, but should help prevent a repeat of the same story. It would be extremely hard for an attacker to gain 8 digits of a credit card (unless the whole card was stolen) and by locking the account after 3 attempts the company is protecting itself from attackers that would just hang up the phone and try again with a new representative.&lt;/p&gt;\r\n\r\n&lt;p&gt;Unfortunately, Naoki&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/twitter/2014/01/30/the-original-owner-of-n-still-hasnt-got-his-twitter-account-back-someone-else-snapped-it-up/#!t9bLv&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;still hasn&amp;rsquo;t received his Twitter account back&lt;/a&gt;&amp;nbsp;with the handle now in the grips of yet another squatter. The story isn&amp;rsquo;t quite over yet.&lt;/p&gt;\r\n\r\n&lt;p&gt;➤&amp;nbsp;&lt;a href=&quot;http://techcrunch.com/2014/02/01/godaddy-updates-its-user-protection-policies-in-wake-of-infamous-twitter-account-extortion/&quot; style=&quot;box-sizing: border-box; color: rgb(255, 60, 31); text-decoration: none;&quot;&gt;GoDaddy Updates Its User Protection Policies In Wake Of Infamous Twitter Account Extortion&amp;nbsp;[Techcrunch]&lt;/a&gt;&lt;/p&gt;\r\n', 'Godady, TNW', '', 0, 3, 0, 'duyet2000@gmail.com', 1391346420, '', 0, '1', 1391346516),
(2, 'Google brings Chrome apps to Android and iOS, lets developers submit to Google Play and Apple’s App Store', 'Google-brings-Chrome-apps-to-Android-and-iOS-lets-developers-submit-to-Google-Play-and-Apple’s-App-Store.html', '&lt;p&gt;Google today&amp;nbsp;&lt;a href=&quot;http://blog.chromium.org/2014/01/run-chrome-apps-on-mobile-using-apache.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;launched&lt;/a&gt;&amp;nbsp;Chrome apps for Android and iOS. The company is offering an early developer preview of a toolchain based on&amp;nbsp;&lt;a href=&quot;http://cordova.apache.org/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Apache Cordova&lt;/a&gt;, an open-source mobile development framework for building native mobile apps using HTML, CSS and JavaScript. Developers can use the tool to wrap their Chrome app with a native application shell that enables them to distribute it via Google Play and Apple&amp;rsquo;s App Store.&lt;/p&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;Today&amp;rsquo;s announcement builds on the company&amp;rsquo;s&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/09/05/google-chrome-becomes-a-true-platform-with-todays-launch-of-chrome-apps/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;launch of Chrome apps in September&lt;/a&gt;&amp;nbsp;that work offline by default and act like native applications on the host operating system. Those Chrome apps work on Windows,&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/12/11/googles-chrome-app-launcher-now-available-mac-users/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Mac&lt;/a&gt;, and Chrome OS, but now the company wants to bring them to the mobile world.&lt;/p&gt;\r\n\r\n&lt;p&gt;Last month, we&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/12/03/google-building-chrome-apps-support-android-ios-beta-release-coming-soon-january-2014/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;broke the news&lt;/a&gt;&amp;nbsp;that the company was working on bringing Chrome packaged apps from the desktop to the mobile world. At the time, Google developer advocate Joe Marini said the beta toolkit for porting and building such apps would be ready in January. In the last week of the month, Google has delivered as promised.&lt;/p&gt;\r\n\r\n&lt;p&gt;Google offers two developer workflows for the aforementioned native app packaging process. You can run your Chrome app on a device or emulator using the command-line or an IDE, and you can also use the&amp;nbsp;&lt;a href=&quot;https://github.com/MobileChromeApps/harness/releases/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Chrome Apps Developer Tool&lt;/a&gt;&amp;nbsp;to run your app on an Android device without the need to install the mobile platform&amp;rsquo;s SDK or an IDE.&lt;/p&gt;\r\n\r\n&lt;p&gt;Here is an example of a basic to-do list Chrome app running on OS X as well as Android:&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;a href=&quot;http://cdn2.tnwcdn.com/wp-content/blogs.dir/1/files/2014/01/chrome_app_mac_android.png&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;&lt;img alt=&quot;chrome app mac android Google brings Chrome apps to Android and iOS, lets developers submit to Google Play and Apples App Store&quot; class=&quot;aligncenter size-full wp-image-730536&quot; src=&quot;http://cdn3.tnwcdn.com/wp-content/blogs.dir/1/files/2014/01/chrome_app_mac_android.png&quot; style=&quot;-webkit-user-select:none; border-image:none; border:0px currentColor; box-sizing:border-box; display:block; height:auto; margin-left:auto; margin-right:auto; max-width:100%; width:485px&quot; title=&quot;chrome app mac android photo&quot; /&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;For those who don&amp;rsquo;t know, Chrome packaged apps are written in HTML, JavaScript, and CSS, but launch outside the browser, work offline by default, and access certain APIs not available to Web apps. For these mobile apps, developers have access to&amp;nbsp;&lt;a href=&quot;http://plugins.cordova.io/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Cordova APIs&lt;/a&gt;&amp;nbsp;as well as many of the core Chrome APIs, including:&lt;/p&gt;\r\n\r\n&lt;ul style=&quot;list-style: none; margin: 1em 0px; color: rgb(78, 88, 96); line-height: 28.79px; padding-right: 0px; padding-left: 2em; font-family: &amp;quot;FF Tisa&amp;quot;; font-size: 16px; box-sizing: border-box;&quot;&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/identity.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;identity&lt;/a&gt;&amp;nbsp;&amp;ndash; sign-in users usingOAuth2 without prompting for passwords.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/in_app_payments.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;payments&lt;/a&gt;&amp;nbsp;(currently Android only) &amp;ndash; sell virtual goods within your mobile app.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/pushMessaging.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;pushMessaging&lt;/a&gt;&amp;nbsp;&amp;ndash; push messages to your app from your server.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/socket.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;sockets&lt;/a&gt;&amp;nbsp;&amp;ndash; send and receive data over the network using TCP and UDP.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/notifications.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;notifications&lt;/a&gt;&amp;nbsp;(currently Android only) &amp;ndash; send rich notifications from your mobile app.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;https://developer.chrome.com/apps/storage.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;storage&lt;/a&gt;&amp;nbsp;&amp;ndash; store and retrieve key-value data locally.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;https://developer.chrome.com/apps/storage.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;syncFileSystem&lt;/a&gt;&amp;nbsp;&amp;ndash; store and retrieve files backed by Google Drive.&lt;/li&gt;\r\n	&lt;li style=&quot;margin: 0.5em 0px; padding: 0px; line-height: 1.6em; font-size: 1.1em; box-sizing: border-box;&quot;&gt;&lt;a href=&quot;http://developer.chrome.com/apps/alarms.html&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;alarms&lt;/a&gt;&amp;nbsp;&amp;ndash; run tasks periodically.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;If you&amp;rsquo;re a developer interested in building Chrome apps for mobile, or porting your existing Chrome apps to mobile, you can get started by checking out&amp;nbsp;&lt;a href=&quot;https://github.com/MobileChromeApps/mobile-chrome-apps/blob/master/README.md&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;the readme&lt;/a&gt;, as well as the links below.&lt;/p&gt;\r\n\r\n&lt;p&gt;➤&amp;nbsp;&lt;a href=&quot;https://github.com/GoogleChrome/chrome-app-samples#mobile-support&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Sample apps&lt;/a&gt;&amp;nbsp;|&amp;nbsp;&lt;a href=&quot;http://stackoverflow.com/questions/tagged/google-chrome-app&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Stack Overflow&lt;/a&gt;&amp;nbsp;|&amp;nbsp;&lt;a href=&quot;https://groups.google.com/a/chromium.org/forum/#!forum/chromium-apps&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Developer Forum&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;See also &amp;ndash;&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/11/21/google-building-chrome-app-based-development-environment-using-dart-polymer/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Google is building a Chrome app-based development environment called Spark&lt;/a&gt;&amp;nbsp;and&amp;nbsp;&lt;a href=&quot;http://thenextweb.com/google/2013/11/28/googles-chromium-team-building-way-launch-apps-without-installation-just-clicking-link/&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Google&amp;rsquo;s Chromium team is building a way to launch apps without installation by just clicking a link&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;em&gt;Top Image Credit:&amp;nbsp;&lt;a href=&quot;http://www.gettyimages.co.uk/Search/Search.aspx?assettype=image&amp;amp;artist=AFP&quot; style=&quot;color: rgb(255, 60, 31); text-decoration: none; box-sizing: border-box;&quot;&gt;Kimihiro Hoshino/AFP/Getty Images&lt;/a&gt;&lt;/em&gt;&lt;/p&gt;\r\n', 'Google, TNW', '', 0, 4, 0, 'admin', 1391346485, '', 0, '1', 1391689520),
(3, 'Chạy thử mã nguồn mở ypCore v0.1.0 mã hiệu releases beta test', 'Ra-mắt-beta-test-ma-nguồn-mở-ypCore-v0-1-0.html', '&lt;p&gt;[Lemon9x.com] 02/02/2014 - Ch&amp;iacute;nh thức ra mắt m&amp;atilde; nguồn mở ypCore v.0.1.0 Beta Test.&amp;nbsp;&lt;br /&gt;\r\nM&amp;atilde; hiệu 521d-test&lt;br /&gt;\r\nAuthor: &lt;a href=&quot;https://lvduit.appspot.com&quot;&gt;LvDuit&lt;/a&gt;&lt;br /&gt;\r\nUpdate: 02/02/2014&lt;br /&gt;\r\nEmail: &lt;a href=&quot;mail:duyet2000@gmail.com&quot;&gt;duyet2000@gmail.com&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p&gt;This is new post from tester. It&amp;#39;s very easy to use. Now, I try to find a new content, some trouble, such as Editor, Front and Core themes, and so so.&amp;nbsp;&lt;/p&gt;\r\n', 'open-beta, new, test', '', 0, 9, 0, 'duyet2000@gmail.com', 1391346785, '', 0, '1', 1391403620),
(4, 'This is Tiếng Việt and this is English, I just test Font', 'This-is-tieng-Viet-and-this-is-English-I-just-test-Font.html', '&lt;p&gt;Đ&amp;acirc;y l&amp;agrave; b&amp;agrave;i viết test để phục vụ mục đ&amp;iacute;ch test. Nếu bạn k muốn test th&amp;igrave; đừng c&amp;oacute; viết c&amp;aacute;i b&amp;agrave;i viết test để phục vụ cho mục đ&amp;iacute;ch test để test giống như t&amp;ocirc;i đang test thế n&amp;agrave;y.&amp;nbsp;&lt;/p&gt;\r\n', 'Test cái *beep*', 'Đây là 1 cái test keyword thôi, chứ nó éo có phải là keyword', 0, 3, 0, 'admin', 1391531641, '', 0, '1', 1391615767),
(5, 'Sample Page', 'Sample-Page.html', '&lt;div class=&quot;entry-content&quot;&gt;\r\n&lt;p&gt;This is an example page. It&amp;rsquo;s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;Hi there! I&amp;rsquo;m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&amp;ntilde;a coladas. (And gettin&amp;rsquo; caught in the rain.)&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;&amp;hellip;or something like this:&lt;/p&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;As a new WordPress user, you should go to &lt;a href=&quot;http://localhost/wordpress-3.8/wp-admin/&quot;&gt;your dashboard&lt;/a&gt; to delete this page and create new pages for your content. Have fun!&lt;/p&gt;\r\n&lt;/div&gt;\r\n', '', '', 0, 8, 0, 'admin', 1391611146, '', 0, '1', 0),
(6, 'Những stt buồn', 'nhung-stt-buon', '&lt;p&gt;Chấp nhận y&amp;ecirc;u anh l&amp;agrave; em đ&amp;atilde; chấp nhận mọi tổn thương...bởi Người dự bị...phải chịu đau&lt;/p&gt;\r\n\r\n&lt;p&gt;- Người đến sau...bao giờ cũng kh&amp;oacute;c Hạnh ph&amp;uacute;c&lt;/p&gt;\r\n\r\n&lt;p&gt;- Đổi bằng nước mắt Niềm tin&lt;/p&gt;\r\n\r\n&lt;p&gt;- Mua bằng tổn thương Cuối c&amp;ugrave;ng&lt;/p&gt;\r\n\r\n&lt;p&gt;- Y&amp;ecirc;u l&amp;agrave; cho v&amp;agrave; nhận&lt;/p&gt;\r\n\r\n&lt;p&gt;- Hay đơn giản...chỉ l&amp;agrave; hận v&amp;agrave; đau&lt;/p&gt;\r\n', 'Fb', '', 0, 0, 0, 'admin', 1391615963, '', 0, '1', 1391617693),
(7, 'Hello world!', 'hello-word', '&lt;p&gt;Welcome to ypCore. This is your first post. Edit or delete it, then start blogging!&lt;/p&gt;\r\n', 'sssssssssss', '', 0, 6, 0, 'admin', 1391649663, '', 0, '1', 1391649828),
(8, 'This just a test, test tag', 'This-just-a-test-test-tag', '', '', '', 0, 2, 0, 'admin', 1391649869, '', 0, '1', 0),
(9, 'This is Google', 'This-is-Google', '&lt;hr /&gt;\r\n&lt;p&gt;cccccccccccc&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;p&gt;ccccccccccccccccccccccccccccccccccc&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;hr /&gt;\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;ccccccccccccccccccccccccccccccc&lt;/p&gt;\r\n', '', '', 0, 0, 0, 'admin', 1391688788, '', 0, '1', 0),
(10, 'Firefox’s Chrome-Like Australis Redesign Arrives In Aurora Release Channel', 'Firefox’s-Chrome-Like-Australis-Redesign-Arrives-In-Aurora-Release-Channel', '&lt;p&gt;This has been a long time in the making, but after almost&amp;nbsp;&lt;a href=&quot;https://blog.mozilla.org/ux/2013/12/whywhatiswhere/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;three months&lt;/a&gt;&amp;nbsp;of testing in the highly experimental Firefox Nightly release channel, Firefox&amp;rsquo;s new Australis user interface has now&amp;nbsp;&lt;a href=&quot;http://www.mozilla.org/en-US/firefox/29.0a2/auroranotes/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;found its way&lt;/a&gt;&amp;nbsp;into the&amp;nbsp;&lt;a href=&quot;http://www.mozilla.org/en-US/firefox/aurora/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;pre-beta Aurora channel&lt;/a&gt;. The&amp;nbsp;&lt;a href=&quot;https://blog.mozilla.org/futurereleases/2014/02/07/test-the-new-firefox-sync-and-customize-the-new-ui-in-firefox-aurora/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;new user interface&lt;/a&gt;, which the company has been working on for&amp;nbsp;&lt;a href=&quot;http://techcrunch.com/2013/06/01/mozilla-readies-major-firefox-redesign-as-it-ponders-what-the-browser-of-the-future-should-look-like/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot;&gt;a long time&lt;/a&gt;, gives the browser a more Chrome-like look. As in Chrome, the settings and options are now behind the same kind of&amp;nbsp;&lt;a href=&quot;http://www.designfloat.com/blog/2013/09/09/hamburger-menu-prominent-ui-evolution/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;drawer menu&lt;/a&gt;&amp;nbsp;next to the URL bar as in Google&amp;rsquo;s browser and rounded tabs at the top of the screen.&lt;/p&gt;\r\n\r\n&lt;div style=&quot;page-break-after: always;&quot;&gt;&lt;span style=&quot;display:none&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/div&gt;\r\n\r\n&lt;p&gt;These similarities with Chrome is likely the first thing users will notice. Indeed, if you quickly switch back and forth between the two, you&amp;rsquo;ll likely get confused about which one is which.&lt;/p&gt;\r\n\r\n&lt;p&gt;The team also completely redesigned the menu too, and added a large number of customization options that aren&amp;rsquo;t available in most other browsers. While Firefox was always pretty customizable, this new version makes it far easier to discover these customization options and use them. Just click on &amp;lsquo;customize&amp;rsquo; in the menu and drag and drop menu items around to improve your user experience.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;img alt=&quot;australis_menu_001&quot; class=&quot;alignright wp-image-955030&quot; src=&quot;http://tctechcrunch2011.files.wordpress.com/2014/02/australis_menu_001.png?w=350&amp;amp;h=434&quot; style=&quot;border:1px solid rgb(213, 213, 213); box-sizing:content-box; float:right; height:auto; margin:0px 0px 1em 1em; max-width:100%; width:350px&quot; /&gt;If you always want to have the developer tools accessible in the URL bar, for example, that&amp;rsquo;s now easy to do.&lt;/p&gt;\r\n\r\n&lt;p&gt;As&amp;nbsp;Mozilla&amp;rsquo;s VP of Firefox engineering Jonathan Nightingale told me&amp;nbsp;&lt;a href=&quot;http://techcrunch.com/2013/06/01/mozilla-readies-major-firefox-redesign-as-it-ponders-what-the-browser-of-the-future-should-look-like/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot;&gt;last year&lt;/a&gt;, the idea behind the redesign was to give users a browser that is simpler to use, with a cleaner and more intuitive design. As you open more tabs, for example, those that aren&amp;rsquo;t in the foreground fade into the background &amp;ldquo;to make it faster for you to find and focus on the tab you want.&amp;rdquo;&lt;/p&gt;\r\n\r\n&lt;p&gt;Now that Australis is part of Firefox&amp;rsquo;s regular release channels, it will slowly find its way into the beta and stable channels, too. It&amp;rsquo;s unclear when exactly this will happen. Mozilla often holds back features from graduating to the next channel until it feels they are ready for a wider release, and this new user interface will surely spark some interesting discussions among Firefox&amp;rsquo;s users.&lt;/p&gt;\r\n\r\n&lt;p&gt;As part of today&amp;rsquo;s update, Mozilla is also launching&amp;nbsp;&lt;a href=&quot;https://blog.mozilla.org/blog/2014/02/07/introducing-mozilla-firefox-accounts/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;Firefox Accounts&lt;/a&gt;, which will offer access to the latest update of&amp;nbsp;&lt;a href=&quot;https://blog.mozilla.org/services/2014/02/07/a-better-firefox-sync/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;Firefox Sync&lt;/a&gt;&amp;nbsp;and other tools. While Mozilla has long offered users a way to sync their bookmarks, add-ons, passwords and open tabs across machines, it never offered users an easy way to just sign up and sign in to access all the integrated services across its products.&lt;/p&gt;\r\n\r\n&lt;p&gt;Firefox Accounts are now available in the Aurora release channel, too, so if you want to try both the new user interface and these new tools, just head&amp;nbsp;&lt;a href=&quot;http://www.mozilla.org/en-US/firefox/aurora/&quot; style=&quot;box-sizing: border-box; color: rgb(8, 158, 0); text-decoration: none; outline: 0px;&quot; target=&quot;_blank&quot;&gt;over here&lt;/a&gt;&amp;nbsp;and install the Aurora release. It won&amp;rsquo;t overwrite your existing Firefox install.&lt;/p&gt;\r\n', '', '', 0, 3, 0, 'admin', 1391852097, '', 0, '1', 0);

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
-- Table structure for table `yp_sessions`
--

CREATE TABLE IF NOT EXISTS `yp_sessions` (
  `hash` varchar(250) NOT NULL,
  `last_time` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yp_sessions`
--

INSERT INTO `yp_sessions` (`hash`, `last_time`) VALUES
('0f495cc3b79926c834a1faada2f88fe1', 1391926902),
('d609bff44f917da95a3cb40a4a16d2fa', 1391926960);

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
('admin_fake_link', 'cp', 0),
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
('pageview', '6158', 0),
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
('site_title', 'ypCore CMS', 0),
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

CREATE TABLE IF NOT EXISTS `yp_stat` (
  `day` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `value` int(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yp_stat`
--

INSERT INTO `yp_stat` (`day`, `month`, `year`, `value`) VALUES
(9, 2, 2014, 2);

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
