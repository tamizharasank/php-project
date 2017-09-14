<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Material Login Form</title>


    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">





  </head>

  <body>
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
			header("Location: form11.php");
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




<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1> Login </h1><span><i class=''></i>  <a href=''></a></span>
</div>
<div class=""><a href=""></a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="input-container">
        <input type="text" id="Username" name="user" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="pass" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="submit"><span>Login</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="form.php" method="POST">
      <div class="input-container">
        <input type="text" id="Username" name="uname" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="pass" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" name="rpass" required="required"/>
        <label for="Repeat Password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" value="Register"><span>Register</span></button>
      </div>
    </form>
  </div>
</div>
<!-- Portfolio-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>



  </body>
</html>
