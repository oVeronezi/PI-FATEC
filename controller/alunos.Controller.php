<?php
// O caminho '../model/' supõe que o controller está em uma pasta como 'controller/'
require_once '../model/alunosDAO.class.php';
require_once '../model/alunos.class.php'; // Corrigido: nome da classe no singular

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Coleta os dados do formulário
    $nome = $_POST['nome_completo'] ?? '';
    $email = $_POST['email_institucional'] ?? '';
    $linkedin = $_POST['linkedin'] ?? '';
    $github = $_POST['github'] ?? '';
    // Converte o semestre para inteiro, para garantir o tipo correto
    $semestre = isset($_POST['semestre']) ? (int)$_POST['semestre'] : 0;

    // 2. Cria uma nova instância da classe Aluno com os dados do formulário
    // A ordem dos parâmetros agora corresponde ao novo construtor
    $aluno = new Aluno($nome, $email, $linkedin, $github, $semestre);

    // 3. Cria o DAO e chama o método para inserir o aluno no banco
    $alunosDAO = new AlunosDAO();
    $alunosDAO->inserir($aluno);

    // 4. Redireciona para uma página de sucesso
    header('Location: ../view/mensagem-aluno-cadastrado-enviado.php');
    exit;
}
?>