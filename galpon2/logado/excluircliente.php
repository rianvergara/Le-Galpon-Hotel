<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
	

	// echo $_GET['cliente'];
	// die();
	
	if (isset($_GET['cliente']) && !empty($_GET['cliente'])) {
		$cliente=$_GET['cliente'];
		$comando="DELETE FROM clientes WHERE cd_cliente=$cliente";
		// echo $comando;
		// die();
		$enviar=mysqli_query($conn, $comando);
		if ($enviar>0) {
			echo "Cliente excluido com sucesso<br>";
		}else{
			echo "Erro ao excluir<br>";
		}
	}
?>	
<a href="../listadeclientes.php"><br>Voltar</a>