<?php 

 require_once 'conexao.class.php';

class CadastroProfessoresDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }
 
    public function inserirProfessor($nome, $email, $linkedin, $lattes, $disciplina, $foto_url)
    {
        try {
            // Inicia transação
            $this->db->beginTransaction();

            // Inserção na tabela Usuarios
            $sqlUsuario = "INSERT INTO Usuarios (nome, email, ultimo_acesso, data_cadastro) 
                       VALUES (:nome, :email, NOW(), NOW())";
            $stmtUsuario = $this->db->prepare($sqlUsuario);
            $stmtUsuario->bindParam(':nome', $nome);
            $stmtUsuario->bindParam(':email', $email);
            $stmtUsuario->execute();

            $idUsuario = $this->db->lastInsertId();

            // Inserção na tabela Professores
            $sqlProfessor = "INSERT INTO Professores (id_professor, linkedin, lattes, foto_url, disciplina)
                         VALUES (:id_professor, :linkedin, :lattes, :foto_url, :disciplina)";
            $stmtProfessor = $this->db->prepare($sqlProfessor);
            $stmtProfessor->bindParam(':id_professor', $idUsuario);
            $stmtProfessor->bindParam(':linkedin', $linkedin);
            $stmtProfessor->bindParam(':lattes', $lattes);
            $stmtProfessor->bindParam(':foto_url', $foto_url);
            $stmtProfessor->bindParam(':disciplina', $disciplina);
            $stmtProfessor->execute();

            $this->db->commit(); // Confirma a transação
            $this->db = null; // Fecha a conexão
            return true;
        } catch (PDOException $e) {
            $this->db->rollBack(); // Desfaz a transação se ocorrer erro
            $this->db = null;
            return false;
        }
    }
}