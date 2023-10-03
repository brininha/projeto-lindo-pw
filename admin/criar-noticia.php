<?php
    header('Location: http://localhost/projeto-lindo/admin/adicionar-noticia.php');
    include('../conexao.php');

    // Catando todos os dados do form através do método POST
    $titulo = $_POST['noticia-titulo'];
    $autor = $_POST['noticia-autor'];
    $imagem = $_POST['noticia-img'];
    $resumo = $_POST['noticia-resumo'];
    $texto = $_POST['noticia-texto'];

     // Passando a instrução para criar novos dados
     $command = "INSERT INTO noticia (tituloNoticia, autorNoticia, imagemNoticia, resumoNoticia, textoNoticia) VALUES ('$titulo', '$autor', '$imagem', '$resumo', '$texto')";

     // Enviando a instrução para o banco
     $connection->exec($command);
?>