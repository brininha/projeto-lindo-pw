<?php
    header('Location: http://localhost/projeto-lindo/admin/index.php');
    include('../conexao.php');
    $valor = $_POST['mode'];

    if ($valor == 1) {
        $command = "UPDATE modoAdmin SET fundo = '#FFF', tema = 'light', imagem = '../images/logo.png', botao = '#0E6EFC', fonte = 'black'";
    } else if ($valor == 2) {
        $command = "UPDATE modoAdmin SET fundo = '#1a1a1a', tema = 'dark', imagem = '../images/logo-dark.png', botao = 'white', fonte = 'white'";
    } else if ($valor == 3) {
        $command = "UPDATE modoAdmin SET fundo = '#fff5ff', tema = 'light', imagem = '../images/logo-unicorn.png', botao = '#CBA2FF', fonte = 'black'";
    }
    
    $connection->exec($command);
?>