
<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['username'], $_POST['email'], $_POST['senha'], $_POST['cnpj'], $_POST['endereco']))
		{
			$username = $_POST['username'];
			$email = $_POST['email'];
			$senha =  $_POST['senha'];
			$cnpj = $_POST['cnpj'];
			$endereco = $_POST['endereco'];
			$fund = $_POST['fund'];
			$creat = $_POST['creat'];
			$telefone = $_POST['telefone'];
			$cidade = $_POST['cidade'];
			$bairro = $_POST['bairro'];
			$sobre = $_POST['sobre'];

			cadastrar($username, $email, $senha, $cnpj, $endereco, $fun, $creat, $telefone, $cidade, $bairro, $sobre );
		}
		else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../index.html">Tentar Novamente</a></h3>';
			echo $message;
		}
	}
	else {
		header("Location: ../index.html");
	}

	function checkValues($username, $senha) {
		return true;
	}

	function cadastrar($username, $email, $senha, $cnpj, $endereco, $fund, $creat, $telefone, $cidade, $bairro, $sobre) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO empresa (username, email, senha, cnpj, endereco, fund, creat, telefone, cidade, bairro, sobre) VALUES ('".$username."', '".$email."', '".$senha."', '".$cnpj."', '".$endereco."', '".$fund."', '".$creat."', '".$telefone."','".$cidade."', '".$bairro."', '".$sobre."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
			echo "Oi";
			session_destroy();
			header("Location: Login.php");
		}	else {
			$message = '<h1>Erro ao cadastrar o usuário.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>
