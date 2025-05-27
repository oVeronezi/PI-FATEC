<?php

class Admin extends Usuario
{
    public function __construct(
        string $idUsuario = "",
        string $nome = "",
        string $email = "",
        string $senha = "",
        private int $id_admins = 0
    ) {
        parent::__construct($idUsuario, $nome, $email, $senha);
    }

    public function getIdAdmins(): int
    {
        return $this->id_admins;
    }

    public function setIdAdmins(int $id_admins): void
    {
        $this->id_admins = $id_admins;
    }

    public function cadastrarProfessores(): void {}

    public function cadastrarAlunos(): void {}

    public function cadastrarPI(): void {}
}
