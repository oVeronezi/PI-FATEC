<?php
// Arquivo: /controller/cadastroPI.controller.php

// ✅ PADRONIZAÇÃO: Incluindo o arquivo com o mesmo nome da classe.
require_once '../model/ProjetosIntegradoresDAO.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Coleta de dados
    $nomeProjeto = trim($_POST['nome_projeto']);
    $descricaoProjeto = trim($_POST['descricao_projeto']);
    $linkProjeto = trim($_POST['link_projeto']);
    $semestre = (int)($_POST['semestre'] ?? 0);
    $alunosSelecionados = $_POST['alunos_projeto'] ?? [];

    // 2. Upload da Imagem (Sua lógica, que está ótima!)
    $caminhoCompleto = '';
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $pastaDestino = '../img/'; // Usando a pasta que você definiu

        // Garante que a pasta exista
        if (!is_dir($pastaDestino)) {
            mkdir($pastaDestino, 0777, true);
        }

        $nomeOriginal = basename($_FILES['foto']['name']);
        $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));
        $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];

        if (!in_array($extensao, $extensoesPermitidas)) {
            die("Erro: Formato de imagem não permitido.");
        }

        $nomeArquivo = 'pi_' . uniqid() . '.' . $extensao;
        $caminhoCompleto = $pastaDestino . $nomeArquivo;

        if (!move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
            die("Erro: Falha ao fazer upload da imagem.");
        }
    } else {
        die("Erro: Nenhuma imagem enviada ou erro no envio.");
    }

    // 3. Comunicação com o DAO
    // ✅ PADRONIZAÇÃO: Instanciando a classe com o nome correto.
    $projetosDAO = new ProjetosIntegradoresDAO();
    $sucesso = $projetosDAO->inserirProjeto($nomeProjeto, $descricaoProjeto, $linkProjeto, $semestre, $caminhoCompleto, $alunosSelecionados);

    // 4. Redirecionamento
    if ($sucesso) {
        header("Location: ../view/mensagem-pi-cadastrado.php");
        exit;
    } else {
        die('Erro ao cadastrar o projeto.');
    }
}
?>