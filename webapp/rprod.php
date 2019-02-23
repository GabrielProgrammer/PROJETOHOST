<?php
require('config.php');


		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

		if($_POST['id_serv']) 
		{
			$id = $_POST['id_serv'];
			acess($id); 

		} else {
			$message = '<h1>Por favor, preencha os campos corretamente.</h1>
						<h3><a href="../Login.php">Tentar Novamente</a></h3>'; 
						
			echo $message;
		}
	} else {
		header("Location: ../index.php");
	}

	function acess($id) { 
		$config = new Config(); 
		$conexao = $config->conectaBanco();
		

		$query = "SELECT * FROM servico WHERE id_serv = '".$id."'"; //O BD onde o PHP vai procurar

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error); 

		if(mysqli_num_rows($result) == 1){
			$id = $result->fetch_array(MYSQLI_ASSOC);
			session_start();

			$_SESSION['id_serv']['id_serv'] = $id['id_serv'];

			//AQUI AGORA VAI FICAR TODAS ENTIDADES DA TABELA

			header("Location: product.php"); //O PERFIL DO USUÁRIO

		} else {
			$message = '<h1>Senha ou idname Incorretos.</h1>
						<h3>Por favor, <a href="../Login.php">Tente Novamente</a></h3>';
						echo $message;
						

		}
	}

?>