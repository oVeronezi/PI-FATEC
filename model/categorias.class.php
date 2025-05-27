<?php

class Categorias
{
    public function __construct(
        private int $id_categoria = 0,
        private string $nome = ""
    ) {}

    public function getIdCategoria(): int
    {
        return $this->id_categoria;
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }


    public function atualizarCategoria(): void {}
}
