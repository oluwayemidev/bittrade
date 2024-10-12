<?php

class AdminController {

    // Admin dashboard method
    public function dashboard() {
        // You can add logic to check if the admin is logged in
        // For now, we'll just load the dashboard view
        require_once __DIR__ . '/../views/admin/dashboard.php';
    }

    // Admin login method
    public function login() {
        // If the form is submitted, process the login logic
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Validate credentials (this should be done securely, for example, using hashed passwords)
            if ($this->validateLogin($username, $password)) {
                // If login is successful, redirect to the dashboard
                header('Location: /admin/dashboard');
                exit();
            } else {
                // If login fails, show an error message
                $error = "Invalid username or password";
            }
        }

        // Show the login form
        require_once __DIR__ . '/../views/admin/login.php';
    }

    // Admin logout method
    public function logout() {
        // Here you can destroy the admin session and redirect to the login page
        session_start();
        session_destroy();
        header('Location: /admin/login');
        exit();
    }

    // Function to validate login credentials (example)
    private function validateLogin($username, $password) {
        // Normally, you'd check the credentials against a database
        // For simplicity, let's assume a single admin user exists
        $adminUsername = "admin";
        $adminPassword = "admin123"; // In a real-world scenario, this would be hashed

        // Basic validation logic
        return ($username === $adminUsername && $password === $adminPassword);
    }
}

?>
