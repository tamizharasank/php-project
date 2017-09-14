<html>
<head>
<h1 style="font-size:25pt:font-family:Forte;color:gold;text-align:center;">INFORMATION RETRIEVE IMPLANT TRAINING</h1>
</head>
<body background=5.jpg>
<table cellpadding="20px" cellspacing="0px" border="5px" style="width:auto; margin-left:; color:red;font-weight:bold;font-size:15pt;">
<tr><th>NAME OF COMPANY</th> <th>ADDRESS</th> <th>EMAIL</th> <th>PHONE</th> <th>TRAINING ATTENDED BY</th><th> DATE FROM</th> <th>DATE TO</th> <th>SUBMIT DATE&TIME </th><th>MESSAGE</th> </tr>  

<?php  
$host = 'localhost';  
$user = 'raj';  
$pass = 'raj';  
$dbname = 'ifet';  
$drop= $_POST["drop"];
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = "SELECT * FROM cseimplant  WHERE cname='$drop'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0)
{  


 while($row = mysqli_fetch_assoc($retval))
	 { 
 echo '<tr>';
 echo '<td>'.$row['cname'].'</td><td>'.$row['address'].'</td><td>'.$row['email'].'</td><td>'.$row['phone'].'</td><td>'.$row['attendby'].'</td><td>'.$row['datef'].'</td><td>'.$row['datet'].'</td><td>'.$row['sdate'].'</td><td>'.$row['message'].'</td>';
echo '<tr>';
 
  }

}
?>
</table>
<?php	
	 
mysqli_close($conn);  
?>
</body>
</html>