<?php
/* Smarty version 5.4.5, created on 2025-04-20 19:27:55
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_68052e9b0e6d39_10103275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeecaa3c954f722f0c85d8724f4d21768a148c4a' => 
    array (
      0 => 'index.tpl',
      1 => 1745169974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68052e9b0e6d39_10103275 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management-module\\views\\templates';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCore - Healthcare Management System</title>
    <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/adminlte/dist/css/custom.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="main-sidebar">
            <div class="brand-wrapper">
                <img src="assets/media/logo.png" alt="MediCore Logo" class="brand-logo">
                            </div>
            <div class="sidebar">
                <nav class="mt-4">
                    <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <span>Dashboard</span>
                   </a>
                </li>
                        <li class="nav-item">
                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/patients" class="nav-link">
                                <i class="nav-icon fas fa-user-friends"></i>
                                <span>Patient Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <span>Doctor Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <span>Payment Details</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-video"></i>
                                <span>E-Channeling</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content">
                <div class="title-custom">
                    <h1>
                        <span class="highlight">Healthcare</span><br>
                        <span>Management System</span>
                    </h1>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <!-- Patient Table -->
                        <div class="col-12 col-md-8">
                            <div class="table-container">
                                <div class="header-actions">
                                    <div class="search-box">
                                        <i class="fas fa-search"></i>
                                        <input type="text" placeholder="Search here" class="search-input">
                                    </div>
                                    <div class="action-buttons">
                                        <button class="btn btn-filters custom-btn">
                                            <i class="fas fa-sliders-h"></i>
                                            <span>Filters</span>
                                        </button>
                                        <button class="btn btn-download custom-btn custom-btn-download">
                                            <i class="fas fa-download"></i>
                                            <span>Download</span>
                                        </button>
                                    </div>
                                    <div class="pagination-wrapper">
                                        <div class="">
                                            <div class="pagination">
                                                <button class="page-prev">
                                                    <i class="fas fa-chevron-left"></i>
                                                </button>
                                                <div class="page-info">
                                                    <span>Page</span>
                                                    <input type="text" value="1" class="page-input">
                                                    <span>of 2</span>
                                                </div>
                                                <button class="page-next">
                                                    <i class="fas fa-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>NAME</th>
                                            <th>MOB</th>
                                            <th>DATE</th>
                                            <th>DOCTOR</th>
                                            <th>DEPARTMENT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('patients'), 'patient');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('patient')->value) {
$foreach0DoElse = false;
?>
                                        <tr>
                                            <td>
                                                <div class="patient-info">
                                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                                                        alt="Patient Avatar" class="patient-avatar">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="patient-info">
                                                    <span class="name-bolder"><?php echo $_smarty_tpl->getValue('patient')['name'];?>
</span>
                                                </div>
                                            </td>
                                            <td><?php echo $_smarty_tpl->getValue('patient')['mobile'];?>
</td>
                                            <td>
                                                <div class="date-info">
                                                    <div class="date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('patient')['date'],"%d/%m/%Y");?>
</div>
                                                    <div class="time"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('patient')['date'],"%I:%M%p");?>
</div>
                                                </div>
                                            </td>
                                            <td><span class="name-bolder"><?php echo $_smarty_tpl->getValue('patient')['doctor'];?>
</span></td>
                                            <td><?php echo $_smarty_tpl->getValue('patient')['department'];?>
</td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="quick-actions row">
                                <div class="action-card admit-patient" onclick="window.location.href='patient_listing.php?showModal=true'">
                                    <div class="d-flex action-content">
                                        <div class="action-icon">
                                            <img src="assets/images/add-user.png" class="action-image">
                                        </div>
                                        <div class="action-text">
                                            <p class="action-subtitle">ADMIT NEW</p>
                                            <h3 class="action-title">PATIENT</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-card emergency">
                                    <div class="d-flex action-content">
                                        <div class="action-icon">
                                            <img src="assets/images/ambulance.png" class="action-image">
                                        </div>
                                        <div class="action-text">
                                            <p class="action-subtitle">EMERGENCY</p>
                                            <h3 class="action-title">ROOM</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="action-card pharmacy">
                                    <div class="d-flex action-content">
                                        <div class="action-icon">
                                            <img src="assets/images/pills.png" class="action-image">
                                        </div>
                                        <div class="action-text">
                                            <p class="action-subtitle">PHARMACY</p>
                                            <h3 class="action-title">DETAILS</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <!-- Stats Cards -->
                            <div class="d-flex flex-wrap justify-content-between stats-cards">
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="fas fa-calendar-check"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h2>140</h2>
                                        <p>Total Appointments</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h2><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('patients'));?>
</h2>
                                        <p>Total Patient</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="fas fa-times-circle"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h2>070</h2>
                                        <p>Total Cancellation</p>
                                    </div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="stat-content">
                                        <h2>120</h2>
                                        <p>Total Avg per Doctor</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Available Doctors -->
                            <div class="doctors-section">
                                <div class="section-header">
                                    <h2>Available Doctors</h2>
                                </div>
                                <div class="search-box">
                                    <i class="fas fa-search"></i>
                                    <input type="text" placeholder="Search here" class="search-input">
                                </div>
                                <div class="doctors-grid row">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('doctors'), 'doctor');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('doctor')->value) {
$foreach1DoElse = false;
?>
                                    <div class="doctor-card">
                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                                            alt="" class="doctor-avatar">
                                        <h3>Dr. <?php echo $_smarty_tpl->getValue('doctor')['name'];?>
</h3>
                                        <p><?php echo $_smarty_tpl->getValue('doctor')['department'];?>
</p>
                                    </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="assets/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="assets/adminlte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
