<?php
require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

session_start();

$controller = new AuthController();

$page = $_GET['page'] ?? 'login';

switch ($page) {
    case 'login':
        $controller->showLoginForm();
        break;
    case 'register':
        $controller->showRegisterForm();
        break;
    case 'dashboard':
        $controller->dashboard();
        break;
    case 'logout':
        session_destroy();
        header("Location: /");
        break;
    default:
        echo "404 Not Found";
}
?>
