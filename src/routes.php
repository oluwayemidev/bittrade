<?php
// Get the current request URI (path) and remove query strings
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Load necessary controllers and views
require_once 'controllers/UserController.php';
require_once 'controllers/AdminController.php';
require_once 'views/partials/header.php';
require_once 'views/partials/footer.php';

// Routing logic
switch ($request) {
    // Home/Landing page
    case '/' :
    case '/index' :
        require __DIR__ . '/views/home.php';
        break;

    // User routes
    case '/user/dashboard' :
        $userController = new UserController();
        $userController->dashboard();
        break;
    case '/user/login' :
        $userController = new UserController();
        $userController->login();
        break;
    case '/user/register' :
        $userController = new UserController();
        $userController->register();
        break;

    // Admin routes
    case '/admin/dashboard' :
        $adminController = new AdminController();
        $adminController->dashboard();
        break;
    case '/admin/login' :
        $adminController = new AdminController();
        $adminController->login();
        break;
    case '/admin/logout' :
        $adminController = new AdminController();
        $adminController->logout();
        break;

    // Catch-all for undefined routes
    default:
        require __DIR__ . '/views/error.php';
        break;
}
