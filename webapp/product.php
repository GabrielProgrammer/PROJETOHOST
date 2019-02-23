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


$id = $_POST['id_serv'];

 $que = "SELECT * FROM servico where id_serv='$id' ";
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
<?php echo $row['serv'];?><br>
<?php echo $row['descr'];?><br>
<?php echo $row['preco'];?><br>
<img src="MYSQL/<?php echo $row['s_image'];?>"alt=image class=img-responsive><br>
<form method="post" action="contratar.php">
	<h1> contratar </h1>
	<input type="hidden" name="id_serv" value="<?php echo $row['fkemp'];?>">
	  Seu Endereço: <input type="text" name="fname"><br>
	  Data da expedição: <input type="text" name="lname"><br>
	  Problema: <input type="text" name="lname"><br>
	  Considerações: <input type="text" name="lname"><br>
	  Preço: <input type="text" name="lname"><br>
	  Data da expedição: <input type="text" name="lname"><br>
	<button type=""></button>
</form>
</body>
</html>