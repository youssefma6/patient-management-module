<?php
require_once 'includes/db.php';
require_once 'includes/smarty_setup.php';

// Fetch patients
$stmt = $pdo->query("SELECT * FROM patients LIMIT 10"); // Adjusted with limit for pagination compatibility
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Assign data to Smarty
$smarty->assign('patients', $patients);

// Display the template
$smarty->display('templates/patient_listing.tpl'); // Matches your Smarty template directory
?>