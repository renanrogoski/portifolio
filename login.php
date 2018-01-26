<?php
	include 'db_connection.php';

	session_start();
 	
 	$result = Comando::Executar("
 		SELECT * 
 		FROM user 
 		WHERE email = '".$_POST['email']."' AND password = '".md5($_POST['senha'])."' ");

 	if(mysqli_num_rows($result) > 0){
 		echo 'Usuário cadastrado';
 		$_SESSION['login'] = $_POST['email'];
		$_SESSION['senha'] = md5($_POST['senha']);
 		header("location: portifolio.php");
 	}else{
 		echo 'Usuário não cadastrado';
 		unset ($_SESSION['login']);
    	unset ($_SESSION['senha']);
 		header("location: /portifolio?ret=1");
 	}

?>