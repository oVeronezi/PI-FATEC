<?php
     class Usuarios{
        public function __construct(private int $id_usuario = 0, 
                                    private string $nome = "", 
                                    private string $email = "", 
                                    private string $senha = "", 
                                    private string $tipo = "") {}

        public function getId_usuario() {
            return $this->id_usuario;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function getTipo() {
            return $this->tipo;
        }
    }// End of Usuarios class
?>