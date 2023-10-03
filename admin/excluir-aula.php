<?php
    $idCurso = $_GET['idCurso'];
    header("Location: ./curso.php?id=$idCurso");

    include("../conexao.php");

    $id = $_GET['id'];

    $command = "DELETE FROM aula WHERE idAula = $id";

    $connection->exec($command);

    $comando = "UPDATE curso SET numAulasCurso = numAulasCurso - 1 WHERE idCurso = $idCurso";

    $connection->exec($comando);
?>