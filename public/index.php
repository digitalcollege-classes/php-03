<?php 
    render('components/menu');

    $url = $_SERVER['REQUEST_URI'];

    if ($url === '/') {
        render('pages/home');
    } else if($url === '/cadastro') {
        render('pages/add');
    } else if ($url === '/listar') {
        render('pages/list');
    } else {
        render('pages/notFound');
    }

    function render(string $view): void
    {
        include "../src/{$view}.phtml";
    }
?>
