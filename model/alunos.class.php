<?php
// É importante garantir que o arquivo da classe pai seja incluído.
// O caminho pode precisar de ajuste dependendo da sua estrutura de pastas.
require_once 'Usuarios.class.php';

class Aluno extends Usuarios
{
    // Propriedades específicas do Aluno
    private string $linkedin;
    private string $github;
    private int $semestre;

    // Propriedades que podem ou não ser usadas agora, mas fazem parte da classe
    private int $id_alunos;
    private int $RA;

    public function __construct(
        string $nome = "",
        string $email = "",
        string $linkedin = "",
        string $github = "",
        int $semestre = 0
    ) {
        // 1. Chama o construtor da classe pai (Usuarios) para definir nome e email
        parent::__construct(0, $nome, $email, ""); // Passamos IDs e senha vazios por enquanto

        // 2. Define as propriedades específicas desta classe (Aluno)
        $this->linkedin = $linkedin;
        $this->github = $github;
        $this->semestre = $semestre;
    }

    // Getters e Setters continuam os mesmos...

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

    public function getSemestre(): int
    {
        return $this->semestre;
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

    public function setSemestre(int $semestre): void
    {
        $this->semestre = $semestre;
    }
}
?>