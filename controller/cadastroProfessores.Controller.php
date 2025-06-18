<?php 
require_once '../model/cadastroProfessorDAO.class.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome_completo'] ?? '');
    $email = trim($_POST['email_institucional'] ?? '');
    $linkedin = trim($_POST['linkedin'] ?? '');
    $lattes = trim($_POST['codigo_lattes'] ?? '');
    $disciplina = trim($_POST['disciplina'] ?? '');

    // Validação básica
    if (empty($nome) || empty($email) || empty($linkedin) || empty($lattes) || empty($disciplina)) {
        die("Erro: Todos os campos são obrigatórios.");
    }

    // ================= UPLOAD DA FOTO =================
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        $pastaDestino = '../img/';
        $nomeOriginal = basename($_FILES['foto']['name']);
        $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));
        $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];

        // Verifica extensão válida
        if (!in_array($extensao, $extensoesPermitidas)) {
            die("Erro: Formato de imagem não permitido. Use jpg, jpeg, png ou gif.");
        }

        // Nome único para evitar sobrescrever arquivos
        $nomeArquivo = uniqid('prof_', true) . '.' . $extensao;
        $caminhoCompleto = $pastaDestino . $nomeArquivo;

        // Faz o upload
        if (!move_uploaded_file($_FILES['foto']['tmp_name'], $caminhoCompleto)) {
            die("Erro: Falha ao fazer upload da imagem.");
        }
    } else {
        die("Erro: Nenhuma imagem enviada ou erro no envio.");
    }

    // ================= CADASTRO NO BANCO =================
    $professoresDAO = new CadastroProfessoresDAO();
    if ($professoresDAO->inserirProfessor($nome, $email, $linkedin, $lattes, $disciplina, $caminhoCompleto)) {
        header('Location: ../view/mensagem-cadastro-professor-enviada.php');
        exit;
    } else {
        die("Erro ao cadastrar o professor no banco.");
    }
}