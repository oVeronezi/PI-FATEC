<?php
require_once 'db.php';
class UserDAO extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function register($user)
    {
        $sql = "INSERT INTO users (name, age, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);

        $stmt->bindValue(1, $user->getName());
        $stmt->bindValue(2, $user->getAge());
        $stmt->bindValue(3, $user->getEmail());
        $stmt->bindValue(4, password_hash($user->getPassword(), PASSWORD_DEFAULT));

        $stmt->execute();

        return "User registered successfully!";
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user; 
        }

        return null; 
    }
}
?>