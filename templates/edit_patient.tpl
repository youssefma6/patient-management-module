<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Patient</h2>
        <form action="edit_patient.php?id={$patient.id}" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{$patient.name}" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" value="{$patient.mobile}" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="datetime-local" class="form-control" id="date" name="date" value="{$patient.date|date_format:'%Y-%m-%dT%H:%M'}" required>
            </div>
            <div class="form-group">
                <label for="doctor">Doctor</label>
                <input type="text" class="form-control" id="doctor" name="doctor" value="{$patient.doctor}" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="{$patient.department}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Patient</button>
        </form>
    </div>
</body>
</html>