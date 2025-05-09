<?php
require_once __DIR__ . '/../config/database.php';

class UserRepository
{
    private $db;

    public function __construct()
    {
        $this->db = getDbConnection();
    }

    public function createUser($username, $email)
    {
        $stmt = $this->db->prepare("INSERT INTO users (username, email) VALUES (?, ?)");
        return $stmt->execute([$username, $email]);
    }

    public function getAllUsers()
    {
        return $this->db->query("SELECT * FROM users")->fetchAll();
    }

    // public function updateUserEmail($id)
    // {
    //     $stmt = $this->db->prepare("UPDATE users SET email = ? WHERE username = ?");
    //     return $stmt->execute([$newEmail, $username]);
    // }

    public function deleteUser($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
