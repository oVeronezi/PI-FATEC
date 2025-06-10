<?php
session_start();



// Define o baseurl como vazio, já que está na raiz
$baseurl = '';

// Importa os controllers
require_once 'controller/usuarioController.php';
require_once 'controller/home.controller.php';


// Obtém a URI requisitada (ex: /home ou /)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove o baseurl da URI (não faz nada neste caso, pois é '')
if (strpos($uri, $baseurl) === 0) {
    $uri_limpa = substr($uri, strlen($baseurl));
} else {
    $uri_limpa = $uri;
}

// Trata a raiz da aplicação
if ($uri_limpa === '' || $uri_limpa === '/') {
    $uri_limpa = '/';
}

// Define as rotas
$routes = [
   

    '/' => function () {

        

        $controller = new HomeController();
        $controller->showHome();
    },
    '/home' => function () {
        require_once "view/home.php";
    },
    '/professores' => function () {
        require_once "view/professores.php";
    },
    '/projetos' => function () {
        require_once "view/projetos.php";
    },
    '/projetos-2' => function () {
        require_once "view/projetos-2.php";
    },
    '/projetos-3' => function () {
        require_once "view/projetos-3.php";
    },
    '/contato' => function () {
        require_once "view/contato.php";
    },
    '/formulario-contato' => function () {
        require_once "view/formulario-contato.php";
    },
    'mensagem-enviada' => function () {
        require_once "view/mensagem-enviada.php";
    },
    '/desenvolvedores' => function () {
        require_once "view/desenvolvedores.php";
    },
    '/login' => function () {
        
        require_once "view/login.php";
        $Controller = new usuarioController();
        $Controller -> login();
    },
    '/cadastro-aluno' => function () {
        require_once "view/cadastro-aluno.php";
    },
    '/cadastro-professor' => function () {
        require_once "view/cadastro-professor.php";
    },
    '/mensagem-aluno-cadastrado' => function () {
        // Rota para a view de mensagem de aluno cadastrado
        require_once "view/mensagem-aluno-cadastrado-enviado.php";
    },
    '/mensagem-professor-cadastrado' => function () {
        // Rota para a view de mensagem de professor cadastrado
        require_once "view/mensagem-cadastro-professor-enviada.php";
    },
    '/mensagem-cadastro-enviada' => function () {
        // Rota para a view de mensagem de cadastro genérica (se for diferente de mensagem-enviada.php)
        require_once "view/mensagem-cadastro-enviada.php";
    }

];

// Executa a rota
if (isset($routes[$uri_limpa])) {
    $routes[$uri_limpa]();
} else {
    http_response_code(404);
    echo "404 - Página não encontrada. Verifique o caminho.";
}
?>