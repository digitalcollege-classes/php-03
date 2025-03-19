<?php 
    $url = $_SERVER['REQUEST_URI'];

    // PHP 8 >
    $view = match ($url) {
        '/' => 'pages/home',
        '/cadastro' => 'pages/add',
        '/listar' => 'pages/list',
        default => 'pages/notFound',
    };

    render($view); 

    function render(string $view): void
    {
        include '../src/components/head.phtml';
        include '../src/components/menu.phtml';
        include "../src/{$view}.phtml";
        include '../src/components/footer.phtml';
    }
?>
