<?php
require_once __DIR__ . '/../bootstrap.php';
use App\Controllers\PatientController;

$controller = new PatientController($smarty);
$action = isset($_GET['action']) ? $_GET['action'] : (isset($_POST['action']) ? $_POST['action'] : 'get');
$controller->api($action);