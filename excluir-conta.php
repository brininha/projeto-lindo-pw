<?php
    include("./conexao.php");

    $id = $_POST['id'];
    $senha = $_POST['senha'];

    $consulta = $connection->query("SELECT senhaRegistro FROM registrado WHERE idRegistro = $id");

    while ($linha = $consulta->fetch()) {
        $senhaRegistro = $linha['senhaRegistro'];
    }

    if ($senha == $senhaRegistro) {
        include("./logout.php");

        $consulta = $connection->query("SELECT idMatricula FROM matricula WHERE idRegistro = $id");
        while ($linha = $consulta->fetch()) {
            $idMatricula = $linha['idMatricula'];
            $comando = "DELETE FROM aulaconcluida WHERE idMatricula = $idMatricula";
            $connection->exec($comando);
        }

        $comando = "DELETE FROM matricula WHERE idRegistro = $id";
        $connection->exec($comando);

        $comando = "DELETE FROM registrado WHERE idRegistro = $id";
        $connection->exec($comando);
    } else {
        header("Location: ./index.php?erro3=true");
    }
?>