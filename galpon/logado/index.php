<?php
session_start();
require_once("servidor.php");
require_once("cabecalho2.php");
	
	$nome=$_SESSION['nome'];
?>
    Bem vindo(a) <?=$nome?>, o que deseja?<br>
	<div>
        <ul>
            <li><a href="../quartos.php">Quartos</a></li>
            <li><a href="../reserva.php">Reservar quarto</a></li>
            <li><a href="../libera.php">Liberar quarto</a></li>
            <li><a href="../clientes.php">Central de controle de Clientes</a></li>
        </ul>
    </div>

    <a href="../index.php">Voltar</a>