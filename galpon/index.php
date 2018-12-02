<?php
session_start();
require_once("servidor.php");
include_once("cabecalho.php");

if(!empty($_SESSION['mensagem'])) {
		echo $_SESSION['mensagem'];
		unset($_SESSION['mensagem']);
	}
	if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])) {
		$id=$_SESSION['id'];
		$nome=$_SESSION['nome'];
	}else{
		$_SESSION['mensagem']="Você não está logado";
		
	}
?>
<br>Bem vindo(a)<br>
<a href="sair.php"><button>Sair</button></a>
<form action="validar.php" method="post" accept-charset="utf-8">
	Email<br>
	<input type="text" name="email"><br>
	Senha<br>
	<input type="password" name="senha"><br>
	<input type="submit" name="enviar">
</form>
<a href="cadastro.php">Cadastrar</a>