<?php

class UserController {

    public function dashboard() {
        require_once __DIR__ . '/../views/user/dashboard.php';
    }

    public function login() {
        require_once __DIR__ . '/../views/user/login.php';
    }

    public function register() {
        require_once __DIR__ . '/../views/user/register.php';
    }
}

?>
