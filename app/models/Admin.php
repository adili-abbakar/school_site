<?php
require_once __DIR__ . '/../../core/Database.php';


class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($userId, $staffNumber, $roleType)
    {
        $stmt = $this->db->prepare("
            INSERT INTO Admins (user_id, staff_number, role_type)
            VALUES (?, ?, ?)
        ");
        return $stmt->execute([$userId, $staffNumber, $roleType]);
    }

    public function findByStaffNumber($staffNumber)
    {
        $stmt = $this->db->prepare("SELECT * FROM Admins WHERE staff_number = ?");
        $stmt->execute([$staffNumber]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM Admins WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
