<?php 

class PiDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }

    public function listarPorSemestre($semestre) {
        $sql = "SELECT * FROM ProjetosIntegradores WHERE semestre = :semestre";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':semestre' => $semestre]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function listarAlunosDoProjeto($idProjeto) {
        $sql = "SELECT u.nome, a.github 
                FROM Aluno_Projeto ap
                JOIN Alunos a ON ap.id_aluno = a.id_aluno
                JOIN Usuarios u ON a.id_aluno = u.id_usuario
                WHERE ap.id_projeto = :idProjeto";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':idProjeto' => $idProjeto]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
