<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
?>

<h1>Quartos disponiveis</h1>

<?php
	
	

	if(isset($_POST['tipo'])) {
		if($_POST['tipo']=='casal'){
			$comando1="SELECT nr_quarto FROM quartos WHERE disponibilidade=1 and cama_casal=1";
			$enviar1=mysqli_query($conn, $comando1);

			if (mysqli_num_rows($enviar1)>0) {
				$resultado1=mysqli_fetch_all($enviar1);
			
				foreach ($resultado1 as $casal) {
					
					?>
					<tr>
						<td><?php echo $casal[0];?><a href="quartoreservado.php/?numero=<?php echo $casal[0];?>">
							<button>Reservar</button></a>
						</td><br><br>
					</tr>
					<?php
				}
			}else{
				echo "Todos os quartos de casal estão indisponiveis.<br>";	
			}
		}else{
			$comando2="SELECT nr_quarto FROM quartos WHERE disponibilidade=1 and camas_solteiro=1";
			$enviar2=mysqli_query($conn, $comando2);
			
		if(mysqli_num_rows($enviar2)>0) {
				$resultado2=mysqli_fetch_all($enviar2);
				
				foreach ($resultado2 as $solteiro) {
					
					?>
					<tr>
						<td><form method="get" action="quartoreservado.php"">
							<input type="text"  disabled="true" reandonly="true" name="solteiro" value="<?php echo $solteiro[0];?>"/>
							<?php echo $solteiro[0];?>
							<input type="submit" name="button" value="Enviar"></form></td><br><br>
					</tr>
					<?php
				}
			}else{
				echo "Todos os quartos de solteiro estão indisponiveis.<br>";	
			}
		}		
	}	
?>
<a href="reserva.php">Voltar</a>