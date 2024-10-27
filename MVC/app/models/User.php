<?php
class user{
    private $db;
    public function __construct($dbConnection)
    {
        $this->db=$dbConnection;
    }

    public function getUserById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users0044 WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function getAllUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM users0044");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getDeleteId($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users0044 WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getUpdateId($id, $name, $email)
{
    $stmt = $this->db->prepare("UPDATE users0044 SET `name` = :name, `email` = :email WHERE `id` = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
}
}


?>