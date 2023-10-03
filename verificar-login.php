<?php
    session_start();
    if (!isset($_SESSION['id'])) {
        header("Location: http://localhost/projeto-lindo/user/login.php?erro=true");
    }
?>