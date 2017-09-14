<?php
$con=mysqli_connect("localhost","tamizh","tam");
mysqli_select_db($con,"regi");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$date=$_POST['date'];
	$q=mysqli_query($con,"insert into rem(name,phone,date)values('$name','$phone','$date')");
	if($q)
	{
		echo "registration successful";
	}
	else{
		echo "registration not allow"
	}
}
?>
<html>
<head>
</head>
<body>
<form action="" method="post">
Enter name:&nbsp;<input type="text" name="name"><br/><br/>
Enter phone:&nbsp;<input type="phone" name="phone"><br/><br/>
Enter date:&nbsp;<input type="date" name="date"><br/><br/>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>