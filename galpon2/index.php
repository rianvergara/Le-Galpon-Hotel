<?php
session_start();
require_once("servidor.php"); #Puxa o conteúdo de "servidor.php"
require_once("cabecalho.php"); #Puxa o conteúdo de cabecalho.php

if(!empty($_SESSION['mensagem'])) { #Verifica se possui uma mensagem
		echo $_SESSION['mensagem']; #Exibe a mensagem
		unset($_SESSION['mensagem']); #Quando atualizado, a mensagem sai da tela
	}
	if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])) {
		$id=$_SESSION['id'];
		$nome=$_SESSION['nome'];
	}else{
		$_SESSION['mensagem']="Você não está logado"; #Exibe mensagem avisando que~o usuário não está logado
		
	}
?>
<br>Bem vindo(a)<br>
<a href="sair.php"><button>Sair</button></a> <!-- Botão de sair -->
<form action="validar.php" method="post" accept-charset="utf-8"> <!-- Formulário buscando o "validar.php" -->
	Email<br>
	<input type="text" name="email"><br> <!-- Campo email -->
	Senha<br>
	<input type="password" name="senha"><br> <!-- Campo senha -->
	<input type="submit" name="enviar" value="Entrar"> <!-- Botão enviar -->
</form>
<a href="cadastro.php">Cadastrar</a> <!-- Botão que leva para a página de cadastro -->