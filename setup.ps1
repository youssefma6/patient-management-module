# Create folder structure
New-Item -ItemType Directory -Path "assets\css", "assets\js", "assets\images", "templates", "includes", "vendor" -Force

# Create files
New-Item -ItemType File -Path ".gitignore", "composer.json", "index.php", "README.md" -Force

# Add content to .gitignore
Set-Content -Path ".gitignore" -Value "/vendor/`n/composer.lock`n.env"

# Add basic content to composer.json
Set-Content -Path "composer.json" -Value @"
{
    "name": "your-username/patient-management-module",
    "description": "Patient Management Module for MediCore Hospital",
    "require": {
        "smarty/smarty": "^4.0"
    }
}
"@

# Add basic content to index.php
Set-Content -Path "index.php" -Value @"
<?php
echo "Patient Management Module";
?>
"@

# Add basic content to README.md
Set-Content -Path "README.md" -Value @"
# Patient Management Module

## Overview
This project is a patient management module for MediCore Hospital.

## Setup Instructions
1. Clone the repository.
2. Run `composer install`.
3. Set up the MySQL database.
4. Configure the database connection.
5. Run the project on a PHP server.
"@

Write-Output "Folder structure and files created successfully!"