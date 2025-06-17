<?php
require_once './conexao/Conexao.php';
require_once './model/Aluno.class.php';

class AlunosDAO extends Conexao {

    public function inserir(Alunos $aluno) {
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
