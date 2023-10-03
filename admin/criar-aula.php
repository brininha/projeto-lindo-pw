<?php
    header('Location: ./cursos.php');
    include('../conexao.php');

    // Catando dados da aula através do método POST
    $tituloAula = $_POST['aula-titulo'];
    $imgAula = $_POST['aula-img'];
    $videoAula = $_POST['aula-video'];
    $textoAula = $_POST['aula-texto'];
    $idCurso = $_POST['curso-id'];

    // Passando a instrução para criar novos dados
    $comando = "INSERT INTO aula (tituloAula, imgAula, videoAula, textoAula, idCurso) VALUES ('$tituloAula', '$imgAula', '$videoAula', '$textoAula', '$idCurso')";

    // Enviando a instrução para o banco
    $connection->exec($comando);

    // Passando a instrução para atualizar o número de aulas
    $comando = "UPDATE curso SET numAulasCurso = numAulasCurso + 1 WHERE idCurso = $idCurso";

    // Enviando a instrução para o banco
    $connection->exec($comando);
?>