<?php
    header("Location: ./contato.php");

    include("../conexao.php");

    $id = $_GET['id'];

    $command = "DELETE FROM contato WHERE idContato = $id";

    $connection->exec($command);
?>