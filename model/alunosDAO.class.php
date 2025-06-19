<?php
//require_once 'conexao.class.php';

class AlunosDAO extends Conexao {
    public function __construct() {
        parent::__construct();
    }

    public function listarAlunos() {
        $sql = "SELECT a.id_aluno, u.nome, a.ra 
                FROM Alunos a
                INNER JOIN Usuarios u ON a.id_aluno = u.id_usuario
                ORDER BY u.nome ASC";

        try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            return [];
        }
    }
}