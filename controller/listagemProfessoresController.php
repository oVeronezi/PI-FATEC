<?php
require_once '../model/professorDAO.class.php';

$dao = new ProfessorDAO();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['deletar'])) {
    $id = (int)($_POST['id_professor'] ?? 0);

    if ($id > 0) {
        if ($dao->deletarProfessor($id)) {
            header("Location: ../view/professores.php"); // volta para a listagem
            exit;
        } else {
            die("Erro ao excluir o professor.");
        }
    } else {
        die("ID inválido.");
    }
}
?>
