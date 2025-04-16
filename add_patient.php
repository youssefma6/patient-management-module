<?php
require_once 'includes/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $doctor = $_POST['doctor'];
    $department = $_POST['department'];

    $stmt = $pdo->prepare("INSERT INTO patients (name, mobile, date, doctor, department) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $mobile, $date, $doctor, $department]);

    header("Location: index.php");
}