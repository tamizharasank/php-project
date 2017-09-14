<?php
$servername = "localhost";
$username = "tamizh";
$password = "tam";
$db="ifet";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$error='';
if(isset($_POST['submit'])){
	if(empty($_POST['user']) && empty($_POST['pass'])){
		$error="Username or Password is invalid";
		echo "Username and Password is invalid";
		
	}
	else
	{
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$db = mysqli_select_db($conn, "ifet");
		$query = mysqli_query($conn,"SELECT * FROM regt WHERE username='$user' AND password='$pass'");
		$rows = mysqli_num_rows($query);
		if($rows == 1){
			header("Location: cseimp.php");
		}
		else
		{
		echo '<script language="javascript">';
		echo 'alert("Username AND password is Invalid")';
		echo '</script>';
		}
		mysqli_close($conn);
	}
}
  ?>

