<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");

	$comando="SELECT * FROM quartos";
	$enviar=mysqli_query($conn, $comando);
	$resultado=mysqli_fetch_assoc($enviar);

?>
<table>
	<tr>
		<th>Número do quarto</th>
		<th>Cama de casal</th>
		<th>Cama de solteiro</th>
		<th>Disponibilidade</th>
	</tr>

	<?php

	foreach ($resultado as $quarto) :

		#$nr_quarto=$quarto['nr_quarto'];
		#$cama_casal=$quarto['cama_casal'];
		#$camas_solteiro=$quarto['camas_solteiro'];
		#$disponibilidade=$quarto['disponibilidade'];
		#if($disponibilidade=="1"){
		#	$disponibilidade="Disponível";
		#}else{
		#	$disponibilidade="Indisponível";
		#}
	#}
?>
	<tr>
		<td><?php echo $quarto['nr_quarto'];?></td>
		<td><?php echo $quarto['cama_casal'];?></td>
		<td><?php echo $quarto['camas_solteiro'];?></td>
		<td><?php echo $quarto['disponibilidade'];?></td>
	</tr>

<?php
	endforeach
?>

</table>
<?php
#$quarto['nr_quarto'];
#$quarto['cama_casal'];
#$quarto['camas_solteiro'];
#$quarto['disponibilidade'];
?>
<a href="index.php">Voltar</a>