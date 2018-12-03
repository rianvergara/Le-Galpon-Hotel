<?php
session_start();
require_once("servidor.php");

	if(isset($_GET['enviar'])) {
		if(!empty($_GET['rg']) || !empty($_GET['fone']) || !empty($_GET['nome_cliente'])){
			$rg=$_GET['rg'];
			$fone=$_GET['fone'];
			$nome_cliente=$_GET['nome_cliente'];

			$comando="INSERT INTO clientes(rg, fone, nome_cliente) VALUES ('$rg', '$fone', '$nome_cliente')";
			$enviar=mysqli_query($conn, $comando);
			if($enviar) {
				$_SESSION['mensagem']="Cadastrado com sucesso";
				header("location:cadastroclientes.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao cadastrar";
				header("location:cadastroclientes.php");
				exit;
			}
		}else{
			$_SESSION['mensagem']="Algum dos campos ficou em branco";
				header("location:cadastroclientes.php");
				exit;
		}
	}else{
		header("location:index.php");
				exit;
	}
?>	