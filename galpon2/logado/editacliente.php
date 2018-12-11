<?php
    session_start();
    require_once("servidor.php");
    require_once("cabecalho.php");

  if (isset($_GET['cliente']) && !empty($_GET['cliente'])) {
		$cliente=$_GET['cliente'];
		$comando = "SELECT * FROM clientes WHERE cd_cliente='$cliente'";
		$enviar=mysqli_query($conn, $comando);
		$cliente=mysqli_fetch_assoc($enviar);
		// var_dump($cliente);
		// die();
	}	
	

	
?>

	<form action="../editarclientes.php" method="post" accept-charset="utf-8">
	<input type="hidden" name="cd_cliente" value="<?php echo $cliente['cd_cliente']?>"><br>
	Nome<br>
	<input type="text" name="nome_cliente" value="<?php echo $cliente['nome_cliente']?>"><br>
	RG<br>
	<input type="text" name="rg" value="<?php echo $cliente['rg']?>" maxlength="10"><br>
	Fone<br>	
	<input type="text" name="fone" value="<?php echo $cliente['fone']?>"><br>
	<input type="submit" name="editar" value="Editar">
    </form>
    
   