<?php
		include('conexao.php');
		$fkserv = $_POST['fkserv'];
		$fkemp = $_POST['fkemp'];
		$fkuser = $_POST['fkuser'];
		$descr = $_POST['descr_prob'];
		$nomeuser = $_POST['nomeuser'];
		$data = $_POST['data'];
		$contato = $_POST['contato'];
		$busca = $_POST['busca'];
		$endereco = $_POST['endereco'];
		$consider = $_POST['consider'];

		if($descr == ''){
				echo '<script>alert("Atenção! O campo nome não pode ficar vazio.")</script>';
			} else if($nomeuser == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			}
			else if($contato == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			}
			else if($busca == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			}
			else if($consider == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			}
			else if($endereco == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			}
			 else if($data == ''){
				echo '<script>alert("Atenção! O campo comentario não pode ficar vazio.")</script>';
			}else if ($descr != '' && $nomeuser != '' && $contato != '' && $busca != '' && $consider != '' && $endereco != '' && $data != '') 
			{
				$tabela = mysqli_query($conectar, "INSERT INTO agendamento (descr_prob, nomeuser, data, contato, busca, endereco, consider, fkserv, fkuser, fkemp) VALUES ('$descr','$nomeuser','$data', '$contato', '$busca', '$endereco', '$consider', '$fkserv', '$fkuser', $fkemp)");

				
				echo '<script>alert("Contrato realizado")</script>'; 

			}else{
				echo '<script>alert("Contrato não realizado, tente novamente ou mais tarde")</script>';
			}
		



?>

<!DOCTYPE html>
<html>
<head>
	<title>Orçamento</title>
</head>
é isso ai
</body>
</html>