<?php
/*
 * Central Frindse.com Config File
 * -----
 * This is the new configuration file that will define everything we need
 * -----
 * SECTIONS
 *
 * 1. Global Config Array
 *  1.A Stylesheets Array
 *  1.B Javascript Array
 * 2. Site Info
 * 3. Database Configuration
 * 4. Directory Configuration
 * 5. Messages
 * 6. Sessions
 * 7. Cookies
 * 8. CSRF
 */


//-- 1. Global Config Array
$config = array();

$config['stylesheets'] = array('mobile'=>array(),'desktop'=>array());
$config['javascript'] = array('jquery', 'socket.io', 'main');

//-- 2. Site Info
defined('SITE_NAME') or define('SITE_NAME', 'James Latten');
defined('SITE_DESC') or define('SITE_DESC', 'Hi! My name is James Latten and im a passionate Freelance Web Developer that loves to code!');
defined('SITE_TAGLINE') or define('SITE_TAGLINE', 'A freelance code ninja');
defined('SITE_AUTHOR') or define('SITE_AUTHOR', 'James Latten');
defined('SITE_UTF') or define('SITE_UTF', 'UTF-8');
defined('SITE_LANG') or define('SITE_LANG', 'en');
defined('SITE_TAG') or define('SITE_TAGS','freelancer, web developer, php, html, Css, JavaScript, WordPress, Shopify, WebSockets, GIT, web design, PhotoShop, sass');
defined('SITE_VER') or define('SITE_VER','0.0.1');
defined('SITE_TEMPLATES_VER') or define('SITE_TEMPLATES_VER','1');
defined('SITE_LOGO') or define('SITE_LOGO','frindse-circle-logo.jpg');
define('DS', DIRECTORY_SEPARATOR);

defined('PASSWORD_HASH_METHOD') or define('PASSWORD_HASH_METHOD', PASSWORD_BCRYPT);

defined('SITE_ROOT') or define('SITE_ROOT',realpath(dirname(dirname(dirname(__FILE__)))));

define('APP_URL', 'http://localhost/jameslatten.com/');

defined('ENCRYPTION_METHOD') or define('ENCRYPTION_METHOD','AES-256-CBC');
defined('ENCRYPTION_KEY') or define('ENCRYPTION_KEY','N70g2FA4u9A5r5qssX6p927DH1yIK8uG');

//-- 3. Database Configuration
defined('DB_TYPE') or define('DB_TYPE', 'mysql');
defined('DB_NAME') or define('DB_NAME', 'frindse.com');
defined('DB_HOST') or define('DB_HOST','127.0.0.1');
defined('DB_USER') or define('DB_USER','root');
defined('DB_PASS') or define('DB_PASS','Cooley12%');

//-- 4. Directory Configuration
defined('APPLICATION') or define('APPLICATION', SITE_ROOT . '/app/');
defined('CONTROLLERS') or define('CONTROLLERS', APPLICATION . 'controllers/');
defined('LIBS') or define('LIBS', APPLICATION . 'libs/');
defined('LIBS_CORE') or define('LIBS_CORE', APPLICATION . 'libs/core/');
defined('MODELS') or define('MODELS', APPLICATION . 'models/');
defined('VIEWS') or define('VIEWS', APPLICATION . 'views/');
defined('ASSETS') or define('ASSETS', APP_URL . 'assets/');
defined('CSS') or define('CSS', ASSETS . 'css/');
defined('IMAGES') or define('IMAGES', ASSETS . 'images/');
defined('JAVASCRIPT') or define('JAVASCRIPT', ASSETS . 'javascript/');
defined('CONFIG') or define('CONFIG', APPLICATION . '/config/');
defined('LOGS') or define('LOGS', SITE_ROOT . '/logs/');
defined('ERRORS') or define('ERRORS', LOGS . 'errors/');
defined('SESSIONS') or define('SESSIONS', LOGS . 'sessions/');

//-- 5. Messages


//-- 6. Sessions
ini_set('session.save_path', SESSIONS);
ini_set('session.gc_probability', 1);

session_save_path(SESSIONS);

//-- 7. Cookie
define('COOKIE_EXPIRY', time() + 2 * 7 * 24 * 3600);
define('COOKIE_NAME', '');

//-- 8. CSRF
defined('CSRF_TOKEN_NAME') or define('CSRF_TOKEN_NAME', 'JAMESLATTEN_TOKEN_CSRF');
defined('CSRF_COOKIE_NAME') or define('CSRF_COOKIE_NAME', 'JAMESLATTEN_TOKEN_CSRF');
defined('CSRF_EXPIRE') or define('CSRF_EXPIRE', 7200);

//-- 9. Database Names
