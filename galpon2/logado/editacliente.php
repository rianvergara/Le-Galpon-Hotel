<?php
    session_start();
    require_once("servidor.php");
    require_once("cabecalho.php");

   
?>

	<form action="editarclientes.php" method="get" accept-charset="utf-8">
	Nome<br>
	<input type="text" name="nome_cliente"><br>
	RG<br>
	<input type="text" name="rg" maxlength="10"><br>
	Fone<br>	
	<input type="text" name="fone"><br>
	<input type="submit" name="enviar" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>