<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
?>

<h1>Quartos disponiveis</h1>

<?php
	
	$comando2="SELECT nr_quarto FROM quartos WHERE disponibilidade=1 and camas_solteiro=1";
	$enviar2=mysqli_query($conn, $comando2);
	$resultado2=mysqli_fetch_assoc($enviar2);

	if(isset($_POST['tipo'])) {
		if($_POST['tipo']=='casal'){
			$comando1="SELECT nr_quarto FROM quartos WHERE disponibilidade=1 and cama_casal=1";
			$enviar1=mysqli_query($conn, $comando1);

			if (mysqli_num_rows($enviar1)>0) {
				$resultado1=mysqli_fetch_all($enviar1);
				#var_dump($resultado1);
				#	die();
				foreach ($resultado1 as $casal) {
					
					?>
					<tr>
						<td><?php echo $casal[0];?><a href="quartoreservado.php"><button>Reservar</button></a></td><br><br>
					</tr>
					<?php
				}
			}else{
				echo "Todos os quartos de casal estão indisponiveis.<br>";	
			}
			
			
		

			
		}
		if($_POST['tipo']=='solteiro'){
			if('disponibilidade'==1 and 'camas_solteiro'==1) {
				foreach ($resultado2 as $solteiro) {
					$nr_quarto=$solteiro['nr_quarto'];?>
					<tr>
						<td><?=$nr_quarto?><a href="quartoreservado.php"><button>Reservar</button></a></td></td>
					</tr>
					<?php
				}
			}else{
				echo "Todos os quartos de solteiro estão indisponiveis.<br>";	
			}
		}		
	}	
?>