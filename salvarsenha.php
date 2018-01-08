<?php
include("conexao.php");
$associa = $_POST["associa"] ;
$senha= $_POST["senha"];	
$sql="insert into Senhas (nm_associacao_senha,cd_senha) values ('$associa','$senha')";
$mysqli->query($sql) or die ($mysqli->error);
header('location: index.html');
?>