<?php

class ProfessoresDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listarProfessores()
    {
        $sql = "SELECT u.id_usuario, u.nome, u.email, p.linkedin, p.lattes, p.foto_url ,p.disciplina
        FROM Usuarios u
        JOIN Professores p ON u.id_usuario = p.id_professor;";

        try {
            $stm = $this->db->prepare($sql);
            $stm->execute();
            $this->db = null; // Fecha a conexão
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            $this->db = null;
            return [];
        }
    }
}
?>
