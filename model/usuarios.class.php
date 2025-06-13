<?php

/**
 * Classe base para todos os tipos de usuários do sistema.
 * Contém as propriedades e métodos comuns como id, nome, email e senha.
 */
class Usuarios
{
    // 1. Declaração das propriedades (variáveis) da classe
    // É uma boa prática declarar todas as propriedades com seu tipo e visibilidade (private).
    private ?int $id_usuario;
    private string $nome;
    private string $email;
    private ?string $senha;

    // A propriedade 'tipo' não está no construtor, mas o método getTipo() existe.
    // Vamos declará-la aqui e criar um setter para ela.
    private string $tipo;

    /**
     * Construtor da classe Usuarios.
     * É chamado quando um novo objeto é criado (ex: new Usuarios(...)).
     */
    public function __construct(
        ?int $id_usuario = null,
        string $nome = "",
        string $email = "",
        ?string $senha = null
    ) {
        // 2. Corpo do construtor
        // Atribui os valores recebidos nos parâmetros às propriedades da classe.
        $this->id_usuario = $id_usuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->tipo = ""; // Inicializa o tipo como vazio por padrão
    }

    // 3. Métodos Getters (para obter/ler os valores das propriedades)

    public function getId_usuario(): ?int
    {
        return $this->id_usuario;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    // 4. Métodos Setters (para definir/alterar os valores das propriedades)

    public function setId_usuario(?int $id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setSenha(?string $senha): void
    {
        $this->senha = $senha;
    }

    public function setTipo(string $tipo): void
    {
        $this->tipo = $tipo;
    }
} // Fim da classe Usuarios
?>