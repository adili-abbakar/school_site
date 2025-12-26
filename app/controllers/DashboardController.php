<?php
require_once __DIR__ . '/../../core/Guard.php';
Guard::protect(__FILE__);

class DashboardController
{
    public function index()
    {
        global $router;
        include __DIR__ . '/../views/home/dashboard.php';
    }
}
