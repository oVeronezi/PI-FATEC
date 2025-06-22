<?php
// ✅ CORREÇÃO: A linha abaixo foi removida, pois o erro prova 
// que o arquivo de conexão já foi incluído por um script anterior.
// require_once 'conexao.class.php';

class PiDAO extends Conexao
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Lista todos os projetos integradores de um determinado semestre.
     */
    public function listarPorSemestre($semestre)
    {
        $sql = "SELECT * FROM ProjetosIntegradores WHERE semestre = :semestre";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':semestre', $semestre, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Lista os nomes e githubs dos alunos participantes de um projeto específico.
     */
    public function listarAlunosDoProjeto($idProjeto)
    {
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
