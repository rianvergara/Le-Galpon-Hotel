<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");

	$comando="SELECT * FROM quartos";
	$enviar=mysqli_query($conn, $comando);
	

	if (mysqli_num_rows($enviar)>0) {
		$resultado=mysqli_fetch_all($enviar);
		// echo "<pre>";
		// var_dump($resultado);
		// echo "</pre>";
		// die();
	

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

			echo "<pre>";
		var_dump($quarto);
		echo "</pre>";
		
			

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
		<td><?php echo $quarto['0'];?></td>
		<td><?php echo $quarto['1'];?></td>
		<td><?php echo $quarto['2'];?></td>
		<td>
			<?php 
				if ($quarto['3']==0) {
					echo "Indisponível";
				}else {
					echo "Disponível";
				}


			?>
			
		</td>
	</tr>

<?php
	endforeach;
?>

</table>

<?php
}
#$quarto['nr_quarto'];
#$quarto['cama_casal'];
#$quarto['camas_solteiro'];
#$quarto['disponibilidade'];
?>
<a href="index.php">Voltar</a>