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
    $consulta = $connection->query("SELECT idRegistro FROM registrado WHERE emailRegistro = '$email'");
        while ($linha = $consulta->fetch()) {
            $id = $linha['idRegistro'];
        }

    if (isset($id)) {
        header("Location: http://localhost/projeto-lindo/user/cadastro.php");
    } else {
        // Passando a instrução para criar novos dados
        $command = "INSERT INTO registrado (nomeRegistro, sobrenomeRegistro, emailRegistro, dataNascRegistro, sexoRegistro, senhaRegistro) VALUES ('$nome', '$sobrenome', '$email', '$dataNasc', '$sexo', '$senha')";

        // Enviando a instrução para o banco
        $connection->exec($command);
        
        // Primeiro acesso
        session_start();
        $consulta = $connection->query("SELECT * FROM registrado WHERE emailRegistro = '$email' AND senhaRegistro = '$senha'");
            while ($linha = $consulta->fetch()) {
                $_SESSION['id'] = $linha['idRegistro'];
                $_SESSION['nome'] = $linha['nomeRegistro'];
                $_SESSION['sobrenome'] = $linha['sobrenomeRegistro'];
                $_SESSION['email'] = $linha['emailRegistro'];
                $_SESSION['dataNasc'] = $linha['dataNascRegistro'];
                $_SESSION['sexo'] = $linha['sexoRegistro'];
                $_SESSION['senha'] = $linha['senhaRegistro'];
                $_SESSION['imagem'] = $linha['imagemRegistro'];
                $_SESSION['insta'] = $linha['instaRegistro'];
                $_SESSION['linkedin'] = $linha['linkedinRegistro'];
                $_SESSION['github'] = $linha['githubRegistro'];
            }

        header("Location: http://localhost/projeto-lindo/registered");
    }

    
?>
    