<?php
abstract class Database
{
    protected $connection;

    public function __construct()
    {
        $host = "localhost"; 
        $user = "gabriel";
        $password = "123123w";
        $databaseName = "clinictrack";

        try {

            $pdo = new PDO("mysql:host=$host", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $pdo->exec("CREATE DATABASE IF NOT EXISTS $databaseName");
            $pdo = null;


            $this->connection = new PDO("mysql:host=$host;dbname=$databaseName", $user, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->createTables();
        } catch (PDOException $e) {
            die("Connection or database creation error: " . $e->getMessage());
        }
    }

    private function createTables()
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100),
                age INT,
                email VARCHAR(50) UNIQUE,
                password VARCHAR(255)
            );

            CREATE TABLE IF NOT EXISTS users_common (
                id_users_common BIGINT AUTO_INCREMENT PRIMARY KEY,
                user_id BIGINT,
                name VARCHAR(255) NOT NULL,
                cpf VARCHAR(11) NOT NULL,
                FOREIGN KEY (user_id) REFERENCES users(id_user)
            );

            CREATE TABLE IF NOT EXISTS users_company (
                id_users_company BIGINT AUTO_INCREMENT PRIMARY KEY,
                user_id BIGINT,
                corporate_name VARCHAR(255) NOT NULL,
                cnpj VARCHAR(14) NOT NULL,
                FOREIGN KEY (user_id) REFERENCES users(id_user)
            );

            CREATE TABLE IF NOT EXISTS orders (
                id_order BIGINT AUTO_INCREMENT PRIMAY KEY,
                date_order DATETIME DEFAULT CURRENT_TIMESTAMP,
                date_payment DATETIME DEFAULT CURRENT_TIMESTAMP,
                status_order ENUM('Pendente', 'Pago', 'Cancelado'),
                method_payment ENUM('Pix', 'Credito', 'Debito'),
            );
        ";

        $this->connection->exec($sql);
    }
}
?>