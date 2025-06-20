<?php

class ProjetosIntegradores
{
    public function __construct(
        private int $id_projetos = 0,
        private string $nome = "",
        private array $alunos = [],
        private string $curso = "",
        private string $semestre = "",
        private array $disciplinas = []
    ) {}

    public function getIdProjetos(): int
    {
        return $this->id_projetos;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAlunos(): array
    {
        return $this->alunos;
    }

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function getSemestre(): string
    {
        return $this->semestre;
    }

    public function getDisciplinas(): array
    {
        return $this->disciplinas;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setAlunos(array $alunos): void
    {
        $this->alunos = $alunos;
    }

    public function setCurso(string $curso): void
    {
        $this->curso = $curso;
    }

    public function setSemestre(string $semestre): void
    {
        $this->semestre = $semestre;
    }

    public function setDisciplinas(array $disciplinas): void
    {
        $this->disciplinas = $disciplinas;
    }

    public function atualizarPI(): void {}
}
