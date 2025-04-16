<?php
require_once '../includes/db.php';
header('Content-Type: application/json');

// Enable error logging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Ensure uploads directory exists
$uploadDir = 'C:/xampp/htdocs/patient-management-module/uploads/';
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}
if (!is_writable($uploadDir)) {
    echo json_encode(['error' => 'Uploads directory is not writable']);
    exit;
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $limit = 10;
        $offset = ($page - 1) * $limit;

        if (isset($_GET['action']) && $_GET['action'] === 'get' && isset($_GET['id'])) {
            $stmt = $pdo->prepare("SELECT * FROM patients WHERE id = ?");
            $stmt->execute([$_GET['id']]);
            $patient = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($patient['photo']) {
                $patient['photo'] = 'http://localhost/patient-management-module/uploads/' . basename($patient['photo']);
            }
            echo json_encode($patient);
        } else {
            $where = $search ? "WHERE name LIKE ?" : "";
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM patients $where");
            $params = $search ? ["%$search%"] : [];
            $stmt->execute($params);
            $total = $stmt->fetchColumn();
            $totalPages = ceil($total / $limit);

            $sql = "SELECT * FROM patients $where LIMIT $limit OFFSET $offset";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            $patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($patients as &$patient) {
                if ($patient['photo']) {
                    $patient['photo'] = 'http://localhost/patient-management-module/uploads/' . basename($patient['photo']);
                }
            }
            unset($patient);

            echo json_encode(['data' => $patients, 'totalPages' => $totalPages]);
        }
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'] ?? '';

        // Validate required fields only for add and update actions
        if ($action === 'add' || $action === 'update') {
            $requiredFields = ['name', 'mobile', 'date', 'doctor', 'department'];
            foreach ($requiredFields as $field) {
                if (empty($_POST[$field])) {
                    echo json_encode(['error' => ucfirst($field) . ' is required']);
                    exit;
                }
            }

            // Validate phone number
            $mobile = $_POST['mobile'];
            if (strlen($mobile) > 15) {
                echo json_encode(['error' => 'Mobile number must not exceed 15 characters']);
                exit;
            }
            if (!preg_match('/^[0-9]+$/', $mobile)) {
                echo json_encode(['error' => 'Mobile number must contain only digits']);
                exit;
            }

            // Check if mobile number is unique
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM patients WHERE mobile = ? AND id != ?");
            $id = isset($_POST['id']) ? $_POST['id'] : 0;
            $stmt->execute([$mobile, $id]);
            if ($stmt->fetchColumn() > 0) {
                echo json_encode(['error' => 'Mobile number already exists']);
                exit;
            }

            // Handle photo upload
            $photoPath = null;
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                $fileName = uniqid() . '-' . basename($_FILES['photo']['name']);
                $targetPath = $uploadDir . $fileName;
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath)) {
                    $photoPath = $targetPath;
                } else {
                    echo json_encode(['error' => 'Failed to move uploaded file']);
                    exit;
                }
            }
        }

        if ($action === 'add') {
            $stmt = $pdo->prepare("INSERT INTO patients (name, mobile, date, doctor, department, photo) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$_POST['name'], $_POST['mobile'], $_POST['date'], $_POST['doctor'], $_POST['department'], $photoPath]);
            echo json_encode(['success' => true]);
        } elseif ($action === 'update') {
            $stmt = $pdo->prepare("SELECT photo FROM patients WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            $currentPhoto = $stmt->fetchColumn();

            if ($photoPath && $currentPhoto && file_exists($currentPhoto)) {
                unlink($currentPhoto);
            }

            $stmt = $pdo->prepare("UPDATE patients SET name = ?, mobile = ?, date = ?, doctor = ?, department = ?, photo = ? WHERE id = ?");
            $stmt->execute([
                $_POST['name'],
                $_POST['mobile'],
                $_POST['date'],
                $_POST['doctor'],
                $_POST['department'],
                $photoPath ?: $currentPhoto,
                $_POST['id']
            ]);
            echo json_encode(['success' => true]);
        } elseif ($action === 'delete') {
            // Validate that id is provided
            if (empty($_POST['id'])) {
                echo json_encode(['error' => 'Patient ID is required']);
                exit;
            }

            $stmt = $pdo->prepare("SELECT photo FROM patients WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            $photo = $stmt->fetchColumn();
            if ($photo && file_exists($photo)) {
                unlink($photo);
            }

            $stmt = $pdo->prepare("DELETE FROM patients WHERE id = ?");
            $stmt->execute([$_POST['id']]);
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['error' => 'Invalid action']);
            exit;
        }
    }
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>