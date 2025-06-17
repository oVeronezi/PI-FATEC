<?php

class Professor extends Usuarios
{
    public function __construct(
        string $idUsuario = "",
        string $nome = "",
        string $email = "",
        string $senha = "",
        private int $id_professores = 0,
        private string $lattes = ""
    ) {
        parent::__construct($idUsuario, $nome, $email, $senha);
    }

    public function getIdProfessores(): int
    {
        return $this->id_professores;
    }

    public function getLattes(): string
    {
        return $this->lattes;
    }

    public function setLattes(string $lattes): void
    {
        $this->lattes = $lattes;
    }

}
