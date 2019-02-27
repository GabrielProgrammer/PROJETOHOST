<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functionuser.php");
   seguranca();
   $id = $_SESSION['user']['coduser'];

?>



<?php 
session_start();
if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['user']);
  unset($_SESSION['senha']);
  header('location:Login.php');
  }
 
$logado = $_SESSION['user'];
?>

<?php 

$con = mysqli_connect("localhost", "root", "", "tech") 
or die("Error " . mysqli_error($con));


$ids = $_POST['id_serv'];

 $que = "SELECT * FROM servico where id_serv='$ids' ";
 $result = mysqli_query($con, $que);
 $row=mysqli_fetch_assoc($result);

	

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Working for while
<?php echo $id?>
<?php echo $row['serv'];?><br>
<?php echo $row['descr'];?><br>
<?php echo $row['preco'];?><br>
<img src="MYSQL/<?php echo $row['s_image'];?>"alt=image class=img-responsive><br>
<form method="post" action="contratar.php">
	<h1> contratar </h1>
	<input type="hidden" name="fkserv" value="<?php echo $ids?>">
	<input type="hidden" name="fkemp" value="<?php echo $row['fkemp'];?>">
	<input type="hidden" name="fkuser" value="<?php echo $id?>">
	  Seu Endereço: <input type="text" name="endereco"><br>
	  Problema: <input type="text" name="descr_prob"><br>
	  Considerações: <input type="text" name="consider"><br>
	  Data da expedição: <input type="date" name="data"><br>
	  Nome do Usuário: <input type="text" name="nomeuser">
	  Método de negócio: <input type="text" name="busca">
	  Contato: <input type="text" name="contato">
	  
	<button type="submit"></button>
</form>
</body>
</html>