<?php
	include 'db_connection.php';

	if (isset($_POST['cadastrar'])) {
	
		// Recupera os dados dos campos
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$foto = $_FILES["foto"];

		// Pega extensão da imagem
		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

    	// Gera um nome único para a imagem
    	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

    	// Caminho de onde ficará a imagem
    	$caminho_imagem = "fotos/" . $nome_imagem;

		// Faz o upload da imagem para seu respectivo caminho
		move_uploaded_file($foto["tmp_name"], $caminho_imagem);


		// Insere os dados no banco		

		$result = Comando::Executar(
 		"INSERT INTO product (name, description, image)
 			VALUES ('".$nome."', '".$descricao."', '".$nome_imagem."')");	

	 	if($result===TRUE){
			echo "cadastrado no  banco";
			header("location: cadastroproduto.php?ret=1");
		}else{
			echo "falha no cadastro";
			header("location: cadastroproduto.php?ret=2");
		}



	}

 	/*
	while ($obj = $result->fetch_object()){
		echo '--> '.$obj->name;
	}
	*/
?>