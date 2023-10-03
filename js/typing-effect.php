<?php
    if(isset($_SESSION['id'])) {
        $nomeExibido = $_SESSION['nome'];
    } else {
        $nomeExibido = "Desenvolvedor";
    }
?>
<script>
    var nome = "<?=$nomeExibido?>";
    var typingEffect = new Typed(".multiText",{
        strings : [nome, "Designer", "Programador", "Estudante", "Professor"],
        loop : true,
        typeSpeed : 100,
        backSpeed : 80,
        backDelay : 1500,
    });
</script>