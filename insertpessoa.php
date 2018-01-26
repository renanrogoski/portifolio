<?php
	include 'db_connection.php';
 	
 	$result = Comando::Executar(
 		"INSERT INTO user (name, email, password)
 			VALUES ('".$_POST['nome']."', '".$_POST['email']."', '".md5($_POST['senha'])."')" );	

 	if($result===TRUE){
		echo "cadastrado no  banco";
		header("location: /portifolio?ret=2");
	}else{
		echo "falha no cadastro";
		header("location: /portifolio?ret=1");
	}
 	
?>