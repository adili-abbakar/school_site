<?php
require_once __DIR__ . '/../../core/Database.php';;

class Guardian
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($userId, $occupation, $placeOfWork)
    {
        $stmt = $this->db->prepare("
            INSERT INTO Guardians (user_id, occupation, place_of_work)
            VALUES (?, ?, ?)
        ");
        return $stmt->execute([$userId, $occupation, $placeOfWork]);
    }

    public function findByUserId($userId)
    {
        $stmt = $this->db->prepare("SELECT * FROM Guardians WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
