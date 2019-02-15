<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functionsemp.php");
   seguranca();
   $id = $_SESSION['user']['idemp'];
   //ISSO DEVE ESTAR NO INICIO DE CADA PÁGINA QUE O USUÁRIO USAR APÓS O LOGIN
?>



<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1" enctype="multipart/form-data">
		<table width="25%" border="0">
			<tr> 
				<td>Serviço</td>
				<td><input type="text" name="serv"></td>
			</tr>
			<tr> 
				<td>Descrição</td>
				<td><input type="text" name="descr"></td>
			</tr>
			<tr> 
				<td>Preço</td>
				<td><input type="text" name="preco"></td>
			</tr>
			<tr> 
				<td>Data</td>
				<td><input type="date" name="data"></td>
			</tr>
<p><input type="file" name="coverimg" required="required" /></p>

<tr>
     <td>
      <label >Users</label>
     </td>
     <td align="left">
      <select name="idemp"> 
      <option><?php echo $id?></option>  
     </select>
     </td>
    </tr>

				<td><input type="submit" name="cover_up" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>