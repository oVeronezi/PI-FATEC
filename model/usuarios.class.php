<?php
abstract class Usuario
{
    public function __construct(
        protected int $id_usuarios = 0,
        protected string $nome = "",
        protected string $email = "",
        protected string $senha = ""
    ) {}

    public function getIdUsuarios(): int
    {
        return $this->id_usuarios;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function validarSenha(string $senhaDigitada): bool
    {
        return $this->senha === $senhaDigitada;
    }

    public function editarSenha(string $novaSenha): void
    {
        $this->senha = $novaSenha;
    }

    public function cadastrarProfessores(): void {}
    public function cadastrarAlunos(): void {}
    public function cadastrarPI(): void {}
}
