<?php
class Disciplina
{
    public function __construct(
        private int $id_disciplinas = 0,
        private string $nome = "",
        private Professor $professor,
        private string $sobre = "",
        private string $semestre = "",
        private string $curso = "",
        private string $ementa = "",
        private string $objetivos = "",
        private string $bibliografia = ""
    ) {}

    public function getIdDisciplinas(): int
    {
        return $this->id_disciplinas;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getProfessor(): Professor
    {
        return $this->professor;
    }

    public function getSobre(): string
    {
        return $this->sobre;
    }

    public function getSemestre(): string
    {
        return $this->semestre;
    }

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function getEmenta(): string
    {
        return $this->ementa;
    }

    public function getObjetivos(): string
    {
        return $this->objetivos;
    }

    public function getBibliografia(): string
    {
        return $this->bibliografia;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setProfessor(Professor $professor): void
    {
        $this->professor = $professor;
    }

    public function setSobre(string $sobre): void
    {
        $this->sobre = $sobre;
    }

    public function setSemestre(string $semestre): void
    {
        $this->semestre = $semestre;
    }

    public function setCurso(string $curso): void
    {
        $this->curso = $curso;
    }

    public function setEmenta(string $ementa): void
    {
        $this->ementa = $ementa;
    }

    public function setObjetivos(string $objetivos): void
    {
        $this->objetivos = $objetivos;
    }

    public function setBibliografia(string $bibliografia): void
    {
        $this->bibliografia = $bibliografia;
    }

    public function atualizarDisciplinas(): void {}
}
