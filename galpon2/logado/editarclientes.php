<?php
session_start();
require_once("servidor.php");


if(isset($_POST['cd_cliente']) && !empty($_POST['cd_cliente']) && isset($_POST['nome_cliente']) && !empty($_POST['nome_cliente']) && isset($_POST['rg']) && !empty($_POST['rg']) && isset($_POST['fone']) && !empty($_POST['fone'])){
	$cd_cliente=$_POST['cd_cliente'];
	$fone=$_POST['fone'];
	$nome_cliente=$_POST['nome_cliente'];
	$rg=$_POST['rg'];

		$comando="UPDATE clientes SET rg='$rg', fone='$fone', nome_cliente='$nome_cliente' WHERE cd_cliente='$cd_cliente'";
		// echo $comando;
		$enviar=mysqli_query($conn, $comando); 
		// var_dump($enviar);
		// die();
	if($enviar) {
				$_SESSION['mensagem']="Editado com sucesso";
				header("location:listadeclientes.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao editar";
				header("location:listadeclientes.php");
				exit;
			}
	
	}else {
		header("location:../index.php");
		exit;
	}
?>	