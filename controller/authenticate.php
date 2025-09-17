<?php
    //import database
    require_once __DIR__ . '/../model/Admin.php';
    require_once __DIR__ . '/../model/Client.php';


    //get the value of function in the url
    $function = $_GET['function'];

    //instantiate
    $authenticate = new Authenticate();

    $authenticate->{$function}();



    class Authenticate {
       
        //Admin Login
        function admin_login() {
            $adminUsername = $_POST['adminUsername'];
            $adminPassword = $_POST['adminPassword'];
        
            $admin = new Admin();
            $admin_list = $admin->getAdminByUsername($adminUsername);
        
            if (count($admin_list) > 0) {
                $stored_hash = $admin_list[0]['admin_password']; // Match the exact DB field
        
                if (password_verify($adminPassword, $stored_hash)) {
                    $_SESSION['admin_id'] = $admin_list[0]['admin_id'];
                    header("Location: ../views/admin_views.php");
                    exit();
                } else {
                    // Incorrect password
                    header("Location: ../index.php");
                    exit();
                }
            } else {
                // Username not found
                header("Location: ../index.php");
                exit();
            }
        }
        //ClientLogin
         function client_login() {
            $clientEmail = $_POST['clientEmail'];
            $clientPassword = $_POST['clientPassword'];
        
            $client = new Client();
            $client_list = $client->getClientByEmail($clientEmail);
        
            if (count($client_list) > 0) {
                $stored_hash = $client_list[0]['client_password']; // Match the exact DB field
        
                if (password_verify($clientPassword, $stored_hash)) {
                    $_SESSION['client_id'] = $client_list[0]['client_id'];
                    header("Location: ../views/client_views.php");
                    exit();
                } else {
                    // Incorrect password
                    header("Location: ../index.php");
                    exit();
                }
            } else {
                // Username not found
                header("Location: ../index.php");
                exit();
            }
        }
        
        
        
    }