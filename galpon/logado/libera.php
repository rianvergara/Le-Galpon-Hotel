<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
?>

<h1>Realizar liberação de quartos</h1><br>
  		<form method="post" action="quartosindisponiveis.php">
			<select name="tipo">
				<option value="solteiro">Solteiro</option>
				<option value="casal">Casal</option>
			</select>
				<input type="submit" value="Pesquisar">
		</form>
		
<a href="index.php">Voltar</a>