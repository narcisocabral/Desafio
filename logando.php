<?php

session_start();
include 'conexao.php';

$login = $_GET['login'];
$senha = $_GET['senha'];
if($senha==NULL || $email==NULL){
	header('location: login.html');
}
//$senha = crypt($password,'rl');

	 $sql = "SELECT name, password,  from sistemas where name = '$login' and password = '$senha'";
	 $resultado = $mysqli->query($sql) or die ($mysqli->error);;
     $row = $resultado->fetch_assoc();
     if($row['name'] == $login)
	 {
				     	if($row['password'] == $senha)
						{
				     		echo 'usuario existe';
				                        $_SESSION['login'] = $login;
				                        $_SESSION['senha'] = $senha;
							header('location: sistemas/index.php?validador=1');
					 	}
					 	else
					 	{
						 	echo "senha incorreta";
						 	header('location: login.html');
					 	}
     }

?>
