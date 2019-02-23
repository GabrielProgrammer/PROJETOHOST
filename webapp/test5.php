<?php
$con = mysqli_connect("localhost", "root", "", "tech") 
or die("Error " . mysqli_error($con));

$gera = rand(1,2);
$id = $gera; // Assign the id you want to get from the database (I can't tell you how as not sure how you are sending data to this page
$order = "SELECT * FROM servico WHERE id_serv='".$gera."'".
$result = mysql_query($con, $order);
$name = $result['serv'];
$address = $result['descr'];
?>
<p>Name: <span style="text-decoration:underline;"><?php echo $name; ?></p>
<p>Address: <?php echo $address; ?></p>