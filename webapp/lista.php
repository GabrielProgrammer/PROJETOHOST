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


 $que = "SELECT fkserv FROM agendamento where fkemp='$id'  ";
 $result = mysqli_query($con, $que);
 $row =mysqli_fetch_assoc($result);

$fk = $row['fkserv'];

 $sql = "SELECT * FROM servico WHERE id_serv='$fk'  ";
 $res = mysqli_query($con, $sql);
 $list =mysqli_fetch_assoc($res);	

?>




<!DOCTYPE html>
<html>
<head>
	<title>Lista de contrato</title>
</head>
<body>

<form method="post" action="contratos.php">
	<?php echo ['serv'];  ?>
	<tr>
     <td>
      <label >Users</label>
     </td>
     <td align="left">
      <select name="idemp"> 
      <option><?php echo $fk?></option>  
     </select>
     </td>
</tr>
<a href="" type="submit">botao</a>
</form>

</body>
</html>