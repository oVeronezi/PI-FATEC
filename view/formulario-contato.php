<!DOCTYPE html>
<html class="h-full bg-white" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body class="bg-gray-50">

    <div class="flex justify-center items-center min-h-screen bg-gray-100 py-8">
        <div class="max-w-3xl w-full bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Entre em Contato</h2>

            <form method="POST" action="/enviar-contato">
                <div class="mb-4">
                    <label for="nome" class="block text-gray-700 font-medium">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">E-mail</label>
                    <input type="email" id="email" name="email" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600">
                </div>

                <div class="mb-4">
                    <label for="assunto" class="block text-gray-700 font-medium">Assunto</label>
                    <input type="text" id="assunto" name="assunto" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 ring-purple-600">
                </div>

                <div class="mb-4">
                    <label for="mensagem" class="block text-gray-700 font-medium">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" rows="5" required
                        class="w-full mt-2 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                </div>

                <div class="mb-4 text-center">
                    <button type="submit" class="bg-purple-700 p-2 pr-10 pl-10 rounded-md text-white font-bold hover:bg-purple-600">Enviar Mensagem</button>
                </div>

                <div class="text-center">
                    <a href="/contato" class="text-black font-bold hover:text-purple-600">Voltar</a>
                </div>

            </form>

        </div>
    </div>

</body>
</html>