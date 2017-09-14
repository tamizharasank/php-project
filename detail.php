
<?php
$servername = "localhost";
$username = "tamizh";
$password = "tam";
$db="ifet";

$name=$_POST["fname"];
$clgname=$_POST["clg"];
$dept=$_POST["dept"];
$deg=$_POST["cource"];
$adjun=$_POST["adjunct"];
$presentdes=$_POST["pdesign"];
$address=$_POST["address"];
$dt=$_POST["district"];
$tphone=$_POST["tno"];
$mphone=$_POST["mno"];
$email=$_POST["email"];
$communit=$_POST["comm"];
$pan=$_POST["pno"];
$passport=$_POST["pasno"];
$aadhar=$_POST["aano"];
$facoe=$_POST["fcoe"];
$faaic=$_POST["faic"];
$dob=$_POST["dte"];
$age=$_POST["ag"];


// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO pdetail(faname,clg,dept,deg,regular,present,address,district,telno,phone,email,community,pan,passport,aadhar,facoe,faaic,dob,age) VALUES ('$name','$clgname','$dept','$deg','$adjun','$presentdes','$address','$dt','$tphone','$mphone','$email','$communit','$pan','$passport','$aadhar','$facoe','$faaic','$dob','$age')";  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
  ?>

