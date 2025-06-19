<?php
require_once './model/alunosDAO.class.php';
$alunosDAO = new AlunosDAO();
$alunos = $alunosDAO->listarAlunos();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Projetos Integradores</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <div class="flex justify-center items-center min-h-screen bg-gray-100 py-8">
        <div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Cadastro de Projetos Integradores</h2>

            <!-- ⚠️ enctype CORRIGIDO para envio de arquivo -->
            <form action="../controller/cadastroPI.controller.php" method="POST" enctype="multipart/form-data">

                <!-- Nome Do Projeto -->
                <div class="mb-4">
                    <label for="nome_projeto" class="block text-gray-700 font-medium">Nome Do Projeto</label>
                    <input type="text" id="nome_projeto" name="nome_projeto" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:ring-2 ring-purple-600">
                </div>

                <!-- Descrição Do Projeto -->
                <div class="mb-4">
                    <label for="descricao_projeto" class="block text-gray-700 font-medium">Descrição</label>
                    <textarea id="descricao_projeto" name="descricao_projeto" required rows="4"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:ring-2 ring-purple-600"></textarea>
                </div>

                <!-- Link no Github -->
                <div class="mb-4">
                    <label for="link_projeto" class="block text-gray-700 font-medium">Link Do Projeto no GitHub</label>
                    <input type="url" id="link_projeto" name="link_projeto" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:ring-2 ring-purple-600">
                </div>

                <!-- Alunos no projeto -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Alunos no Projeto</label>
                    <select name="alunos_projeto[]" multiple required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:ring-2 ring-purple-600 h-40">
                        <?php foreach ($alunos as $aluno): ?>
                            <option value="<?= $aluno->id_aluno ?>"><?= htmlspecialchars($aluno->nome) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Semestre -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Semestre</label>
                    <select name="semestre" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:ring-2 ring-purple-600">
                        <option disabled selected value="">Selecione o semestre</option>
                        <option value="1">1º Semestre</option>
                        <option value="2">2º Semestre</option>
                        <option value="3">3º Semestre</option>
                        <option value="4">4º Semestre</option>
                        <option value="5">5º Semestre</option>
                        <option value="6">6º Semestre</option>
                    </select>
                </div>

                <!-- Upload da Imagem -->
                <div class="mb-4">
                    <label for="foto" class="block text-gray-700 font-medium">Foto do Projeto</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600">
                </div>

                <div class="mb-4 text-center">
                    <button type="submit"
                        class="bg-purple-700 px-10 py-2 rounded-md text-white font-bold hover:bg-purple-600">
                        Cadastrar
                    </button>
                </div>

                <div class="text-center">
                    <a href="../home.php" class="text-black font-bold hover:text-purple-600">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
