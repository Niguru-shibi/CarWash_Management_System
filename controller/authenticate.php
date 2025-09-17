<?php
// Import database models
require_once __DIR__ . '/../model/Admin.php';
require_once __DIR__ . '/../model/Client.php';

class Authenticate {
    private $client; // ✅ Declare client property

    public function __construct() {
        $this->client = new Client(); // ✅ Initialize Client once
    }

    // Admin Login
    public function admin_login() {
        $adminUsername = $_POST['adminUsername'] ?? '';
        $adminPassword = $_POST['adminPassword'] ?? '';

        $admin = new Admin();
        $admin_list = $admin->getAdminByUsername($adminUsername);

        if (count($admin_list) > 0) {
            $stored_hash = $admin_list[0]['admin_password'];

            if (password_verify($adminPassword, $stored_hash)) {
                session_start();
                $_SESSION['admin_id'] = $admin_list[0]['admin_id'];
                header("Location: ../views/admin_views.php");
                exit();
            } else {
                header("Location: ../index.php?login=failed");
                exit();
            }
        } else {
            header("Location: ../index.php?login=failed");
            exit();
        }
    }

    // Client Login
    public function client_login() {
        $clientEmail = $_POST['clientEmail'] ?? '';
        $clientPassword = $_POST['clientPassword'] ?? '';

        $client_list = $this->client->getClientByEmail($clientEmail);

        if (count($client_list) > 0) {
            $stored_hash = $client_list[0]['client_password'];

            if (password_verify($clientPassword, $stored_hash)) {
                session_start();
                $_SESSION['client_id'] = $client_list[0]['client_id'];
                header("Location: ../views/client_views.php");
                exit();
            } else {
                header("Location: ../index.php?login=failed");
                exit();
            }
        } else {
            header("Location: ../index.php?login=failed");
            exit();
        }
    }

    // Client Register
    public function client_register() {
        if (isset($_POST['clientUsername'], $_POST['clientEmail'], $_POST['clientPassword'], $_POST['confirmPassword'])) {
            $username = $_POST['clientUsername'];
            $email = $_POST['clientEmail'];
            $password = $_POST['clientPassword'];
            $confirmPassword = $_POST['confirmPassword'];

            if ($password !== $confirmPassword) {
                header("Location: ../index.php?register=password_mismatch");
                exit();
            }

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // ✅ Use $this->client (now initialized in __construct)
            $result = $this->client->createClient($username, $email, $hashedPassword);

            if ($result) {
                header("Location: ../index.php?register=success");
                exit();
            } else {
                header("Location: ../index.php?register=failed");
                exit();
            }
        }
    }
}

// ✅ Router
if (isset($_GET['function'])) {
    $function = $_GET['function'];

    $authenticate = new Authenticate();

    if (method_exists($authenticate, $function)) {
        $authenticate->{$function}();
    } else {
        die("Function not found.");
    }
}
