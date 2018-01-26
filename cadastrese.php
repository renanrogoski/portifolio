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

	<h2 style="text-align: center; color: #FFF">Cadastro de usuário</h2>

	<div class="container" style="background-color: #FFF; position: relative; top: 40px; border-radius: 4px;">
		<h2 style="text-align: center; padding: 20px;"><i class="fa fa-file" aria-hidden="true"></i> Formulário</h2>
		
		<form action="insertpessoa.php" method="POST" enctype="multipart/form-data" >
			
			<div class="row form-group">
				<div class="col-md-12">
					<input type="text" name="nome" class="form-control" placeholder="Nome Completo" required />
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<input type="text" name="email" class="form-control" placeholder="E-mail" required></textarea>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<input type="password" name="senha" class="form-control" placeholder="Senha" required />
				</div>
			</div>

			<div class="row form-group" style="text-align: center;">
				<div class="col-md-12">
					<button type="submit" class="btn btn-success">Salvar</button>
					<a href="index.php">
						<button type="button" class="btn btn-default">Cancelar</button>	
					</a>					
				</div>
			</div>
		</form>
	</div>

</body>
</html>