<?php
session_start();
require_once("servidor.php");
require_once("cabecalho2.php");
	
	$nome=$_SESSION['nome'];
?>
    Bem vindo(a) <?=$nome?>, o que deseja?<br>
	<div>
        <ul>
            <li><a href="reserva.php">Reservar quarto</a></li>
            <li><a href="clientes.php">Centra de controle de Clientes</a></li>
            <li><a href="">Liberar quarto</a></li>
        </ul>
    </div>

    <a href="../index.php">Voltar</a>