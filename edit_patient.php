<?php
require_once 'includes/db.php';
require_once 'includes/smarty_setup.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM patients WHERE id = ?");
$stmt->execute([$id]);
$patient = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $doctor = $_POST['doctor'];
    $department = $_POST['department'];

    $stmt = $pdo->prepare("UPDATE patients SET name = ?, mobile = ?, date = ?, doctor = ?, department = ? WHERE id = ?");
    $stmt->execute([$name, $mobile, $date, $doctor, $department, $id]);

    header("Location: index.php");
}

$smarty->assign('patient', $patient);
$smarty->display('edit_patient.tpl');