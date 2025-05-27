<?php

class Alunos extends Usuario
{
    public function __construct(
        string $idUsuario = "",
        string $nome = "",
        string $email = "",
        string $senha = "",
        private int $id_alunos = 0,
        private int $RA = 0,
        private string $github = "",
        private string $linkedin = ""
    ) {
        parent::__construct($idUsuario, $nome, $email, $senha);
    }

    public function getIdAlunos(): int
    {
        return $this->id_alunos;
    }

    public function getRA(): int
    {
        return $this->RA;
    }

    public function getGithub(): string
    {
        return $this->github;
    }

    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

    public function setRA(int $RA): void
    {
        $this->RA = $RA;
    }

    public function setGithub(string $github): void
    {
        $this->github = $github;
    }

    public function setLinkedin(string $linkedin): void
    {
        $this->linkedin = $linkedin;
    }
}
