<?php
    require_once "model/Conexao.class.php";
    require_once "model/usuarioDAO.class.php";
    require_once "model/Usuarios.class.php";
   

    
    class usuarioController {
        public function login() {
            if($_POST)
            {
                
                $usuario = new Usuarios(email: $_POST['email'], senha: $_POST['senha']);
                $usuarioDAO = new usuarioDAO();
                $retorno = $usuarioDAO -> autenticacao($usuario);
                
                if(count($retorno) > 0)//encontrou usuario
                {
                   
                   die(); // Encerra o script
                }
                else
                {
                    echo "Usuário ou senha inválidos!";
                    header("Location: /login");
                    die(); // Encerra o script
            
                }
            }
            
        
    }
        // Fim do método login

        public function logout() {
            
            $_SESSION = array(); // Limpa a sessão
            session_destroy(); // Destroi a sessão
            header("Location:index.php");
            die(); // Encerra o script
        }// Fim do método logout
    }// Fim da classe usuarioController
?>