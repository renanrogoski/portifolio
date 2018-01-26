<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Cadastro de produtos</title>
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
		
		if($_GET['ret'] == 2){
			echo '  
			<div class="alert alert-danger" role="alert">
				<strong>Ops!</strong> Falha ao realizar Cadastro!
			</div>';
		}elseif ($_GET['ret'] == 1) {
			echo '  
			<div class="alert alert-success" role="alert">
				<strong>Pronto!</strong> Produto Cadastrado.
			</div>';
		}
	?>

	<h2 style="text-align: center; color: #FFF">Cadastro de produtos</h2>

	<div class="container" style="background-color: #FFF; position: relative; top: 40px; border-radius: 4px;">
		<h2 style="text-align: center; padding: 20px;"><i class="fa fa-file" aria-hidden="true"></i> Formulário</h2>
		
		<form action="insertproduto.php" method="POST" enctype="multipart/form-data" name="cadastroproduto" >			
			<div class="row form-group">
				<div class="col-md-12">
					<input type="text" name="nome" class="form-control" placeholder="Nome do produto" required />
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<textarea name="descricao" class="form-control" placeholder="Descrição do produto" required></textarea>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<input type="file" name="foto" class="form-control" required/>
				</div>
			</div>

			<div class="row form-group" style="text-align: center;">
				<div class="col-md-12">
					<button type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success">Salvar</button>					
					<a href="portifolio.php">
						<button type="button" class="btn btn-default">Cancelar</button>	
					</a>					
				</div>
			</div>
		</form>
	</div>

</body>
</html>