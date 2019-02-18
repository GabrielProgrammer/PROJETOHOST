<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functionsemp.php");
   seguranca();
   $id = $_SESSION['user']['idemp'];
   
?>


<?php 

			include('conexao.php');
			$ids = $_POST['idemp'];
			$serv = $_POST['serv'];
			$descr = $_POST['descr'];
			$preco = $_POST['preco'];
			$imgFile = $_FILES['coverimg']['name'];
 			$tmp_dir = $_FILES['coverimg']['tmp_name'];
 			$imgSize = $_FILES['coverimg']['size']; 

 			 if(!empty($imgFile))
			 {
			 	$upload_dir = 'MYSQL/'; // upload directory
			 
			 	$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			 
			 // valid image extensions
			 	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			 
			 // rename uploading image
			 	$coverpic = rand(1000,1000000).".".$imgExt;
			 
			 // allow valid image file formats
			 		if(in_array($imgExt, $valid_extensions)){ 
			 // Check file size '5MB'
			 		if($imgSize < 5000000) {
			 			move_uploaded_file($tmp_dir,$upload_dir.$coverpic);
			 							   }
											else{
			 									$errMSG = "Sorry, your file is too large.";
			 									}
			 									            }
			 												else{
																$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; 
			 													}
 

			
			if($serv == ''){
				echo '<script>alert("Atenção! O campo nome não pode ficar vazio.")</script>';
			} else if($descr == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			} else if($preco == ''){
				echo '<script>alert("Atenção! O campo comentario não pode ficar vazio.")</script>';
			}else if ($serv != '' && $descr != '' && $preco != '') {
				$tabela = mysqli_query($conectar, "INSERT INTO servico (serv, descr, preco, fkemp, s_image) VALUES ('$serv','$descr','$preco', '$ids', '" . $coverpic . "')");

				
				echo '<script>alert("Produto cadastrado")</script>'; 

			}else{
				echo '<script>alert("Produto não cadastrado")</script>';
			}
		}

		?>
