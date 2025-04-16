<?php

use Smarty\Smarty;

require_once 'vendor/autoload.php';
$smarty = new Smarty();
$smarty->setTemplateDir('C:/xampp/htdocs/patient-management-module/templates/');
$smarty->setCompileDir('C:/xampp/htdocs/patient-management-module/templates_c/');
$smarty->setCacheDir('C:/xampp/htdocs/patient-management-module/cache/');
$smarty->setConfigDir('C:/xampp/htdocs/patient-management-module/configs/');