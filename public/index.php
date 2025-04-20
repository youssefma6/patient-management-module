<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../bootstrap.php';
use App\Controllers\PatientController;

$controller = new PatientController($smarty);
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';


switch ($url) {
    case '':
        $controller->index();
        break;
    case 'patients':
        $controller->listPatients();
        break;
    case 'patients/create':
        $controller->create();
        break;
    case (preg_match('/patients\/edit\/(\d+)/', $url, $matches) ? true : false):
        $controller->edit($matches[1]);
        break;
    case (preg_match('/patients\/delete\/(\d+)/', $url, $matches) ? true : false):
        $controller->delete($matches[1]);
        break;
    case (preg_match('/api\/patients\/(.+)/', $url, $matches) ? true : false):
        $controller->api($matches[1]);
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
}