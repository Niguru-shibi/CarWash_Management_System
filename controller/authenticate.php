<?php
    //import database
    require_once '../model/Admin.php';

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
                    $_SESSION['admin_id'] = $admin_list[0]['id'];
                    header("Location: ../views/admin_pages/admin_dashboard.php");
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