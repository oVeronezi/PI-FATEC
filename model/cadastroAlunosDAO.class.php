<?php
// Arquivo: /model/AlunosDAO.class.php

require_once 'conexao.class.php';
require_once 'alunos.class.php';

class cadastroAlunosDAO extends Conexao {

    public function inserir(Aluno $aluno): bool
    {
        $this->getDb()->beginTransaction();

        try {
            // 1. INSERIR NA TABELA Usuarios (sem senha)
            // A coluna 'senha' receberá o valor padrão do banco de dados (NULL)
            $sql_usuario = "INSERT INTO Usuarios (nome, email) VALUES (?, ?)";
            $stmt_usuario = $this->getDb()->prepare($sql_usuario);
            $stmt_usuario->execute([
                $aluno->getNome(),
                $aluno->getEmail()
            ]);

            // 2. PEGAR O ID DO USUÁRIO
            $idUsuario = $this->getDb()->lastInsertId();

            // 3. INSERIR NA TABELA Alunos (com semestre)
            $sql_aluno = "INSERT INTO Alunos (id_aluno, ra, github, linkedin, semestre) VALUES (?, ?, ?, ?, ?)";
            $stmt_aluno = $this->getDb()->prepare($sql_aluno);
            $stmt_aluno->execute([
                $idUsuario,
                $aluno->getRa(),
                $aluno->getGithub(),
                $aluno->getLinkedin(),
                $aluno->getSemestre() // Adicionado
            ]);

            $this->getDb()->commit();
            return true;

        } catch (PDOException $e) {
            $this->getDb()->rollBack();
            error_log("Erro ao inserir aluno: " . $e->getMessage());
            return false;
        }
    }
}