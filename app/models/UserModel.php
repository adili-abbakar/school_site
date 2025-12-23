<?php
class UserModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // Create users table if not exists
    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB;";

        $this->pdo->exec($sql);
    }
}
