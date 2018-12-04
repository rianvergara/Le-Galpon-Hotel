<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
?>

<h1>Quartos indisponiveis</h1>

<?php
	
	

	if(isset($_POST['tipo'])) {
		if($_POST['tipo']=='casal'){
			$comando1="SELECT nr_quarto FROM quartos WHERE disponibilidade=0 and cama_casal=1";
			$enviar1=mysqli_query($conn, $comando1);

			if (mysqli_num_rows($enviar1)>0) {
				$resultado1=mysqli_fetch_all($enviar1);
			
				foreach ($resultado1 as $casal) {
					
					?>
					<tr>
						<td><?php echo $casal[0];?><a href="quartoliberado.php/?numero=<?php echo $casal[0];?>">
							<button>Liberar</button></a>
						</td><br><br>
					</tr>
					<?php
				}
			}else{
				echo "Todos os quartos de casal estão disponiveis.<br>";	
			}
		}else{
			$comando2="SELECT nr_quarto FROM quartos WHERE disponibilidade=0 and camas_solteiro=1";
			$enviar2=mysqli_query($conn, $comando2);
			
		if(mysqli_num_rows($enviar2)>0) {
				$resultado2=mysqli_fetch_all($enviar2);
				
				foreach ($resultado2 as $solteiro) {
					
				?>
					<tr>
						<td><?php echo $solteiro[0];?><a href="quartoliberado.php/?numero=<?php echo $solteiro[0];?>">
							<button>Liberar</button></a>
						</td><br><br>
					</tr>
					<?php
				}
			}else{
				echo "Todos os quartos de solteiro estão disponiveis.<br>";	
			}
		}		
	}	
?>
<a href="../libera.php">Voltar</a>