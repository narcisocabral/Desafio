<?php
include("conexao.php");
$idsenha = $_GET["cd_id_senha"] ;
$sql="delete from Senhas where cd_id_senha=$idsenha";
$mysqli->query($sql) or die ($mysqli->error);
header('location: index.html');
?>