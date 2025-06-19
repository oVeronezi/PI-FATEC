<?php

require_once '../model/cadastroAlunosDAO.class.php';
require_once '../model/alunos.class.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = trim($_POST['nome_completo'] ?? '');
    $email = trim($_POST['email_institucional'] ?? '');
    $ra = trim($_POST['ra'] ?? '');
    $semestre = isset($_POST['semestre']) ? (int)$_POST['semestre'] : 0;
    $linkedin = trim($_POST['linkedin'] ?? '');
    $github = trim($_POST['github'] ?? '');

    // Validação básica
    if (empty($nome) || empty($email) || empty($ra) || $semestre === 0) {
        die("Erro: Nome, email, RA e semestre são obrigatórios.");
    }

    // Instância do objeto Aluno
    $aluno = new Aluno($nome, $email, $ra, $semestre, $linkedin, $github);

    // Inserção no banco
    $alunosDAO = new CadastroAlunosDAO();
    if ($alunosDAO->inserir($aluno)) {
        header('Location: ../view/mensagem-aluno-cadastrado-enviado.php');
        exit;
    } else {
        die("Erro desconhecido ao cadastrar o aluno."); // Isso só acontece se o método não lançar exception nem retornar true.
    }
}
