<?php
	session_start();//logar
	if(!isset($_SESSION["email"])){
		session_destroy();//sair
		header("Location:index.php");
		exit;
	}
?>