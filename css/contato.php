<?php
    header('Content-type: text/css');
    include('../conexao.php');
    $consulta = $connection->query('SELECT fundo, botao, fonte FROM modo');
    while ($linha = $consulta->fetch()) {
        $fundo = $linha['fundo'];
        if ($fundo == '#FFF') {
            $fundo = '#fff2e8';
        }
    }
?>

body {
    background-color: <?=$fundo?>
}

.form-box {
    height: 100vh;
    margin: 30px;
    margin-right: 15px;
    padding: 30px;
    background-color: white;
    border: 10px solid <?=$fundo?>;
    border-radius: 20px;
}

.top-box {
    background-color: white;
    height: 50vh;
    margin: 30px;
    margin-left: 15px;
    margin-bottom: 0;
    border: 10px solid <?=$fundo?>;
    padding: 30px;
    border-radius: 20px;
}

.bottom-box {
    background-color: white;
    height: 50vh;
    margin: 30px;
    margin-left: 15px;
    margin-top: 0;
    border: 10px solid <?=$fundo?>;
    border-radius: 20px;
}

