<?php
	session_start();
	require_once("servidor.php");
	require_once("cabecalho.php");
	

	echo $_GET['solteiro'];
	if ($_POST['solteiro']) {
		if ($_POST['solteiro']==103) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=103";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['solteiro']==104) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=104";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['solteiro']==201) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=201";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['solteiro']==202) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=202";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['solteiro']==303) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=303";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['solteiro']==304) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=304";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['solteiro']==401) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=401";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['solteiro']==402) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=402";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}
	}else {
		if ($_POST['casal']==101) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=101";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['casal']==102) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=102";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['casal']==203) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=203";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['casal']==204) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=204";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['casal']==301) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=301";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['casal']==302) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=302";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['casal']==403) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=403";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}else{ if ($_POST['casal']==404) {
			$comando="UPDATE quartos SET disponibilidade=1 WHERE nr_quarto=404";
			$enviar=mysqli_query($conn, $comando);
			echo "quarto reservado";
		}
	}	

	#header("location:reserva.php");
?>	