<?php
$ip = "127.0.0.1";
$login = "root";
$senha = "senha5";
$banco = "legalpon";
#Busca as informações do banco
$conn=mysqli_connect($ip, $login, $senha, $banco); #Conecta com o banco
if ($conn) {
	}else{
	echo "Erro de Conexão no servidor"; #Aviso de erro na conexão
}

?>