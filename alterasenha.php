<?php
include("conexao.php");
$idsenha = $_GET["cd_id_senha"] ;
$senha= $_GET["senha"];	
$sql="update Senhas set cd_senha=".$senha." where cd_id_senha=$idsenha";
$mysqli->query($sql) or die ($mysqli->error);
header('location: index.html');
?>