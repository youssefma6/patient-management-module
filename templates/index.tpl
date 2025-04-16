<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCore - Healthcare Management System</title>
    <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/adminlte/dist/css/custom.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Sidebar -->
    <aside class="main-sidebar">
        <div class="brand-wrapper">
            <img src="assets/images/medicore-logo.png" alt="MediCore Logo" class="brand-logo">
            <h1 class="brand-name">Healthcare<br>Management System</h1>
        </div>
        <div class="sidebar">
            <nav class="mt-4">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-th"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
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
        <h1>
            <p>Healthcare</p> <br>
            Management System</h1>
            <div class="container-fluid">
                <div class="row">
                    <!-- Patient Table -->
                    <div class="col-8">
                        <div class="table-container">
                            <div class="header-actions">
                                <div class="search-box">
                                    <i class="fas fa-search"></i>
                                    <input type="text" placeholder="Search here">
                                </div>
                                <div class="action-buttons">
                                    <button class="btn btn-filters">
                                        <i class="fas fa-sliders-h"></i>
                                        <span>Filters</span>
                                    </button>
                                    <button class="btn btn-download">
                                        <i class="fas fa-download"></i>
                                        <span>Download</span>
                                    </button>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
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
                                                <img src="https://via.placeholder.com/40" alt="Patient Avatar" class="patient-avatar">
                                                <span>{$patient.name}</span>
                                            </div>
                                        </td>
                                        <td>{$patient.mobile}</td>
                                        <td>
                                            <div class="date-info">
                                                <div class="date">{$patient.date|date_format:"%d/%m/%Y"}</div>
                                                <div class="time">{$patient.date|date_format:"%I:%M%p"}</div>
                                            </div>
                                        </td>
                                        <td>{$patient.doctor}</td>
                                        <td>{$patient.department}</td>
                                    </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                            <div class="pagination-wrapper">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="page-info">Page 1 of 2</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <!-- Stats Cards -->
                        <div class="d-flex flex-wrap justify-content-between">
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
                                    <h2>370</h2>
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
                                <div class="search-box">
                                    <i class="fas fa-search"></i>
                                    <input type="text" placeholder="Search here">
                                </div>
                            </div>
                            <div class="doctors-grid">
                                {foreach $doctors as $doctor}
                                <div class="doctor-card">
                                    <img src="{$doctor.avatar}" alt="" class="doctor-avatar">
                                    <h3>Dr. {$doctor.name}</h3>
                                    <p>{$doctor.department}</p>
                                </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="quick-actions">
                    <div class="action-card admit-patient">
                        <div class="action-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h3>ADMIT NEW<br>PATIENT</h3>
                    </div>
                    <div class="action-card emergency">
                        <div class="action-icon">
                            <i class="fas fa-ambulance"></i>
                        </div>
                        <h3>EMERGENCY<br>ROOM</h3>
                    </div>
                    <div class="action-card pharmacy">
                        <div class="action-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h3>PHARMACY<br>DETAILS</h3>
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