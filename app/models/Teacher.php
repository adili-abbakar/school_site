<?php
require_once __DIR__ . '/../../core/Database.php';


class Teacher
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($userId, $staffNumber, $occupation, $placeOfWork, $subjectsTaught)
    {
        $stmt = $this->db->prepare("
            INSERT INTO Teachers (user_id, staff_number, occupation, place_of_work, subjects_taught)
            VALUES (?, ?, ?, ?, ?)
        ");
        return $stmt->execute([$userId, $staffNumber, $occupation, $placeOfWork, $subjectsTaught]);
    }

    public function findByStaffNumber($staffNumber)
    {
        $stmt = $this->db->prepare("SELECT * FROM Teachers WHERE staff_number = ?");
        $stmt->execute([$staffNumber]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM Teachers WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
