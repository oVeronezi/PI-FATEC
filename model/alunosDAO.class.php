<?php
// AlunosDAO.class.php

// COMO OS ARQUIVOS ESTÃO NA MESMA PASTA (model), O CAMINHO É DIRETO:
require_once 'conexao.class.php';
require_once 'alunos.class.php'; // <-- Importante! Use 'Aluno.class.php' aqui.

class AlunosDAO extends Conexao
{

    // O método espera um objeto da classe 'Aluno'
    public function inserir(Aluno $aluno)
    {
        $sql = "INSERT INTO Alunos (nome, email, linkedin, github, semestre) VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->getDb()->prepare($sql);

        $stmt->execute([
            $aluno->getNome(),
            $aluno->getEmail(),
            $aluno->getLinkedin(),
            $aluno->getGithub(),
            $aluno->getSemestre()
        ]);
    }
}
?>