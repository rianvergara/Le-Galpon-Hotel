<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
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
