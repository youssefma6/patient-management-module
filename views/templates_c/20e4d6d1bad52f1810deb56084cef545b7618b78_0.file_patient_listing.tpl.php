<?php
/* Smarty version 5.4.5, created on 2025-04-20 21:33:59
  from 'file:patient_listing.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_68054c27553898_36055952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20e4d6d1bad52f1810deb56084cef545b7618b78' => 
    array (
      0 => 'patient_listing.tpl',
      1 => 1745177635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68054c27553898_36055952 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management-module\\views\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCore - Patient Listing</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
/assets/adminlte/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('base_url');?>
/assets/adminlte/dist/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="main-sidebar">
            <div class="brand-wrapper">
                <img src="<?php echo $_smarty_tpl->getValue('base_url');?>
/assets/media/logo.png" alt="MediCore Logo" class="brand-logo">
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
/patients" class="nav-link active">
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
                        <span class="highlight">Patient</span><br>
                        <span>Listing</span>
                    </h1>
                    <div class="action-buttons">
                        <button class="btn btn-primary custom-btn" data-toggle="modal" data-target="#addPatientModal">
                            <i class="fas fa-plus"></i> Ajouter un Patient
                        </button>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-container">
                                <div class="header-actions">
                                    <div class="search-box">
                                        <i class="fas fa-search"></i>
                                        <input type="text" id="searchInput" placeholder="Search here">
                                    </div>
                                    <div class="pagination-wrapper">
                                        <div class="pagination">
                                            <button class="page-prev">
                                                <i class="fas fa-chevron-left"></i>
                                            </button>
                                            <div class="page-info">
                                                <span>Page</span>
                                                <input type="text" value="1" class="page-input">
                                                <span>of <span id="totalPages">1</span></span>
                                            </div>
                                            <button class="page-next">
                                                <i class="fas fa-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <table class="table" id="patientTable">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>NAME</th>
                                            <th>MOB</th>
                                            <th>DATE</th>
                                            <th>DOCTOR</th>
                                            <th>DEPARTMENT</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody id="patientTableBody">
                                        <!-- Patients will be populated via AJAX -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loader -->
    <div class="loader-overlay" id="loader">
        <div class="spinner"></div>
    </div>

    <!-- Add Patient Modal -->
    <div class="modal fade" id="addPatientModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Admit New Patient</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <form id="addPatientForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="addPhoto">Photo (Optional)</label>
                            <div class="photo-upload-container" id="addPhotoDropArea">
                                <i class="fas fa-cloud-upload-alt photo-upload-icon"></i>
                                <p class="photo-upload-text">Drag & Drop or Click to Upload</p>
                                <input type="file" class="form-control" id="addPhoto" name="photo" accept="image/*" style="display: none;">
                            </div>
                            <img id="addPhotoPreview" class="photo-preview" alt="Photo Preview">
                        </div>
                        <div class="form-group">
                            <label for="addName">Name</label>
                            <input type="text" class="form-control" id="addName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="addMobile">Mobile</label>
                            <input type="text" class="form-control" id="addMobile" name="mobile" required maxlength="15" pattern="[0-9]+" title="Mobile number must contain only digits and not exceed 15 characters">
                        </div>
                        <div class="form-group">
                            <label for="addDate">Date</label>
                            <input type="datetime-local" class="form-control" id="addDate" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="addDoctor">Doctor</label>
                            <select class="form-control" id="addDoctor" name="doctor" required>
                                <option value="">Select Doctor</option>
                                <option value="Jennifer Roberts">Jennifer Roberts (Pediatrics)</option>
                                <option value="Michael Sullivan">Michael Sullivan (Cardiology)</option>
                                <option value="Emily Harris">Emily Harris (Gynecology)</option>
                                <option value="Jonathan Davis">Jonathan Davis (Orthopedics)</option>
                                <option value="Sarah Mitchell">Sarah Mitchell (Dermatology)</option>
                                <option value="Andrew Thompson">Andrew Thompson (Neurology)</option>
                                <option value="Jessica Anderson">Jessica Anderson (Internal Medicine)</option>
                                <option value="David Wilson">David Wilson (Ophthalmology)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="addDepartment">Department</label>
                            <select class="form-control" id="addDepartment" name="department" required>
                                <option value="">Select Department</option>
                                <option value="Pediatrics (A-9987)">Pediatrics (A-9987)</option>
                                <option value="Cardiology (A-9645)">Cardiology (A-9645)</option>
                                <option value="Gynecology (A-9987)">Gynecology (A-9987)</option>
                                <option value="Orthopedics (A-9988)">Orthopedics (A-9988)</option>
                                <option value="Dermatology (A-9987)">Dermatology (A-9987)</option>
                                <option value="Neurology (A-9820)">Neurology (A-9820)</option>
                                <option value="Internal Medicine (A-9645)">Internal Medicine (A-9645)</option>
                                <option value="Ophthalmology (A-9987)">Ophthalmology (A-9987)</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Patient</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Patient Modal -->
    <div class="modal fade" id="editPatientModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Patient</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <form id="editPatientForm" enctype="multipart/form-data">
                        <input type="hidden" id="editId" name="id">
                        <div class="form-group">
                            <label for="editPhoto">Photo (Optional)</label>
                            <div class="photo-upload-container" id="editPhotoDropArea">
                                <i class="fas fa-cloud-upload-alt photo-upload-icon"></i>
                                <p class="photo-upload-text">Drag & Drop or Click to Upload</p>
                                <input type="file" class="form-control" id="editPhoto" name="photo" accept="image/*" style="display: none;">
                            </div>
                            <img id="editPhotoPreview" class="photo-preview" alt="Photo Preview">
                        </div>
                        <div class="form-group">
                            <label for="editName">Name</label>
                            <input type="text" class="form-control" id="editName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="editMobile">Mobile</label>
                            <input type="text" class="form-control" id="editMobile" name="mobile" required maxlength="15" pattern="[0-9]+" title="Mobile number must contain only digits and not exceed 15 characters">
                        </div>
                        <div class="form-group">
                            <label for="editDate">Date</label>
                            <input type="datetime-local" class="form-control" id="editDate" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="editDoctor">Doctor</label>
                            <select class="form-control" id="editDoctor" name="doctor" required>
                                <option value="">Select Doctor</option>
                                <option value="Jennifer Roberts">Jennifer Roberts (Pediatrics)</option>
                                <option value="Michael Sullivan">Michael Sullivan (Cardiology)</option>
                                <option value="Emily Harris">Emily Harris (Gynecology)</option>
                                <option value="Jonathan Davis">Jonathan Davis (Orthopedics)</option>
                                <option value="Sarah Mitchell">Sarah Mitchell (Dermatology)</option>
                                <option value="Andrew Thompson">Andrew Thompson (Neurology)</option>
                                <option value="Jessica Anderson">Jessica Anderson (Internal Medicine)</option>
                                <option value="David Wilson">David Wilson (Ophthalmology)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editDepartment">Department</label>
                            <select class="form-control" id="editDepartment" name="department" required>
                                <option value="">Select Department</option>
                                <option value="Pediatrics (A-9987)">Pediatrics (A-9987)</option>
                                <option value="Cardiology (A-9645)">Cardiology (A-9645)</option>
                                <option value="Gynecology (A-9987)">Gynecology (A-9987)</option>
                                <option value="Orthopedics (A-9988)">Orthopedics (A-9988)</option>
                                <option value="Dermatology (A-9987)">Dermatology (A-9987)</option>
                                <option value="Neurology (A-9820)">Neurology (A-9820)</option>
                                <option value="Internal Medicine (A-9645)">Internal Medicine (A-9645)</option>
                                <option value="Ophthalmology (A-9987)">Ophthalmology (A-9987)</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Patient</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
/assets/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('base_url');?>
/assets/adminlte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@11"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
    const baseUrl = '<?php echo $_smarty_tpl->getValue('base_url');?>
';
    const basePath = '<?php echo $_smarty_tpl->getValue('base_path');?>
';
    
        $(document).ready(function() {
            loadPatients();

            // Loader functions
            function showLoader() {
                $('#loader').show();
            }
            function hideLoader() {
                $('#loader').hide();
            }

            // Load patients via AJAX
            function loadPatients(page = 1) {
                showLoader();
                $.ajax({
                    url: baseUrl + '/api/patients/get',
                    type: 'GET',
                    data: { page: page, search: $('#searchInput').val() },
                    success: function(response) {
                        hideLoader();
                        if (response && response.data && Array.isArray(response.data)) {
                            let patients = response.data;
                            let totalPages = response.totalPages || 1;
                            $('#totalPages').text(totalPages);
                            $('.page-input').val(page);
                            let tbody = $('#patientTableBody');
                            tbody.empty();
                            if (patients.length === 0) {
                                tbody.append('<tr><td colspan="7">No patients found.</td></tr>');
                            } else {
                                patients.forEach(patient => {
                                    let photoUrl = patient.photo ? (baseUrl + '/' + patient.photo.replace(/^\/+/, '')) : 'https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg';
                                    let row = `<tr>
                                        <td><img src="${photoUrl}" alt="Patient Avatar" class="patient-avatar" onerror="this.src='https://static.vecteezy.com/system/resources/thumbnails/026/375/249/small/ai-generative-portrait-of-confident-male-doctor-in-white-coat-and-stethoscope-standing-with-arms-crossed-and-looking-at-camera-photo.jpg'"></td>
                                        <td><span class="name-bolder">${patient.name}</span></td>
                                        <td>${patient.mobile}</td>
                                        <td><div class="date-info"><div class="date">${new Date(patient.date).toLocaleDateString()}</div><div class="time">${new Date(patient.date).toLocaleTimeString()}</div></div></td>
                                        <td><span class="name-bolder">${patient.doctor}</span></td>
                                        <td>${patient.department}</td>
                                        <td>
                                            <i class="fas fa-edit action-icon edit-icon edit-btn" data-id="${patient.id}"></i>
                                            <i class="fas fa-trash-alt action-icon delete-icon delete-btn" data-id="${patient.id}"></i>
                                        </td>
                                    </tr>`;
                                    tbody.append(row);
                                });
                            }
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to load patients. Please try again.',
                            });
                            $('#patientTableBody').html('<tr><td colspan="7">No patients found or server error.</td></tr>');
                        }
                    },
                    error: function(xhr, status, error) {
                        hideLoader();
                        console.log('Error response:', xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error loading patients: ' + error,
                        });
                        $('#patientTableBody').html('<tr><td colspan="7">Error loading patients.</td></tr>');
                    }
                });
            }

            // Function to preview photo
            function previewPhoto(file, previewElement) {
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $(previewElement).attr('src', e.target.result).show();
                    };
                    reader.readAsDataURL(file);
                }
            }

            // Photo upload handlers for Add Modal
            const addPhotoInput = document.getElementById('addPhoto');
            const addPhotoDropArea = document.getElementById('addPhotoDropArea');
            addPhotoDropArea.addEventListener('click', function() {
                addPhotoInput.click();
            });
            addPhotoDropArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('dragover');
            });
            addPhotoDropArea.addEventListener('dragleave', function() {
                this.classList.remove('dragover');
            });
            addPhotoDropArea.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
                const files = e.dataTransfer.files;
                if (files.length) {
                    addPhotoInput.files = files;
                    previewPhoto(files[0], '#addPhotoPreview');
                }
            });
            addPhotoInput.addEventListener('change', function() {
                previewPhoto(this.files[0], '#addPhotoPreview');
            });

            // Photo upload handlers for Edit Modal
            const editPhotoInput = document.getElementById('editPhoto');
            const editPhotoDropArea = document.getElementById('editPhotoDropArea');
            editPhotoDropArea.addEventListener('click', function() {
                editPhotoInput.click();
            });
            editPhotoDropArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('dragover');
            });
            editPhotoDropArea.addEventListener('dragleave', function() {
                this.classList.remove('dragover');
            });
            editPhotoDropArea.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
                const files = e.dataTransfer.files;
                if (files.length) {
                    editPhotoInput.files = files;
                    previewPhoto(files[0], '#editPhotoPreview');
                }
            });
            editPhotoInput.addEventListener('change', function() {
                previewPhoto(this.files[0], '#editPhotoPreview');
            });

            // Add Patient
            $('#addPatientForm').submit(function(e) {
                e.preventDefault();
                showLoader();
                const formData = new FormData(this);
                formData.append('action', 'add');
                $.ajax({
                    url: baseUrl + '/api/patients/add',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        hideLoader();
                        if (response.success) {
                            $('#addPatientModal').modal('hide');
                            loadPatients();
                            $('#addPatientForm')[0].reset();
                            $('#addPhotoPreview').hide();
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Patient added successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to add patient: ' + (response.error || 'Unknown error'),
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        hideLoader();
                        console.log('Error response:', xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error adding patient: ' + error,
                        });
                    }
                });
            });

            // Edit Patient
            $(document).on('click', '.edit-btn', function() {
                let id = $(this).data('id');
                showLoader();
                $.ajax({
                    url: baseUrl + '/api/patients/get',
                    type: 'GET',
                    data: { action: 'get', id: id },
                    success: function(patient) {
                        hideLoader();
                        $('#editId').val(patient.id);
                        $('#editName').val(patient.name);
                        $('#editMobile').val(patient.mobile);
                        $('#editDate').val(patient.date ? new Date(patient.date).toISOString().slice(0, 16) : '');
                        $('#editDoctor').val(patient.doctor);
                        $('#editDepartment').val(patient.department);
                        if (patient.photo) {
                            $('#editPhotoPreview').attr('src', baseUrl + '/' + patient.photo.replace(/^\/+/, '')).show();
                        } else {
                            $('#editPhotoPreview').hide();
                        }
                        $('#editPatientModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        hideLoader();
                        console.log('Error response:', xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error fetching patient data: ' + error,
                        });
                    }
                });
            });

            $('#editPatientForm').submit(function(e) {
                e.preventDefault();
                showLoader();
                const formData = new FormData(this);
                formData.append('action', 'update');
                formData.append('id', $('#editId').val());
                $.ajax({
                    url: baseUrl + '/api/patients/update',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        hideLoader();
                        if (response.success) {
                            $('#editPatientModal').modal('hide');
                            loadPatients();
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Patient updated successfully!',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to update patient: ' + (response.error || 'Unknown error'),
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        hideLoader();
                        console.log('Error response:', xhr.responseText);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error updating patient: ' + error,
                        });
                    }
                });
            });

            // Delete Patient
            $(document).on('click', '.delete-btn', function() {
                let id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        showLoader();
                        $.ajax({
                            url: baseUrl + '/api/patients/delete',
                            type: 'POST',
                            data: {
                                action: 'delete',
                                id: id
                            },
                            success: function(response) {
                                hideLoader();
                                if (response.success) {
                                    loadPatients();
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted!',
                                        text: 'Patient has been deleted.',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: 'Failed to delete patient: ' + (response.error || 'Unknown error'),
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                hideLoader();
                                console.log('Error response:', xhr.responseText);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'Error deleting patient: ' + error,
                                });
                            }
                        });
                    }
                });
            });

            // Search and Pagination
            $('#searchInput').on('input', function() {
                loadPatients(1);
            });

            $('.page-prev, .page-next').on('click', function() {
                let currentPage = parseInt($('.page-input').val());
                let totalPages = parseInt($('#totalPages').text());
                let newPage = $(this).hasClass('page-prev') ? currentPage - 1 : currentPage + 1;
                if (newPage > 0 && newPage <= totalPages) {
                    $('.page-input').val(newPage);
                    loadPatients(newPage);
                }
            });

            $('.page-input').on('change', function() {
                let newPage = parseInt($(this).val());
                let totalPages = parseInt($('#totalPages').text());
                if (newPage > 0 && newPage <= totalPages) {
                    loadPatients(newPage);
                } else {
                    $(this).val(currentPage);
                }
            });
        });
    
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
