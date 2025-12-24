<?php
require_once __DIR__ . '/../../core/Database.php';


class Student
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($userId, $admissionNumber, $classGrade)
    {
        $stmt = $this->db->prepare("
            INSERT INTO Students (user_id, admission_number, class_grade)
            VALUES (?, ?, ?)
        ");
        return $stmt->execute([$userId, $admissionNumber, $classGrade]);
    }

    public function findByAdmissionNumber($admissionNumber)
    {
        $stmt = $this->db->prepare("SELECT * FROM Students WHERE admission_number = ?");
        $stmt->execute([$admissionNumber]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM Students WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
