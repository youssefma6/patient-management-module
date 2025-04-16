<?php
require_once 'includes/db.php';
require_once 'includes/smarty_setup.php';

// Fetch patients
$stmt = $pdo->query("SELECT * FROM patients");
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Dummy doctor data (since not provided in mockup)
$doctors = [
    ['name' => 'Dr. Jennifer Roberts', 'department' => 'Pediatrics (A-9987)'],
    ['name' => 'Dr. Michael Sullivan', 'department' => 'Cardiology (A-9645)'],
    ['name' => 'Dr. Emily Harris', 'department' => 'Gynecology (A-9987)'],
    ['name' => 'Dr. Jonathan Davis', 'department' => 'Orthopedics (A-9988)'],
    ['name' => 'Dr. Sarah Mitchell', 'department' => 'Dermatology (A-9987)'],
    ['name' => 'Dr. Andrew Thompson', 'department' => 'Neurology (A-9820)'],
    ['name' => 'Dr. Jessica Anderson', 'department' => 'Internal Medicine (A-9645)'],
    ['name' => 'Dr. David Wilson', 'department' => 'Ophthalmology (A-9987)'],
];

// Assign data to Smarty
$smarty->assign('patients', $patients);
$smarty->assign('doctors', $doctors);

// Display the template
$smarty->display('index.tpl');