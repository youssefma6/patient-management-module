<?php
namespace App\Controllers;

use App\Models\Patient;
use Smarty\Smarty;

class PatientController
{
    protected $smarty;

    public function __construct(Smarty $smarty)
    {
        $this->smarty = $smarty;
    }

    public function index()
    {
        $patients = Patient::all()->toArray();
        $doctors = [
            ['name' => 'Jennifer Roberts', 'department' => 'Pediatrics (A-9987)'],
            ['name' => 'Michael Sullivan', 'department' => 'Cardiology (A-9645)'],
            ['name' => 'Emily Harris', 'department' => 'Gynecology (A-9987)'],
            ['name' => 'Jonathan Davis', 'department' => 'Orthopedics (A-9988)'],
            ['name' => 'Sarah Mitchell', 'department' => 'Dermatology (A-9987)'],
            ['name' => 'Andrew Thompson', 'department' => 'Neurology (A-9820)'],
            ['name' => 'Jessica Anderson', 'department' => 'Internal Medicine (A-9645)'],
            ['name' => 'David Wilson', 'department' => 'Ophthalmology (A-9987)'],
        ];
        $this->smarty->assign('patients', $patients);
        $this->smarty->assign('doctors', $doctors);
        $this->smarty->display('index.tpl');
    }

    public function listPatients()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perPage = 10;
        $patients = Patient::skip(($page - 1) * $perPage)->take($perPage)->get()->toArray();
        $total = Patient::count();
        $totalPages = ceil($total / $perPage);
        $this->smarty->assign('patients', $patients);
        $this->smarty->assign('totalPages', $totalPages);
        $this->smarty->assign('currentPage', $page);
        $this->smarty->display('patient_listing.tpl');
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $patient = new Patient();
            $patient->name = $_POST['name'];
            $patient->mobile = $_POST['mobile'];
            $patient->date = $_POST['date'];
            $patient->doctor = $_POST['doctor'];
            $patient->department = $_POST['department'];
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                $uploadsDir = __DIR__ . '/../public/uploads/';
                if (!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0775, true);
                }
                $filename = preg_replace('/[^A-Za-z0-9\-.]/', '_', $_FILES['photo']['name']);
                $photoPath = 'uploads/' . $filename;
                if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadsDir . $filename)) {
                    throw new Exception('Failed to move uploaded file');
                }
                $patient->photo = $photoPath;
            }
            $patient->save();
            header('Location: /patients');
            exit;
        }
    }

    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $patient->name = $_POST['name'];
            $patient->mobile = $_POST['mobile'];
            $patient->date = $_POST['date'];
            $patient->doctor = $_POST['doctor'];
            $patient->department = $_POST['department'];
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                $uploadsDir = __DIR__ . '/../public/uploads/';
                if (!is_dir($uploadsDir)) {
                    mkdir($uploadsDir, 0775, true);
                }
                $filename = preg_replace('/[^A-Za-z0-9\-.]/', '_', $_FILES['photo']['name']);
                $photoPath = 'uploads/' . $filename;
                if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadsDir . $filename)) {
                    throw new Exception('Failed to move uploaded file');
                }
                $patient->photo = $photoPath;
            }
            $patient->save();
            header('Location: /patients');
            exit;
        }
        $this->smarty->assign('patient', $patient->toArray());
        $this->smarty->display('edit_patient.tpl');
    }

    public function delete($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        header('Location: /patients');
        exit;
    }

    public function api($action)
    {
        error_log("API action: $action");
        header('Content-Type: application/json');
        try {
            switch ($action) {
                case 'get':
                    if (isset($_GET['id'])) {
                        $patient = Patient::findOrFail($_GET['id']);
                        echo json_encode($patient);
                    } else {
                        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        $perPage = 10;
                        $search = isset($_GET['search']) ? $_GET['search'] : '';
                        $query = Patient::query();
                        if ($search) {
                            $query->where('name', 'like', "%$search%")
                                  ->orWhere('mobile', 'like', "%$search%");
                        }
                        $patients = $query->skip(($page - 1) * $perPage)->take($perPage)->get();
                        $total = $query->count();
                        echo json_encode([
                            'success' => true,
                            'data' => $patients,
                            'totalPages' => ceil($total / $perPage)
                        ]);
                    }
                    break;
                case 'add':
                    error_log("Add patient: " . print_r($_POST, true));
                    if (isset($_FILES['photo'])) {
                        error_log("Photo upload: " . print_r($_FILES['photo'], true));
                    }
                    $patient = new Patient();
                    $patient->fill($_POST);
                    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                        $uploadsDir = __DIR__ . '/../public/uploads/';
                        if (!is_dir($uploadsDir)) {
                            mkdir($uploadsDir, 0775, true);
                        }
                        $filename = preg_replace('/[^A-Za-z0-9\-.]/', '_', $_FILES['photo']['name']);
                        $photoPath = 'uploads/' . $filename;
                        if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadsDir . $filename)) {
                            throw new Exception('Failed to move uploaded file');
                        }
                        $patient->photo = $photoPath;
                    }
                    $patient->save();
                    echo json_encode(['success' => true]);
                    break;
                case 'update':
                    error_log("Update patient: " . print_r($_POST, true));
                    if (isset($_FILES['photo'])) {
                        error_log("Photo upload: " . print_r($_FILES['photo'], true));
                    }
                    $patient = Patient::findOrFail($_POST['id']);
                    $patient->fill($_POST);
                    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                        $uploadsDir = __DIR__ . '/../public/uploads/';
                        if (!is_dir($uploadsDir)) {
                            mkdir($uploadsDir, 0775, true);
                        }
                        $filename = preg_replace('/[^A-Za-z0-9\-.]/', '_', $_FILES['photo']['name']);
                        $photoPath = 'uploads/' . $filename;
                        if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadsDir . $filename)) {
                            throw new Exception('Failed to move uploaded file');
                        }
                        $patient->photo = $photoPath;
                    }
                    $patient->save();
                    echo json_encode(['success' => true]);
                    break;
                case 'delete':
                    $patient = Patient::findOrFail($_POST['id']);
                    $patient->delete();
                    echo json_encode(['success' => true]);
                    break;
                default:
                    echo json_encode(['success' => false, 'error' => 'Invalid action']);
            }
        } catch (Exception $e) {
            error_log("Error in API $action: " . $e->getMessage());
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}