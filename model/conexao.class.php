<?php
abstract class Conexao {
    protected $db = null;

    public function __construct() {
        $parametros = "mysql:host=db;dbname=dbdsm;charset=utf8mb4";

            try{
                $this -> db = new PDO($parametros, "root", "1234");
                
            }

            catch (PDOException $e){
                die("Erro ao conectar com o banco de dados: " . $e->getMessage() . $e->getCode());
            }
        }
    }

    // 👉 Método para acessar a conexão em outras classes (ex.: DAO)
    public function getDb() {
        return $this->db;
    }
}
?>
