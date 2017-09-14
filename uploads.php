<?php
$servername = "localhost";
$username = "raj";
$password = "raj";
$db="dbtuts";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['btn-upload']))
{    
     
 $file =$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $message=$_POST['message'];
 $topic=$_POST['topic'];
 #$date=date(' d-m-Y H:m:s');
 $id=rand();
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO updates(id,topic,message,file,date) VALUES('$id','$topic','$message','$file', NOW())";
if(mysqli_query($conn, $sql)){
header("Location:option.php");	
 
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
 
}
else
	echo "File Not Upload";
?>
<html>
<header>
</header>
<body>
<a href="index.php">HOME PAGE</a>
</body>
</html>