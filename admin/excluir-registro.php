<?php
    header("Location: http://localhost/projeto-lindo/admin/registros.php");

    include("../conexao.php");

    $id = $_GET['id'];

    $command = "DELETE FROM registrado WHERE idRegistro = $id";

    $connection->exec($command);
?>