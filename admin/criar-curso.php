<?php
    header('Location: ./cursos.php');
    include('../conexao.php');

    // Catando dados do curso através do método POST
    $tituloCurso = $_POST['curso-titulo'];
    $profCurso = $_POST['curso-prof'];
    $imgCurso = $_POST['curso-img'];
    $nivelCurso = $_POST['curso-nivel'];
    $duracaoCurso = $_POST['curso-duracao'];
    $descricaoCurso = $_POST['curso-desc'];

    // Passando a instrução para criar novos dados
    $comando = "INSERT INTO curso (tituloCurso, profCurso, imgCurso, nivelCurso, duracaoCurso, descricaoCurso) VALUES ('$tituloCurso', '$profCurso', '$imgCurso', '$nivelCurso', '$duracaoCurso', '$descricaoCurso')";

    // Enviando a instrução para o banco
    $connection->exec($comando);
?>