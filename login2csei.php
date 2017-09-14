<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>RETRIEVE</title>
  <link rel="stylesheet" href="css/style.css">
 </head>

  <body>
<div class="pen-title">
  <h1>Material RETRIEVE Form</h1>
<div class="rerun"><a href="index.html">RETURN HOME</a></div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title"></h1>
	<?php  

$host = 'localhost';  
$user = 'raj';  
$pass = 'raj';  
$dbname = 'ifet';  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  

$result = $conn->query("select cname from cseimplant");
?>
	
    <form action="dropcse1.php" method="post">
	<select name="drop" >
	<?php
while ($row = $result->fetch_assoc()) 
{
	
	$cname = $row['cname'];
	?>
	<?php
	 echo '<option value="'.$cname.'">'.$cname.'</option>'; ?>
	<?php
	}
	?>
	</select>&nbsp;
      <div class="input-container">
        
        
        <div class="bar"></div>
      </div>
      
      <div class="button-container">
        <button><span><font size="10pt">Go</font></span></button>
      </div>
      </form>
  </div>
  

    
    
    
  </body>
</html>
