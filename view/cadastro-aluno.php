<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>


<body class="bg-gray-50">
    <div class="flex justify-center items-center min-h-screen bg-gray-100 py-8">
        <div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Cadastro de Alunos</h2>

            <form action="../controller/alunos.Controller.php" method="POST">
                <div class="mb-4">
                    <label for="nome_completo" class="block text-gray-700 font-medium">Nome Completo</label>
                    <input type="text" id="nome_completo" name="nome_completo" required
                        placeholder="Digite seu nome completo"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <div class="mb-4">
                    <label for="email_institucional" class="block text-gray-700 font-medium">E-mail Institucional</label>
                    <input type="email" id="email_institucional" name="email_institucional" required
                        placeholder="Digite seu e-mail institucional"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <div class="mb-4">
                    <label for="ra" class="block text-gray-700 font-medium">RA (Registro do Aluno)</label>
                    <input type="text" id="ra" name="ra" required
                        placeholder="Digite seu RA"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <div class="mb-4">
                    <label for="semestre" class="block text-gray-700 font-medium">Semestre</label>
                    <select name="semestre" id="semestre" required class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600">
                        <option value="" disabled selected>Selecione o semestre</option>
                        <option value="1">1° semestre</option>
                        <option value="2">2° semestre</option>
                        <option value="3">3° semestre</option>
                        <option value="4">4° semestre</option>
                        <option value="5">5° semestre</option>
                        <option value="6">6° semestre</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="linkedin" class="block text-gray-700 font-medium">LinkedIn</label>
                    <input type="url" id="linkedin" name="linkedin"
                        placeholder="https://linkedin.com/in/seu-usuario"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <div class="mb-4">
                    <label for="github" class="block text-gray-700 font-medium">GitHub</label>
                    <input type="url" id="github" name="github"
                        placeholder="https://github.com/seu-usuario"
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600 placeholder:text-gray-500">
                </div>

                <div class="mb-4 text-center">
                    <button type="submit" class="w-full bg-purple-600 text-white p-3 rounded-md hover:bg-purple-700">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</body>


</html>