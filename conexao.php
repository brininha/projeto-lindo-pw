<?php
    $user = "root";
    $password = "";

    $connection = new PDO('mysql:host=localhost;dbname=dev', $user, $password);

    if(!$connection){
		die("Error: Falha ao conectar!");
	}
?>