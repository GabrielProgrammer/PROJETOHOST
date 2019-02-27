<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functionsemp.php");
   seguranca();
   $id = $_SESSION['user']['idemp'];


?>


<?php 

$con = mysqli_connect("localhost", "root", "", "tech") 
or die("Error " . mysqli_error($con));


 $last_id = mysqli_insert_id($con);

 $que = "SELECT * FROM agendamento where fkemp='$id' ";
 $result = mysqli_query($con, $que);
 $row=mysqli_fetch_assoc($result);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contratoa</title>
</head>
<body>

Nome do usuário: <?php echo $row['nomeuser'];?><br>
<?php echo $row['descr_prob'];?><br>
<?php echo $row['data'];?><br>
<?php echo $row['contato'];?><br>
<?php echo $row['endereco'];?><br>
<?php echo $row['consider'];?><br>

</body>
</html>