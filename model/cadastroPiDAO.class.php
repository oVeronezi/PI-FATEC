<?php 
require_once 'conexao.class.php';

class ProjetosIntegradoresDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }

    public function inserirProjeto($nome, $descricao, $link, $semestre, $fotoUrl, $alunos = []) {
        try {
            $this->db->beginTransaction();

            // ⚠ Nome do campo correto: foto_url
            $sql = "INSERT INTO ProjetosIntegradores (nome, descricao, link_github, semestre, foto_url) 
                    VALUES (:nome, :descricao, :link, :semestre, :foto)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                ':nome' => $nome,
                ':descricao' => $descricao,
                ':link' => $link,
                ':semestre' => $semestre,
                ':foto' => $fotoUrl
            ]);
            $idProjeto = $this->db->lastInsertId();

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
            die("Erro PDO: " . $e->getMessage());
        }
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
