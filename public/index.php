<?php 
    //habilitando exibir os erros
    ini_set('display_errors', 1);

    include '../src/utils/Request.php';

    //$url = explode('?', $_SERVER['REQUEST_URI'])[0];
    $url = parse_url($_SERVER['REQUEST_URI']);

    // PHP 8 >
    $view = match ($url['path']) {
        '/' => 'pages/login',
        '/dashboard' => 'pages/home',
        '/cadastro' => 'pages/usuario/add',

        '/contatos/cadastro' => 'pages/contato/add',
        '/contatos/listar' => 'pages/contato/list',
        '/contatos/excluir' => 'pages/contato/delete',
        '/contatos/editar' => 'pages/contato/edit',
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
