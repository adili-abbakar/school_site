<?php
require_once __DIR__ . '/../core/Guard.php';
Guard::protect(__FILE__);


require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/DashboardController.php';

$router = new Router();
$auth = new AuthController();
$dashboard = new DashboardController();

// Dashboard
$router->get('/', [$dashboard, 'index']);

// Login
$router->get('/login', [$auth, 'showLogin']);
$router->post('/login', [$auth, 'login']);

// Register
$router->get('/register', [$auth, 'showRegister']);
$router->post('/register', [$auth, 'register']);

// Forgot Password 
$router->get('/forgot-password', [AuthController::class, 'showForgotPassword']);
$router->post('/forgot-password', [AuthController::class, 'sendResetLink']);

// Reset Password 
$router->get('/reset-password', [AuthController::class, 'showResetPassword']);
$router->post('/reset-password', [AuthController::class, 'resetPassword']);

// Logout
$router->get('/logout', [$auth, 'logout']);
