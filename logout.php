<?php
    session_start();
    session_destroy();
    header("Location: http://localhost/projeto-lindo/user/index.php");
?>