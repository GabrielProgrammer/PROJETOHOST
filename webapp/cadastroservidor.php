<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['username'], $_POST['nome'], $_POST['email'], $_POST['estado'], $_POST['cidade'], $_POST['senha'], $_POST['cpf'], $_POST['rg'], $_POST['sobre'],  $_POST['telefone'],  $_POST['profi']))
		{
			$username = $_POST['username'];
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$estado = $_POST['estado'];
			$cidade = $_POST['cidade'];
			$senha  = $_POST['senha'];
			$cpf = $_POST['cpf'];
			$rg  = $_POST['rg'];
			$dtnasc = $_POST['dtnasc'];
			$sobre = $_POST['sobre'];
			$telefone = $_POST['telefone'];
			$profi = $_POST['profi'];

			cadastrar($username, $nome, $email, $estado, $cidade, $senha, $cpf, $rg, $dtnasc, $sobre, $telefone, $profi );
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

	function cadastrar($username, $nome, $email, $estado, $cidade, $senha, $cpf, $rg, $dtnasc, $sobre, $telefone, $profi) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO usuario (username, nome, email, estado, cidade, senha, cpf, rg, dtnasc, sobre, telefone, profi) VALUES ('".$username."', '".$nome."', '".$email."', '".$estado."', '".$cidade."', '".$senha."', '".$cpf."', '".$rg."', '".$dtnasc."', '".$sobre."', '".$telefone."', '".$profi."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
		
			
			header("Location: Login.php");
		}	else {
			$message = '<h1>Erro ao cadastrar o usuário.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>
<?php
	require_once("config.php");

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(checkValues($_POST['username'], $_POST['nome'], $_POST['email'], $_POST['estado'], $_POST['cidade'], $_POST['senha'], $_POST['cpf'], $_POST['rg'], $_POST['sobre'],  $_POST['telefone'],  $_POST['profi']))
		{
			$username = $_POST['username'];
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$estado = $_POST['estado'];
			$cidade = $_POST['cidade'];
			$senha  = $_POST['senha'];
			$cpf = $_POST['cpf'];
			$rg  = $_POST['rg'];
			$dtnasc = $_POST['dtnasc'];
			$sobre = $_POST['sobre'];
			$telefone = $_POST['telefone'];
			$profi = $_POST['profi'];

			cadastrar($username, $nome, $email, $estado, $cidade, $senha, $cpf, $rg, $dtnasc, $sobre, $telefone, $profi );
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

	function cadastrar($username, $nome, $email, $estado, $cidade, $senha, $cpf, $rg, $dtnasc, $sobre, $telefone, $profi) {
		$config = new Config();
		$conexao = $config->conectaBanco();

		$query = "INSERT INTO usuario (username, nome, email, estado, cidade, senha, cpf, rg, dtnasc, sobre, telefone, profi) VALUES ('".$username."', '".$nome."', '".$email."', '".$estado."', '".$cidade."', '".$senha."', '".$cpf."', '".$rg."', '".$dtnasc."', '".$sobre."', '".$telefone."', '".$profi."')";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if($result !== null){
		
			
			header("Location: Login.php");
		}	else {
			$message = '<h1>Erro ao cadastrar o usuário.</h1>
						<h3>Por favor, <a href="../index.html">Tente Novamente</a></h3>';
			echo $message;
		}
	}
?>
