<?php
session_start();

require_once '../PI-FATEC/controller/user.controller.php';
require_once '../PI-FATEC/controller/home.Controller.php';

// Obtém a URI completa que o navegador requisitou (ex: /PI-FATEC/home)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// ATENÇÃO: Esta é a chave!
// O $baseurl DEVE ser o nome da pasta em que seu projeto está dentro do htdocs.
// Se sua pasta é 'PI-FATEC', então:
$baseurl = "/PI-FATEC";

// Lógica para "limpar" a URI, removendo o caminho base (o nome da pasta)
if (strpos($uri, $baseurl) === 0) {
    $uri_limpa = substr($uri, strlen($baseurl));
} else {
    // Se, por algum motivo, o baseurl não estiver na URI (ex: em um servidor de produção na raiz),
    // a URI limpa será a própria URI.
    $uri_limpa = $uri;
}

// Se a URI limpa for uma string vazia (ex: acessou apenas http://localhost/PI-FATEC/),
// tratamos ela como a raiz da aplicação.
if ($uri_limpa === '') {
    $uri_limpa = '/';
}


$routes = [
    // A rota para a página inicial (ex: http://localhost/PI-FATEC/)
    "/" => function () {
        $controller = new HomeController();
        $controller->showHome();
    },

    // A rota para /home (ex: http://localhost/PI-FATEC/home)
    '/home' => function () {
        if (!isset($_SESSION['user'])) {
            // Redireciona para a página de login, usando o baseurl para o caminho correto
            // header('Location: ' . $baseurl . '/login');
            exit;
        }
        $controller = new HomeController();
        $controller->showHome();
    },

    // A rota para /p (ex: http://localhost/PI-FATEC/p)
    "/p" => function () {
        // require_once 'view/professores.php';
        echo "entrou laele";
    }
];

// O roteador agora verifica a $uri_limpa
if (isset($routes[$uri_limpa])) {
    $routes[$uri_limpa]();
} else {
    http_response_code(404);
    echo "404 - Página não encontrada. Verifique o caminho.";
}
?>