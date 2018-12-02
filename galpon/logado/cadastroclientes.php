<?php
session_start();
include_once("servidor.php");
include_once("cabecalho.php");

if(!empty($_SESSION['mensagem'])) {
		echo $_SESSION['mensagem'];
		unset($_SESSION['mensagem']);
	}

?>
	<form action="cadastrarclientes.php" method="get" accept-charset="utf-8">
	Nome<br>
	<input type="text" name="nome_cliente"><br>
	RG<br>
	<input type="text" name="rg" maxlength="10"><br>
	Fone<br>	
	<input type="text" name="fone"><br>
	<input type="submit" name="enviar" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>