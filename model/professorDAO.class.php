<?php
require_once 'conexao.class.php';
class ProfessorDAO extends Conexao

{
    public function deletarProfessor(int $id): bool
    {
        try {
            $this->db->beginTransaction();

            // Primeiro exclui da tabela Professores
            $sql_prof = "DELETE FROM Professores WHERE id_professor = ?";
            $stmt_prof = $this->db->prepare($sql_prof);
            $stmt_prof->execute([$id]);

            // Depois exclui da tabela Usuarios
            $sql_user = "DELETE FROM Usuarios WHERE id_usuario = ?";
            $stmt_user = $this->db->prepare($sql_user);
            $stmt_user->execute([$id]);

            $this->db->commit();
            return true;
        } catch (PDOException $e) {
            $this->db->rollBack();
            error_log("Erro ao excluir professor: " . $e->getMessage());
            return false;
        }
    }
}
