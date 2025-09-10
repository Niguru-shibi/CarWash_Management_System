<?php

class Controller {
    
    public function home() {
        include '../views/view_page.php';
    }

    public function admin_login() {
        include '../views/dashboard/admin_login.php';
    }
    
}