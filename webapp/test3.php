
<?php 

$con = mysqli_connect("localhost", "root", "", "tech") 
or die("Error " . mysqli_error($con));


    $gera = rand(1,2);

 $last_id = mysqli_insert_id($con);

$id = $gera;
 $que = "SELECT * FROM servico WHERE id_serv = '".$id."' ";
 $result = mysqli_query($con, $que);
 $row=mysqli_fetch_assoc($result);
	

$rand = rand(1,2);
$ids = $rand;
$sql = "SELECT * FROM servico WHERE id_serv = '".$ids."' ";
$res = mysqli_query($con, $sql);
$not = mysqli_fetch_assoc($res);



?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src="MYSQL/<?php echo $row['s_image'];?>">
<img src="MYSQL/<?php echo $not['s_image'];?>">

</body>
</html>