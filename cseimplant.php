
<?php
$servername = "localhost";
$username = "tamizh";
$password = "tam";
$db="ifet";
$cname=$_GET["name"];
$address=$_GET["address"];
$email=$_GET["email"];
$phone=$_GET["phone"];
// $attendby=$_GET["attend"];
$datef=$_GET["from"];
$datet=$_GET["to"];
$sdate=date(' Y-m-d h:m:sa');
$message=$_GET["message"];







// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO cseimp(address,cname,email,phone,datef,datet,sdate,message) VALUES ('$address','$cname','$email','$phone','$datef','$datet','$sdate','$message')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

