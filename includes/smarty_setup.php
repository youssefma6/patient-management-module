<?php

use Smarty\Smarty;

require_once 'vendor/autoload.php';
require_once 'vendor/autoload.php';
$smarty = new Smarty();
$smarty->setTemplateDir('C:/xampp/htdocs/patient-management-module/views/templates/');
$smarty->setCompileDir('C:/xampp/htdocs/patient-management-module/views/templates_c/');
$smarty->setCacheDir('C:/xampp/htdocs/patient-management-module/views/cache/');
$smarty->setConfigDir('C:/xampp/htdocs/patient-management-module/views/configs/');