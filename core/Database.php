<?php
require_once __DIR__ . '/./Env.php';
require_once __DIR__ . '/./Guard.php';
Guard::protect(__FILE__);


class Database
{
    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        // Load env file once
        Env::load(__DIR__ . '/../config/.env');

        $dsn = "mysql:host=" . Env::get('DB_HOST') . ";dbname=" . Env::get('DB_NAME') . ";charset=utf8mb4";
        $this->pdo = new PDO($dsn, Env::get('DB_USER'), Env::get('DB_PASS'));
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->pdo;
    }
}
