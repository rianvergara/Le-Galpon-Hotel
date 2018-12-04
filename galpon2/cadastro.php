<?php
session_start();
require_once("servidor.php"); #Puxa o conteúdo do "servidor.php"
require_once("cabecalho.php"); #Puxa o conteúdo do "cabecalho.php"

if(!empty($_SESSION['mensagem'])) { #Verifica se possui uma mensagem
		echo $_SESSION['mensagem']; #Exibe a mensagem 
		unset($_SESSION['mensagem']); #Quando atualizado, a mensagem sai da tela
	}

?>
	<form action="cadastrar.php" method="get" accept-charset="utf-8"> <!--Formulário de cadastro via get -->
	Nome<br>
	<input type="text" name="nome"><br> <!-- Campo "nome" do formulário -->
	Email<br>
	<input type="text" name="email"><br> <!-- Campo "email" do formulário -->
	Senha<br>	
	<input type="password" name="senha"><br> <!-- Campo "senha" do formulário -->
	<input type="submit" name="enviar" value="Cadastrar"> <!-- Botão de enviar -->
    </form>
    <a href="index.php">Voltar</a> <!-- Botão de voltar -->