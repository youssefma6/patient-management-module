Patient Management Module
Overview
The Patient Management Module is a web application designed to manage patient records in a healthcare system. It allows users to perform CRUD (Create, Read, Update, Delete) operations on patient data, adhering to the mockup design provided in images/maquette.png. The application is built using PHP, MySQL, JavaScript, Bootstrap, Smarty Template Engine, and AdminLTE template for a responsive and user-friendly interface.
Features

Dashboard: Displays a summary of patient statistics and available doctors.
Patient Listing: View patient records with the following functionalities:
Search: Filter patients by name (available only on the patient listing page).
Pagination: Navigate through patient records with page controls (available only on the patient listing page).


Add Patient: Admit new patients with details like name, mobile, date, doctor, department, and an optional photo.
Edit Patient: Update existing patient records.
Delete Patient: Remove patient records with confirmation.
Responsive Design: Optimized for desktop, tablet, and mobile devices.

Technologies Used

PHP 7.4: Backend logic and API handling.
MySQL: Database for storing patient records.
JavaScript/jQuery: Frontend interactivity and AJAX requests.
Bootstrap: Responsive layout and modal components.
Smarty Template Engine (v5.3.1): Templating for dynamic HTML rendering.
AdminLTE (v3): Admin dashboard template for styling and layout.

Prerequisites

XAMPP (or similar) with PHP 7.4 and MySQL.
Web browser (e.g., Chrome, Firefox).
Git (optional, for cloning the repository).

Setup Instructions

Clone the Repository (if hosted on GitHub):
git clone <repository-url>
cd patient-management-module

Alternatively, download and extract the project files.

Set Up the Web Server:

Place the project folder in your web server’s root directory (e.g., C:/xampp/htdocs/patient-management-module if using XAMPP).
Start Apache and MySQL services via XAMPP Control Panel.


Configure the Database:

Import the provided database.sql file into MySQL:

Open phpMyAdmin (or any MySQL client).
Create a new database named patient_management.
Import database.sql into this database.


Update the database connection settings in includes/db.php if necessary:
$dsn = 'mysql:host=localhost;dbname=patient_management';
$username = 'root';
$password = '';




Set Up File Permissions:

Ensure the uploads/ directory is writable for storing patient photos:
On Windows, right-click uploads/, go to Properties > Security, and grant write permissions.

On Linux, run:
chmod -R 777 uploads/






Access the Application:

Open a browser and navigate to http://localhost/patient-management-module.
The dashboard (index.php) should load, showing patient statistics and navigation options.



Usage

Dashboard (index.php): View patient stats, available doctors, and quick actions like "Admit New Patient".
Patient Listing (patient_listing.php): Browse patient records, search, paginate, edit, or delete patients.
Add a Patient: Click "Admit New Patient" on the dashboard to redirect to the patient listing page and open the "Add Patient" modal. Fill in the details and submit.
Edit/Delete: On the patient listing page, use the edit (pencil) or delete (trash) icons next to each patient record.

Project Structure

api/patients.php: Handles CRUD operations via API endpoints.
includes/db.php: Database connection setup.
uploads/: Directory for storing patient photos.
assets/: AdminLTE assets (CSS, JS, images).
styles.css: Custom styles for responsiveness and layout.
index.php: Dashboard page.
patient_listing.php: Patient listing page with CRUD functionality.
database.sql: MySQL database schema and sample data.

Contact
For any issues or questions, please contact:

Email: lassoyoussef@gmail.com


Note: This project was developed as per the requirements provided, including the mockup design in images/maquette.png. All CRUD operations are fully functional, and the application is responsive across devices.
