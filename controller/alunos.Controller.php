<?php
require_once '../model/AlunosDAO.class.php';
require_once '../model/Aluno.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome_completo'] ?? '';
    $email = $_POST['email_institucional'] ?? '';
    $linkedin = $_POST['linkedin'] ?? '';
    $github = $_POST['github'] ?? '';
    $semestre = $_POST['semestre'] ?? '';

    $aluno = new Alunos($nome, $email, $linkedin, $github, $semestre);
    $alunosDAO = new AlunosDAO();
    $alunosDAO->inserir($aluno);

    header('Location: ../view/mensagem-aluno-cadastrado-enviado.php');
    exit;
}