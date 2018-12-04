<?php
session_start();
require_once("servidor.php");

	if(isset($_GET['enviar'])) {
		if(!empty($_GET['nome']) || !empty($_GET['email']) || !empty($_GET['senha'])){
			$nome=$_GET['nome'];
			$email=$_GET['email'];
			$senha=MD5($_GET['senha']);

			$comando="INSERT INTO usuarios(email, senha, nome) VALUES ('$email', '$senha', '$nome')";
			$enviar=mysqli_query($conn, $comando);
			if($enviar) {
				$_SESSION['mensagem']="Cadastrado com sucesso";
				header("location:index.php");
				exit;
			}else{
				$_SESSION['mensagem']="Erro ao cadastrar";
				header("location:cadastro.php");
				exit;
			}
		}else{
			$_SESSION['mensagem']="Algum dos campos ficou em branco";
				header("location:cadastro.php");
				exit;
		}
	}else{
		header("location:index.php");
				exit;
	}
?>	