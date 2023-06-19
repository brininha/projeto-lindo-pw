<?php
    // Catando todos os dados do form através do método POST
    include('../conexao.php');
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $dataNasc = $_POST['dataNasc'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];

    // Verificando se e-mail não está em uso
    $consulta = $connection->query("SELECT id FROM registrado WHERE email = '$email'");
        while ($linha = $consulta->fetch()) {
            $id = $linha['id'];
        }

    if (isset($id)) {
        header("Location: http://localhost/projeto-lindo/user/cadastro.php");
    } else {
        // Passando a instrução para criar novos dados
        $command = "INSERT INTO registrado (nome, sobrenome, email, dataNasc, sexo, senha) VALUES ('$nome', '$sobrenome', '$email', '$dataNasc', '$sexo', '$senha')";

        // Enviando a instrução para o banco
        $connection->exec($command);
        
        // Primeiro acesso
        $consulta = $connection->query("SELECT id FROM registrado WHERE email = '$email' AND senha = '$senha'");
            while ($linha = $consulta->fetch()) {
                $id = $linha['id'];
            }

        header("Location: http://localhost/projeto-lindo/registered/registro.php?id=$id");
    }

    
?>
    