<?php
require_once 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
use Smarty\Smarty;

// define('BASE_URL', '/patient-management-module/public');
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
define('BASE_URL', "$protocol://$host/patient-management-module/public");
define('BASE_URL_UPLOAD', "$protocol://$host/patient-management-module/");

// Database Configuration
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'patient_management',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Smarty Configuration
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/views/templates/');
$smarty->setCompileDir(__DIR__ . '/views/templates_c/');
$smarty->setCacheDir(__DIR__ . '/views/cache/');
$smarty->setConfigDir(__DIR__ . '/views/configs/');
$smarty->assign('base_url', BASE_URL);
$smarty->assign('base_path', BASE_URL_UPLOAD);