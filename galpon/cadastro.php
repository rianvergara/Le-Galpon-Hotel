<?php
session_start();
require_once("servidor.php");
require_once("cabecalho.php");

if(!empty($_SESSION['mensagem'])) {
		echo $_SESSION['mensagem'];
		unset($_SESSION['mensagem']);
	}

?>
	<form action="cadastrar.php" method="get" accept-charset="utf-8">
	Nome<br>
	<input type="text" name="nome"><br>
	Email<br>
	<input type="text" name="email"><br>
	Senha<br>	
	<input type="password" name="senha"><br>
	<input type="submit" name="enviar" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>