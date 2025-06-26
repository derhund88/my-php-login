<?php
require_once __DIR__ . '/../models/User.php';
class AuthController {
    public function showLoginForm() {
        include __DIR__ . '/../views/login.php';
    }

    public function showRegisterForm() {
        include __DIR__ . '/../views/register.php';
    }

    public function dashboard() {
        include __DIR__ . '/../views/dashboard.php';
    }
}
?>
