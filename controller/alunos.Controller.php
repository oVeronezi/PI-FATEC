<?php
// Arquivo: /controller/alunos.Controller.php

require_once '../model/alunosDAO.class.php';
require_once '../model/alunos.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Coleta os dados do formulário
    $nome = $_POST['nome_completo'] ?? '';
    $email = $_POST['email_institucional'] ?? '';
    // $senha foi removido
    $ra = $_POST['ra'] ?? '';
    $semestre = isset($_POST['semestre']) ? (int)$_POST['semestre'] : 0; // Adicionado de volta
    $linkedin = $_POST['linkedin'] ?? '';
    $github = $_POST['github'] ?? '';

    // Validação básica
    if (empty($nome) || empty($email) || empty($ra) || $semestre === 0) {
        die("Erro: Nome, email, RA e semestre são obrigatórios.");
    }

    // 2. Cria a instância de Aluno (sem senha, com semestre)
    $aluno = new Aluno($nome, $email, $ra, $semestre, $linkedin, $github);

    // 3. Cria o DAO e chama o método para inserir
    $alunosDAO = new AlunosDAO();
    if ($alunosDAO->inserir($aluno)) {
        header('Location: ../view/mensagem-aluno-cadastrado-enviado.php');
        exit;
    } else {
        die("Ocorreu um erro ao cadastrar o aluno. Verifique se o email ou RA já existem.");
    }
}
?>