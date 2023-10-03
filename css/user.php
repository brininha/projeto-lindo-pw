<?php
    header('Content-type: text/css');
    include('../conexao.php');
    $consulta = $connection->query('SELECT fundo, botao, fonte FROM modo');
    while ($linha = $consulta->fetch()) {
        $fundo = $linha['fundo'];
        $botao = $linha['botao'];
        $fonte = $linha['fonte'];
    }
?>

.navbar-brand:hover {
    text-decoration: none;
}

.nav-link:hover {
    text-decoration: none;
}

.dropdown-item:hover {
    text-decoration: none;
}

.btn-border-bg {
    color: <?=$botao;?>;
    border-color: <?=$botao;?>;
}

.btn-border-bg:hover {
    color: <?=$fundo;?>;
    background: <?=$botao;?>;
    border-color: <?=$botao;?>;
}

.btn-special:hover {
    border: none;
}

.btn-special:not(:hover) {
    border: none;
}

.btn:hover {
    text-decoration: none;
}

.cards-title, .cards-text, .noticia-title, .noticia-text, .curso-title, .curso-text, .about-title {
    color: <?=$fonte?>
}

.card-img-top {
    height: 250px;
}

.footer-style {
    margin: 0;
    background: white;
    padding: 20px;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.141)
}

body {
    background-color: <?=$fundo;?>;
}
