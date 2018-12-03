<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
?>

<h1>Quartos disponiveis</h1>

<?php
	$comando1="SELECT nr_quarto FROM quartos WHERE disponibilidade=1 and cama_casal=1";
	$enviar1=mysqli_query($conn, $comando1);
	$resultado1=mysqli_fetch_all($enviar1, MYSQLI_ASSOC);
	$comando2="SELECT nr_quarto FROM quartos WHERE disponibilidade=1 and camas_solteiro=1";
	$enviar2=mysqli_query($conn, $comando2);
	$resultado2=mysqli_fetch_all($enviar2, MYSQLI_ASSOC);

	if(isset($_GET['Pesquisar'])) {echo "aqui";
		if($_GET['tipo']=='casal'){
			if('disponibilidade'==1 and 'cama_casal'==1) {
				foreach ($resultado1 as $casal) {
					$nr_quarto=$casal['nr_quarto'];?>
					<tr>
						<td><?=$nr_quarto?></td>
					</tr>
					<?php
				}

			}else if('disponibilidade'==1 and 'camas_solteiro'==1) {

			}
		}		
	}	
?>