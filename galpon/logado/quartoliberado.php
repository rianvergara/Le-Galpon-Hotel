<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
	

	// echo $_GET['numero'];
	// die();
	
	if (isset($_GET['numero']) && !empty($_GET['numero'])) {
		$numero=$_GET['numero'];
		$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=$numero";
		// echo $comando;
		// die();
		$enviar=mysqli_query($conn, $comando);
		if ($enviar>0) {
			echo "Quarto liberado com sucesso<br>";
		}else{
			echo "Não foi possivel liberar o quarto<br>";
		}
	}
?>	
<a href="../index.php"><br>Voltar</a>
	

	