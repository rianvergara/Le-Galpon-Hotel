<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
	

	// echo $_GET['numero'];
	// die();
	
	if (isset($_GET['numero']) && !empty($_GET['numero'])) {
		$numero=$_GET['numero'];
		$comando="UPDATE quartos SET disponibilidade=0 WHERE nr_quarto=$numero";
		// echo $comando;
		// die();
		$enviar=mysqli_query($conn, $comando);
		if ($enviar>0) {
			echo "Quarto reservado com sucesso<br>";
		}else{
			echo "Não foi possivel reservar<br>";
		}
	}
?>	
<a href="../index.php"><br>Voltar</a>