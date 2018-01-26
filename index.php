<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Portifólio de Produtos</title>
	<link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<script src="plugins/bootstrap/js/bootstrap.js"></script>
	<script defer src="plugins/fontawesome/svg-with-js/js/fontawesome-all.js"></script>

</head>
<body background= 'background.jpeg' >

	<?php
		session_start();
		unset ($_SESSION['login']);
    	unset ($_SESSION['senha']);
		if($_GET['ret'] == 1){
			echo '  
			<div class="alert alert-danger" role="alert">
				<strong>Ops!</strong> Falha ao realizar Login! Verifique seu e-mail e sua senha.
			</div>';
		}elseif ($_GET['ret'] == 2) {
			echo '  
			<div class="alert alert-success" role="alert">
				<strong>Pronto!</strong> Cadastro de Login Realizado.
			</div>';
		}
	?>
	
	<div class="container" style="background-color: #FFF; position: relative; top: 200px; border-radius: 4px;">
		<h2 style="text-align: center; padding: 20px;"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Login</h2>
		
		<form action="login.php" method="POST"  >
			
			<div class="row form-group">
				<div class="col-md-12">
					<input type="text" name="email" class="form-control" placeholder="E-mail" required />
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<input type="password" name="senha" class="form-control" placeholder="Senha" required />
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary btn-block">Acessar</button>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<a href="cadastrese.php">
						<button type="button" class="btn btn-success btn-block">Cadastre-se</button>
					</a>
				</div>
			</div>

		</form>


		
	</div> 
 
</body>
</html>
