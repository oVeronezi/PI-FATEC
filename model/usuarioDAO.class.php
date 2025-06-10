<?php
    class usuarioDAO extends Conexao{
        public function __construct(){
            parent:: __construct();
        }

        public function autenticacao($usuario){
            $sql = "SELECT * FROM Usuarios WHERE email = ? AND senha = ?";
            try {
                $stm = $this -> db -> prepare($sql);
                $stm -> bindValue(1, $usuario -> getEmail());
                $stm -> bindValue(2, $usuario -> getSenha());
                $stm -> execute();
                $this -> db = null; // Fecha a conexão com o banco de dados
                return $stm -> fetchAll(PDO::FETCH_OBJ);
            }

            catch (PDOException $e) {
                $this -> db = null; // Fecha a conexão com o banco de dados
                return[];
            }
        }
    }
?>