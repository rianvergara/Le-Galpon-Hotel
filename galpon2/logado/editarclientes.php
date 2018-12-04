<?php
session_start();
require_once("servidor.php");

	if(isset($_GET['enviar'])) {
		$cliente=$_GET['cliente'];

		if(!empty($_GET['rg'])){
			$rg=$_GET['rg'];
			
		
			$comando="UPDATE clientes SET rg='$rg' WHERE cd_cliente=$cliente";
			$enviar=mysqli_query($conn, $comando);
			
		}
		
		if(!empty($_GET['fone']){
			$fone=$_GET['fone'];
			

			$comando="UPDATE clientes SET fone='$fone' WHERE cd_cliente=$cliente";
			$enviar=mysqli_query($conn, $comando);
			
		}
		
		if(!empty($_GET['nome_cliente'])){
			$nome_cliente=$_GET['nome_cliente'];

			$comando="UPDATE clientes SET nome_cliente='$nome_cliente' WHERE cd_cliente=$cliente";
			$enviar=mysqli_query($conn, $comando);
			
		}
		if($enviar>0) {
				$_SESSION['mensagem']="Editado com sucesso";
				header("location:listadeclientes.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao editar";
				header("location:listadeclientes.php");
				exit;
			}
	}
	}else{
		header("location:index.php");
				exit;
	}
?>	