<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functionsemp.php");
   seguranca();
   $id = $_SESSION['user']['idemp'];
   
?>

<?php
$con = mysqli_connect("localhost", "root", "", "tech") 
or die("Error " . mysqli_error($con));

 if(isset($_POST['cover_up']))
 {

 $id = $_POST['idemp'];
 $imgFile = $_FILES['coverimg']['name'];
 $tmp_dir = $_FILES['coverimg']['tmp_name'];
 $imgSize = $_FILES['coverimg']['size']; 
 
 if(!empty($imgFile))
 {
 $upload_dir = 'MYSQL/'; // upload directory
 
 $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
 
 // valid image extensions
 $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
 
 // rename uploading image
 $coverpic = rand(1000,1000000).".".$imgExt;
 
 // allow valid image file formats
 if(in_array($imgExt, $valid_extensions)){ 
 // Check file size '5MB'
 if($imgSize < 5000000) {
 move_uploaded_file($tmp_dir,$upload_dir.$coverpic);
 }
 else{
 $errMSG = "Sorry, your file is too large.";
 }
 }
 else{
 $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; 
 }
//For Database Insertion
 // if no error occured, continue ....
 if(!isset($errMSG))
 {
 $que = "UPDATE empresa SET `b_image`='" . $coverpic . "' WHERE  `idemp`= '".$id."' ";
 if(mysqli_query($con, $que))
 {
 echo "<script type='text/javascript'>alert('Posted succesfully.');</script>";
 }
 else
 {
 echo "<script type='text/javascript'>alert('error while inserting....');</script>";
 }
 
 }
 
 }
}
 
 //Get Last Inserted Id
 $last_id = mysqli_insert_id($con);
 //Fetch Qquery
 $que = "SELECT * FROM empresa WHERE idemp = '$id' ";
 $result = mysqli_query($con, $que);
 $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
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

 <p><input type="submit" name="cover_up" style="background-color: rgb(255, 102, 0);" class="btn btn-warning" value="Upload"/></p>
</form>


<!--Display Image-->
<div>
 <label>Image : </label><br><img src="MYSQL/<?php echo $row['b_image']; ?> " alt="image">
</div>
</body>
</html>