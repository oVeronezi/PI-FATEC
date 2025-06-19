<?php
require_once 'conexao.class.php';

class ProjetosIntegradoresDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }

    public function inserirProjeto($nome, $link, $semestre, $alunos = []) {
        try {
            $this->db->beginTransaction();

            // Inserir projeto
            $sql = "INSERT INTO ProjetosIntegradores (nome, link_github, semestre) VALUES (:nome, :link, :semestre)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                ':nome' => $nome,
                ':link' => $link,
                ':semestre' => $semestre
            ]);
            $idProjeto = $this->db->lastInsertId();

            // Relacionar projeto e alunos
            $stmtAlunoProjeto = $this->db->prepare("INSERT INTO Aluno_Projeto (id_aluno, id_projeto) VALUES (:id_aluno, :id_projeto)");
            foreach ($alunos as $idAluno) {
                $stmtAlunoProjeto->execute([
                    ':id_aluno' => $idAluno,
                    ':id_projeto' => $idProjeto
                ]);
            }

            $this->db->commit();
            return true;

        } catch (PDOException $e) {
            $this->db->rollBack();
            error_log("Erro PI: " . $e->getMessage());
            return false;
        }
    }

    // Listar projetos por semestre
    public function listarPorSemestre($semestre) {
        $sql = "SELECT * FROM ProjetosIntegradores WHERE semestre = :semestre";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':semestre' => $semestre]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    // Listar alunos de um projeto
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
