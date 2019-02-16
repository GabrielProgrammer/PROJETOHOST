<?php

 

 if(isset($_POST['update']))
 {
     
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "tech";
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
  
    $senha = $_POST['senha'];

    
            
    
    $query = "UPDATE `empresa` SET `nomeemp`='".$nome."' WHERE `username`='".$username."'";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    mysqli_close($connect);
 }

 ?> 
