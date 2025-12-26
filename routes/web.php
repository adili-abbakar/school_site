<?php
require_once __DIR__ . '/../core/Guard.php';
Guard::protect(__FILE__);


spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/../app/controllers/';
    $file = $baseDir . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

$router = new Router();
$auth = new AuthController();
$public  = new PublicController(); 

// public routes
$router->get('/', [$public, 'showHome']);
$router->get('/about', [$public, 'showAbout']);
$router->get('/contact', [$public, 'showContact']);
$router->get('/apply-admission', [$public, 'showApplyAdmission']);



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
