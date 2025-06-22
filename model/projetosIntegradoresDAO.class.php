<?php
require_once 'conexao.class.php';

class ProjetosIntegradoresDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    // Lista projetos filtrando pelo semestre
public function listarPorSemestre($semestre)
{
    $sql = "SELECT * FROM ProjetosIntegradores WHERE semestre = :semestre";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(':semestre', $semestre, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}


    // Lista os alunos de um projeto específico
    public function listarAlunosDoProjeto($idProjeto)
    {
        $sql = "SELECT u.nome, u.email, a.github, a.linkedin
                FROM Aluno_Projeto ap
                JOIN Alunos a ON ap.id_aluno = a.id_aluno
                JOIN Usuarios u ON a.id_aluno = u.id_usuario
                WHERE ap.id_projeto = :idProjeto";

        try {
            $stm = $this->db->prepare($sql);
            $stm->bindParam(':idProjeto', $idProjeto, PDO::PARAM_INT);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return [];
        } finally {
            $this->db = null;
        }
    }
}
