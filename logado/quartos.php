<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");

	$comando="SELECT * FROM quartos ORDER BY nr_quarto ASC";
	$enviar=mysqli_query($conn, $comando);
	$resultado=mysqli_fetch_all($enviar, MYSQLI_ASSOC);

?>
<table>
	<tr>
		<th>Número do quarto</th>
		<th>Cama de casal</th>
		<th>Cama de solteiro</th>
		<th>Disponibilidade</th>
	</tr>

	<?php
	foreach ($resultado as $quarto) {
		$nr_quarto=$quarto['nr_quarto'];
		$cama_casal=$quarto['cama_casal'];
		$camas_solteiro=$quarto['camas_solteiro'];
		$disponibilidade=$quarto['disponibilidade'];
		if($disponibilidade=="1"){
			$disponibilidade="Disponível";
		}else{
			$disponibilidade="Indisponível";
		}
	}
?>
	<tr>
		<td><?=$nr_quarto?></td>
		<td><?=$cama_casal?></td>
		<td><?=$camas_solteiro?></td>
		<td><?=$disponibilidade?></td>
	</tr>

</table>
