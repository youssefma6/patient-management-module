<!DOCTYPE html>
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
                {* <h1 class="brand-name">Healthcare<br>Management System</h1> *}
            </div>
            <div class="sidebar">
                <nav class="mt-4">
                    <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                    <a href="{$base_url}/" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <span>Dashboard</span>
                   </a>
                </li>
                        <li class="nav-item">
                            <a href="{$base_url}/patients" class="nav-link">
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
                                        {foreach $patients as $patient}
                                        <tr>
                                            <td>
                                                <div class="patient-info">
                                                    <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                                                        alt="Patient Avatar" class="patient-avatar">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="patient-info">
                                                    <span class="name-bolder">{$patient.name}</span>
                                                </div>
                                            </td>
                                            <td>{$patient.mobile}</td>
                                            <td>
                                                <div class="date-info">
                                                    <div class="date">{$patient.date|date_format:"%d/%m/%Y"}</div>
                                                    <div class="time">{$patient.date|date_format:"%I:%M%p"}</div>
                                                </div>
                                            </td>
                                            <td><span class="name-bolder">{$patient.doctor}</span></td>
                                            <td>{$patient.department}</td>
                                        </tr>
                                        {/foreach}
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
                                        <h2>{$patients|count}</h2>
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
                                    {foreach $doctors as $doctor}
                                    <div class="doctor-card">
                                        <img src="https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg"
                                            alt="" class="doctor-avatar">
                                        <h3>Dr. {$doctor.name}</h3>
                                        <p>{$doctor.department}</p>
                                    </div>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>