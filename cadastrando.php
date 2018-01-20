<?php
include("conexao.php");
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];
$email=$_POST["email"];
$confirmasenha=$_POST["confirmasenha"];

if($senha==$confirmasenha){
    $sql="insert into Usuario (nm_usuario,nm_email, nm_senha) values ('$usuario','$email','$senha')";
    $mysqli->query($sql) or die ($mysqli->error);
    header('location: loginCadastro.php');
}
else
{
    header('location: loginCadastro.php?erro=1');
}
?>