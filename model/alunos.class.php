<?php
// Arquivo: /model/Aluno.class.php

require_once 'usuarios.class.php';

class Aluno extends Usuarios
{
    private string $ra;
    private int $semestre; // Adicionado de volta
    private string $github;
    private string $linkedin;

    public function __construct(
        string $nome = "",
        string $email = "",
        string $ra = "",
        int $semestre = 0, // Adicionado de volta
        string $linkedin = "",
        string $github = ""
    ) {
        // Agora não passamos mais a senha para o construtor pai
        parent::__construct(0, $nome, $email, null); // Enviando null para a senha

        // Definimos as propriedades específicas do Aluno
        $this->ra = $ra;
        $this->semestre = $semestre; // Adicionado de volta
        $this->linkedin = $linkedin;
        $this->github = $github;
    }

    // Getters
    public function getRa(): string
    {
        return $this->ra;
    }
    public function getSemestre(): int
    {
        return $this->semestre;
    } // Adicionado de volta
    public function getGithub(): string
    {
        return $this->github;
    }
    public function getLinkedin(): string
    {
        return $this->linkedin;
    }
}
?>