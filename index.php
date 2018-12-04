<?php
session_start();
require_once("includes/servidor.php");
require_once("includes/cabecalho.php");

if(!empty($_SESSION['mensagem'])) {
		echo $_SESSION['mensagem'];
		unset($_SESSION['mensagem']);
	}
	if(!empty($_SESSION['nome']) and !empty($_SESSION['id'])) {
		$id=$_SESSION['id'];
		$nome=$_SESSION['nome'];
	}else{
		$_SESSION['mensagem']="Você não está logado";
		
	}

require_once("includes/content_home.php");

require_once("includes/rodape.php");
?>