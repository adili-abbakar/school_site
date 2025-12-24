<?php
class DashboardController
{
    public function index()
    {
        global $router;
        include __DIR__ . '/../views/home/dashboard.php';
    }
}
