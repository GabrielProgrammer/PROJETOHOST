<?php
	require_once("config.php"); //É A CONEXÃO PADRÃO


	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

		if(checkValues($_POST['user'], $_POST['senha'])) 
		{
			$username = $_POST['user'];
			$senha = $_POST['senha'];
			login($username, $senha); 

		} else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../Login.php">Tentar Novamente</a></h3>'; 
						
			echo $message;
		}
	} else {
		header("Location: ../Login.php");
	}

	function checkValues($username, $senha) {
		if( isset($username) && !empty($username) && isset($senha) && !empty($senha) ){
			$R = true; 
			
		}
		else {
			$R = false; 
		}
		return $R; 
	}

	function login($username, $senha) { 
		$config = new Config(); 
		$conexao = $config->conectaBanco();
		

		$query = "SELECT * FROM usuario WHERE username = '".$username."' AND senha = ".$senha; //O BD onde o PHP vai procurar

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error); 

		if(mysqli_num_rows($result) == 1){
			$user = $result->fetch_array(MYSQLI_ASSOC);
			session_start();

			$_SESSION['user']['username'] = $user['username'];
			$_SESSION['user']['nome'] = $user['nome'];
			$_SESSION['user']['email'] = $user['email'];
			$_SESSION['user']['telefone'] = $user['telefone'];
			$_SESSION['user']['estado'] = $user['estado'];
			$_SESSION['user']['dtnasc'] = $user['dtnasc'];
			$_SESSION['user']['cpf'] = $user['cpf'];
			$_SESSION['user']['rg'] = $user['rg'];
			$_SESSION['user']['sobre'] = $user['sobre'];
			$_SESSION['user']['coduser'] = $user['coduser'];
			$_SESSION['user']['profi'] = $user['profi'];

			//AQUI AGORA VAI FICAR TODAS ENTIDADES DA TABELA

			header("Location: Perfil.php"); //O PERFIL DO USUÁRIO

		} else {
			$message = '<h1>Senha ou username Incorretos.</h1>
						<h3>Por favor, <a href="../Login.php">Tente Novamente</a></h3>';
						echo $message;
						

		}
	}
?>
