<?php

	require_once("config.php");

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['username'], $_POST['preco'], $_POST['garantia'], $_POST['desc']))
		{
			$username = $_POST['username'];
			$preco = $_POST['preco'];
			$garantia = $_POST['garantia'];
			$desc = $_POST['desc'];

			cadastrar($username, $preco, $garantia, $desc );
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../index.html">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {
		header("Location: ../oferecer.php");
	}

	function cadastrar($username, $preco, $garantia, $desc) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO servico (username, preco, garantia, desc ) VALUES ('".$username."', '".$preco."', '".$garantia."', '".$desc."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			echo "Realizado com sucesso";
			session_destroy();
			header("Location: PerfilEmpresa.php");
		}	else {
			$message = '<h1>Erro ao cadastrar produto.</h1>
						<h3>Por favor, <a href="../oferecer.php">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>




?>




<!DOCTYPE html>
<html>
<head>
	<title>TechFix</title>
</head>
<body>
	<h1>Cadastre seus Pedidos</h1>
	<form action="" method="post">
	Serviço: <input type="text" name="username"><br>
	Preço: <input type="text" name="preco"><br>
	Garantia: <input type="text" name="garantia"><br>
	Descrição: <input type="text" name="desc"><br>
	</form>
</body>
</html>