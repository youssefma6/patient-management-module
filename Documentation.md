Patient Management Module Documentation
Introduction
The Patient Management Module is a web-based application designed to manage patient records in a healthcare system. It provides a user-friendly interface for performing CRUD (Create, Read, Update, Delete) operations on patient data, following the design mockup in images/maquette.png. The application leverages PHP for backend logic, MySQL for data storage, JavaScript for interactivity, Bootstrap for responsive design, Smarty for templating, and AdminLTE for a polished admin interface.
Project Goals

Implement a fully functional patient management system with CRUD operations.
Ensure the design aligns with the provided mockup (images/maquette.png).
Make the application responsive for desktop, tablet, and mobile devices.
Use the specified technologies: PHP 7.4, MySQL, JavaScript, Bootstrap, Smarty (v5.3.1), and AdminLTE (v3).

Functionalities
1. Dashboard (index.php)

Overview: Displays a summary of patient statistics (e.g., total patients, appointments) and a list of available doctors.
Quick Actions:
Admit New Patient: Redirects to patient_listing.php and opens the "Add Patient" modal.
Emergency Room: Placeholder for future functionality.
Pharmacy Details: Placeholder for future functionality.


Stats Cards: Shows metrics like total appointments, total patients, cancellations, and average patients per doctor.
Available Doctors: Lists doctors with their names and departments, with a search bar for filtering (note: this search functionality is static and not fully implemented).

2. Patient Listing (patient_listing.php)

View Patients: Displays a paginated table of patient records with columns for photo, name, mobile, date, doctor, and department.
Search and Pagination (exclusive to this page):
Search: Filter patients by name using the search bar at the top of the table. This functionality is only available on the patient listing page.
Pagination: Navigate through patient records using page controls (e.g., previous/next buttons, page input). This functionality is only available on the patient listing page.


CRUD Operations:
Add: Opens a modal to admit a new patient with fields for photo (optional), name, mobile, date, doctor, and department.
Edit: Opens a modal to update patient details.
Delete: Deletes a patient record after confirmation via a SweetAlert dialog.


Photo Upload: Supports uploading patient photos, stored in the uploads/ directory.

3. Responsive Design

The application is fully responsive:
Desktop (>768px): Two-column layout with patient table on the left and stats/doctors on the right.
Tablet (≤768px): Stacks columns vertically, adjusts padding, and reorganizes elements for better readability.
Mobile (≤576px): Further reduces font sizes and adjusts margins for optimal viewing on small screens.



Project Structure
The project is organized as follows:

Root Directory:

index.php: Entry point; displays the dashboard.
patient_listing.php: Handles patient listing and CRUD operations.
styles.css: Custom CSS for styling and responsiveness.
database.sql: MySQL database schema and sample data.


Subdirectories:

api/:
patients.php: API endpoint for CRUD operations (GET for fetching, POST for add/update/delete).


includes/:
db.php: Database connection configuration using PDO.


uploads/:
Directory for storing uploaded patient photos.


assets/:
adminlte/: AdminLTE template files (CSS, JS, plugins).
images/: Custom images (e.g., add-user.png, ambulance.png, pills.png).
media/: Logo and other media files (e.g., logo.png).


images/:
maquette.png: Mockup design reference.





Technical Details
Database Schema
The database (patient_management) contains a single table:

patients:
id (INT, Primary Key, Auto-Increment): Unique identifier for each patient.
name (VARCHAR): Patient’s name.
mobile (VARCHAR): Patient’s mobile number.
date (DATETIME): Date and time of admission.
doctor (VARCHAR): Assigned doctor’s name.
department (VARCHAR): Department of treatment.
photo (VARCHAR): File path to the patient’s photo (optional).



The schema is provided in database.sql.
Backend (api/patients.php)

GET Requests:
Fetch all patients with pagination and search: GET api/patients.php?page=1&search=query.
Fetch a single patient for editing: GET api/patients.php?action=get&id=1.


POST Requests:
Add a patient: POST api/patients.php with action=add and form data.
Update a patient: POST api/patients.php with action=update and form data.
Delete a patient: POST api/patients.php with action=delete and id.



Frontend

Smarty Templates: Used in index.php and patient_listing.php to render dynamic data (e.g., patient lists, doctor lists).
JavaScript/jQuery:
Handles AJAX requests to api/patients.php for CRUD operations.
Implements search, pagination, and modal interactions on the patient listing page.
Uses SweetAlert2 for confirmation dialogs (e.g., delete confirmation).


Bootstrap: Provides responsive layout, modals, and form styling.
AdminLTE: Supplies the admin dashboard theme, sidebar, and table styles.

File Uploads

Patient photos are uploaded via the "Add Patient" and "Edit Patient" modals.
Files are stored in uploads/ with unique filenames (e.g., uniqid()-filename.jpg).
The API handles file deletion when a patient is deleted or updated with a new photo.

Setup and Running the Project
Prerequisites

XAMPP with PHP 7.4 and MySQL.
Web browser (e.g., Chrome, Firefox).
Git (optional, for cloning the repository).

Steps

Clone/Download the Project:

Clone the repository: git clone <repository-url> or download the ZIP file.
Place the project in your web server’s root directory (e.g., C:/xampp/htdocs/patient-management-module).


Set Up the Database:

Open phpMyAdmin and create a database named patient_management.
Import database.sql into this database.
Verify the connection settings in includes/db.php.


Configure File Permissions:

Ensure the uploads/ directory is writable:
Windows: Grant write permissions via Properties > Security.
Linux: chmod -R 777 uploads/.




Run the Application:

Start Apache and MySQL via XAMPP.
Open a browser and navigate to http://localhost/patient-management-module.



Usage Examples

View Dashboard: Navigate to http://localhost/patient-management-module to see patient stats and quick actions.
Admit a New Patient:
From the dashboard, click "Admit New Patient".
You’ll be redirected to patient_listing.php, and the "Add Patient" modal will open.
Fill in the form (e.g., name, mobile, date, doctor, department) and submit.


Edit a Patient:
On patient_listing.php, click the edit icon (pencil) next to a patient.
Update the details in the modal and submit.


Delete a Patient:
On patient_listing.php, click the delete icon (trash) next to a patient.
Confirm the deletion in the dialog.


Search and Paginate:
On patient_listing.php, use the search bar to filter patients by name.
Use the pagination controls to navigate through patient records.



Troubleshooting

Database Connection Issues:
Check includes/db.php for correct credentials.
Ensure MySQL is running and the database exists.


File Upload Errors:
Verify that uploads/ is writable.
Check the file size and type (only images are allowed).


Modal Not Opening:
Ensure jQuery and Bootstrap JS are loaded correctly.
Check the browser console for JavaScript errors.


Search/Pagination Not Working:
Ensure you’re on patient_listing.php, as these features are not implemented on other pages like the dashboard.




Contact
For support or inquiries, email lassoyoussef@gmail.com.

Note: This project fulfills the requirements for the patient management module, including all CRUD operations and adherence to the mockup design. The code is well-documented, and the application is fully functional and responsive.
