<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functionsemp.php");
   seguranca();
   $username = $_SESSION['user']['username'];
   $nome = $_SESSION['user']['nome'];
   $email = $_SESSION['user']['email'];
   $endereco = $_SESSION['user']['endereco'];
   //ISSO DEVE ESTAR NO INICIO DE CADA PÁGINA QUE O USUÁRIO USAR APÓS O LOGIN
?>

<?php

 

 if(isset($_POST['update']))
 {
     
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $databaseName = "tech";
    
    $connect = mysqli_connect($hostname, $user, $password, $databaseName);
    
  
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $fundador = $_POST['fund'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $sobre = $_POST['sobre'];
    
            
    
    $query = "UPDATE `empresa` SET `nome`='".$nome."',`cnpj`='".$cnpj."',`email`='".$email."',`endereco`='".$endereco."',`estado`='".$estado."',`telefone`='".$telefone."',`bairro`='".$bairro."',`cidade`='".$cidade."',`fund`='".$fundador."', `sobre`='".$sobre."', `senha`='".$senha."'   WHERE `username`='".$username."'";
    
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

<!DOCTYPE html>
<html>
        <head>
        
    </head>

    <body>

        
        <form action="editemp.php" method="post">

            Nome da Empresa:<input type="text" name="nome" ><br>
            Senha:<input type="text" name="senha" ><br>
            Fundador:<input type="text" name="fund" ><br>
            Email:<input type="text" name="email" ><br>
            CNPJ:<input type="text" name="cnpj" ><br>
            Endereço:<input type="text" name="endereco" ><br>
            Estado:<input type="text" name="estado" ><br>
            Cidade:<input type="text" name="cidade" ><br>
            Bairro:<input type="text" name="bairro" ><br>
            Telefone:<input type="text" name="telefone" ><br>
            Sobre: <input type="text" name="sobre" ><br>
 <tr>
     <td>
      <label >Users</label>
     </td>
     <td align="left">
      <select name="username"> 
      <option><?php echo $username?></option>  
     </select>
     </td>
    </tr>

            <input type="submit" name="update" value="Update Data">

         </form>

    </body>


</html>