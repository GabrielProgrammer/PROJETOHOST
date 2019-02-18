<?php 

$con = mysqli_connect("localhost", "root", "", "tech") 
or die("Error " . mysqli_error($con));



 $last_id = mysqli_insert_id($con);

$id = 1;
 $que = "SELECT * FROM servico WHERE id_serv = '".$id."' ";
 $result = mysqli_query($con, $que);
 $row=mysqli_fetch_assoc($result);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo $row['s_image']; ?>
<div><img scr = "MYSQL/<?php echo $row['s_image']; ?>"  "> 
</div>
</body>
</html>