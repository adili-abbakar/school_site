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

// Logout
$router->get('/logout', [$auth, 'logout']);
