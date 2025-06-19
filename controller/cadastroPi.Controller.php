<?php
require_once '../model/cadastroPiDAO.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dados do formulário
    $nomeProjeto = trim($_POST['nome_projeto']);
    $descricaoProjeto = trim($_POST['descricao_projeto']);
    $linkProjeto = trim($_POST['link_projeto']);
    $semestre = trim($_POST['semestre']);
    $alunosSelecionados = $_POST['alunos_projeto'] ?? [];

    // ========== UPLOAD DA IMAGEM ==========
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $pastaDestino = '../img/';
        $nomeOriginal = basename($_FILES['foto']['name']);
        $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));
        $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($extensao, $extensoesPermitidas)) {
            die("Erro: Formato de imagem não permitido. Use jpg, jpeg, png ou gif.");
        }

        $nomeArquivo = uniqid('pi_', true) . '.' . $extensao;
        $caminhoCompleto = $pastaDestino . $nomeArquivo;

        if (!move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
            die("Erro: Falha ao fazer upload da imagem.");
        }
    } else {
        die("Erro: Nenhuma imagem enviada ou erro no envio.");
    }

    // Instancia DAO e insere projeto
    $projetosDAO = new ProjetosIntegradoresDAO();

    if ($projetosDAO->inserirProjeto($nomeProjeto, $descricaoProjeto, $linkProjeto, $semestre, $caminhoCompleto, $alunosSelecionados)) {
        header("Location: ../view/mensagem-pi-cadastrado.php");
        exit;
    } else {
        die('Erro ao cadastrar o projeto.');
    }
}
