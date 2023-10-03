<?php
    header("Location: ./cursos.php");

    include("../conexao.php");

    $idRegistro = $_GET['idRegistro'];
    $idCurso = $_GET['idCurso'];

    $command = "DELETE FROM matricula WHERE idRegistro = $idRegistro AND idCurso = $idCurso";

    $connection->exec($command);
?>