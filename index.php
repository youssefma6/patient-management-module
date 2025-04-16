<?php
require_once 'includes/db.php';
require_once 'includes/smarty_setup.php';

// Fetch patients
$stmt = $pdo->query("SELECT * FROM patients");
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Dummy doctor data (since not provided in mockup)
$doctors = [
    ['name' => 'Jennifer Roberts', 'department' => 'Pediatrics (A-9987)'],
    ['name' => 'Michael Sullivan', 'department' => 'Cardiology (A-9645)'],
    ['name' => 'Emily Harris', 'department' => 'Gynecology (A-9987)'],
    ['name' => 'Jonathan Davis', 'department' => 'Orthopedics (A-9988)'],
    ['name' => 'Sarah Mitchell', 'department' => 'Dermatology (A-9987)'],
    ['name' => 'Andrew Thompson', 'department' => 'Neurology (A-9820)'],
    ['name' => 'Jessica Anderson', 'department' => 'Internal Medicine (A-9645)'],
    ['name' => 'David Wilson', 'department' => 'Ophthalmology (A-9987)'],
    ['name' => 'David Wilson', 'department' => 'Ophthalmology (A-9987)'],
];

// Assign data to Smarty
$smarty->assign('patients', $patients);
$smarty->assign('doctors', $doctors);

// Display the template
$smarty->display('index.tpl');