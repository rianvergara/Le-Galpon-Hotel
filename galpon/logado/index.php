<?php
session_start();
include_once("servidor.php");
include_once("cabecalho2.php");
	
	$nome=$_SESSION['nome'];
?>
    Bem vindo(a) <?=$nome?>, o que deseja?<br>
	<div>
        <ul>
            <li><a href="">Reservar quarto</a></li>
            <li><a href="clientes.php">Centra de controle de Clientes</a></li>
            <li><a href="">Serviços adicionais</a></li>
        </ul>
    </div>