<?php
session_start(); #Resume a seção via GET 
require_once("servidor.php"); #Puxa o que está na página "servidor.php"

	if(isset($_GET['enviar'])) { #Verifica se foi enviado ao banco
		if(!empty($_GET['nome']) || !empty($_GET['email']) || !empty($_GET['senha'])){ #Se foi inserido todos os campos
			$nome=$_GET['nome']; #Inserido campo nome
			$email=$_GET['email']; #Inserido campo email
			$senha=MD5($_GET['senha']); #Inserido campo senha

			$comando="INSERT INTO usuarios(email, senha, nome) VALUES ('$email', '$senha', '$nome')"; #Executa o comando no banco de dados
			$enviar=mysqli_query($conn, $comando);             #Envia para o banco a informação
			if($enviar) {                                      #Se chegar no banco
				$_SESSION['mensagem']="Cadastrado com sucesso";#Exibe mensagem de sucesso
				header("location:index.php");                  #Redireciona para a página após a execução da função
				exit;                                          #Finaliza o if 
			}else{
				$_SESSION['mensagem']="Erro ao cadastrar"; #Informa que não foi cadastrado
				header("location:cadastro.php"); #Redireciona para o cadastro após a execução da função
				exit; #Finaliza o if
			}   
		}else{
			$_SESSION['mensagem']="Algum dos campos ficou em branco"; #Mensagem avisando dos campos em branco
				header("location:cadastro.php"); #Redireciona para o cadastro após a execução da função
				exit; #Finaliza o if
		}
	}else{
		header("location:index.php"); #Redireciona para a página após a execução da função
				exit; #Finaliza o if
	}
?>	