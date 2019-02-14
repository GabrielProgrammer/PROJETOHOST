<?php 

			require('conexao.php');
			$ids = $_POST['idemp'];
			$serv = $_POST['serv'];
			$descr = $_POST['descr'];
			$preco = $_POST['preco'];

			
			if($serv == ''){
				echo '<script>alert("Atenção! O campo nome não pode ficar vazio.")</script>';
			} else if($descr == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			} else if($preco == ''){
				echo '<script>alert("Atenção! O campo comentario não pode ficar vazio.")</script>';
			}else if ($serv != '' && $descr != '' && $preco != '') {
				$tabela = mysqli_query($conectar, "INSERT INTO servico (serv, descr, preco, fkemp) VALUES ('$serv','$descr','$preco', '$ids')");

				
				echo '<script>alert("Produto cadastrado")</script>'; 

			}else{
				echo '<script>alert("Produto não cadastrado")</script>';
			}
		?>
