<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    include('../conexao.php');
        $consulta = $connection->query("SELECT id FROM registrado WHERE email = '$email' AND senha = '$senha'");
        while ($linha = $consulta->fetch()) {
            $id = $linha['id'];
        }

    if ($email == 'admin@gmail.com' && $senha == 'admin123') {
        header("Location: http://localhost/projeto-lindo/admin/index.php");
    } else if (isset($id)) {
        header("Location: http://localhost/projeto-lindo/registered/registro.php?id=$id");
    } else {
        header("Location: http://localhost/projeto-lindo/user/login.php");
    }
?>