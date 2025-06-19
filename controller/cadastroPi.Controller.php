<?php
require_once '../model/cadastroPiDAO.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeProjeto = trim($_POST['nome_projeto']);
    $linkProjeto = trim($_POST['link_projeto']);
    $semestre = trim($_POST['semestre']);
    $alunosSelecionados = $_POST['alunos_projeto'] ?? [];

    $projetosDAO = new ProjetosIntegradoresDAO();

    if ($projetosDAO->inserirProjeto($nomeProjeto, $linkProjeto, $semestre, $alunosSelecionados)) {
        header("Location: ../view/mensagem-pi-cadastrado.php");
        exit;
    } else {
        die('Erro ao cadastrar o projeto.');
    }
}
