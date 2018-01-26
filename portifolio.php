<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Portifólio</title>
	<link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<script src="plugins/bootstrap/js/bootstrap.js"></script>
	<script defer src="plugins/fontawesome/svg-with-js/js/fontawesome-all.js"></script>
</head>

<body style="background-color: #4e6181">	
	<?php
		session_start();
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
		    unset($_SESSION['login']);
		    unset($_SESSION['senha']);
		    header('location:index.php');
		    }
		 
		$logado = $_SESSION['login'];

		include "menu.php";
		echo"<div style='color:#FFF; margin: 1%;'> Usuário: $logado</div>";
	?>


	<h2 style="text-align: center; color: #FFF">Portifólio</h2>

	<div class="container" style="background-color: #FFF; position: relative; top: 40px; border-radius: 4px;">
	<?php
		include 'db_connection.php';

		$result = Comando::Executar("SELECT * FROM product ORDER BY name");	
		
		while ($obj = $result->fetch_object()){		
			
			echo '<h3><b>Nome:</b> ' . $obj->name . "</h2><br />";
			echo "<img style='width: 100%;' src='fotos/".$obj->image." ' alt='Foto de exibição' /><br />";
			echo '<h3><b>Descrição:</b> '. $obj->description . "<br /><br /><br />";
		}
	

	?>
	</div>

	
</body>
</html>