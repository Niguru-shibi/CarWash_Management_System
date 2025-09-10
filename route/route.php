<?php
// Start session
session_start();

// Import controller
require_once '../controller/controller.php';

$userController = new Controller();

// Routing
$pages = [
    'home'           => [$userController, 'home'],
    'admin_login'    => [$userController, 'admin_login'],
];

$page = $_GET['page'] ?? 'home';

if (array_key_exists($page, $pages)) {
    $target = $pages[$page];

    if (is_callable($target)) {
        call_user_func($target);  // Call controller method
    } else {
        include $target;          // Include view or file
    }
} else {
    echo "404 - Subpage not found.";
}

