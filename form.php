<?php
$servername = "localhost";
$username = "tamizh";
$password = "tam";
$db="ifet";
$pname=$_POST["uname"];
$cname=$_POST["pass"];
$dname=$_POST["rpass"];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO regt(username,password,repassword) VALUES ('$pname','$cname','$dname')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

