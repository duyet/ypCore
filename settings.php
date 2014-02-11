<?php
/**
 * Setting Constant
 *
 * @since 0.1.0
 * @pack ypCore
 * @author LvDuit
 */

/* ===========================================
    You can edit above.
    Ban co the chinh sua nhung dong ben duoi.
   =========================================== */
if (!isset($_this)) $_this = __file__;

// ypCore Version
define('YPCORE_VERSION', '2.0.0');

// Use db ?
define('YPCORE_USE_DB', TRUE);

// Cache
define('YPCORE_IS_CACHE', TRUE);

// Firewall
define('ACTIVE_FIREWALL', TRUE);

// Active https method if it avaible
define('ACTIVE_HTTPS', TRUE);

// Use cdn to host static file
define('USE_CDN', TRUE);

// ypCore root dir, not edit
define ('YPCORE_ROOT', str_replace("\\", "/", pathinfo($_this, PATHINFO_DIRNAME)));

// ypCore library directoy
define ('YPCORE_DIR', 'ypCore');

// Apps folder
define ('APP_DIR', 'apps');

// Admin folder
define ('ADMIN_DIR', APP_DIR . '/admin');

// View (Template) folder, not edit
define ('APP_VIEWS_DIR', APP_DIR . '/view');

// Controller folder, not edit
define ('APP_CONTROLLER_DIR', APP_DIR . '/controller');

// Cache folder, not edit
define ('APP_CACHE_DIR', APP_DIR . '/cache');

// Temp folder, not edit
define ('APP_TMP_DIR', APP_DIR . '/tmp');

// Logs folder, not edit
define ('APP_LOG_DIR', APP_DIR . '/logs');

// Backup folder, may edit
define ('APP_BACKUP_DIR', APP_DIR . '/backup');

// Download folder, may edit
define ('APP_DOWNLOAD_DIR', 'content/downloads');

// Class library folder, not edit
define ('CORE_CLASS_DIR', YPCORE_DIR . '/class');

// Apps view (template) folder, not edit
define ('APPS_TEMPLATE_DIR', 'content/themes');

// Admin view (template) folder, not edit
define ('ADMIN_TEMPLATE_DIR', YPCORE_ROOT . '/' . ADMIN_DIR . '/view/');

// Static javascript, css, images folder (domain).
// Neu muon luu static file sang subdomain, su dung dong thu 2
define ('YPCORE_STATIC_DIR', 'static');
//define ('YPCORE_STATIC_DIR', 'http://static.go.use.vn');

// Cookie prefix, not edit
define ('COOKIE_PREFIX', '7ece924f090ce5');

// Url rewrite 
define ('REWRITE_URL_END_TYPE', 'html');

// Config file, recomment edit this line
define ('APP_CONFIG_FILE', APP_DIR . '/config.php');

// Code router param
// If you edit value of this const, and rewrite active, must you edit 
// .htaccess too (line: "RewriteRule ^(.+)$ index.php?_code_=$1 [QSA,L]")
define ('CODE_PARAM', '_code_');