<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
?>
    <h1>Tipo de cama para o quarto</h1><br>
  		<form method="post" action="opcoesdequarto.php">
			<select name="tipo">
				<option value="solteiro">Solteiro</option>
				<option value="casal">Casal</option>
				
				
			</select>
				<input type="submit" value="Enviar" />
		</form>