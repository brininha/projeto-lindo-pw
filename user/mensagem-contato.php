<?php
    header('Location: http://localhost/projeto-lindo/user/contato.php');
    include('../conexao.php');

    // Catando todos os dados do form através do método POST
    $nome = $_POST['contato-nome'];
    $email = $_POST['contato-email'];
    $telefone = $_POST['contato-telefone'];
    $assunto = $_POST['contato-assunto'];
    $mensagem = $_POST['contato-mensagem'];

    // Passando a instrução para criar novos dados
    $command = "INSERT INTO contato (nome, email, assunto, mensagem, telefone) VALUES ('$nome', '$email', '$assunto', '$mensagem', '$telefone')";

    // Enviando a instrução para o banco
    $connection->exec($command);
?>