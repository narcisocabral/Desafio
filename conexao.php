<?php 

    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "root";
    $banco = "senhas";
    $porta = '3306';

    $mysqli = new mysqli($servidor, $usuario, $senha, $banco,$porta);
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>
