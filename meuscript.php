<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	session_start();
	
	$_SESSION['nome'] = $nome;
	$_SESSION['email'] = $email; 
?>