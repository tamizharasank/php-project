<html>
<head>
<title>IFET Updates</title>
<link href="css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<body style="background:#E6E6FA;" id="jquery-script-menu" class="jquery-script-center" class="jquery-script-ads">

    <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" name="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" name="btn-upload" type="text" placeholder="Upload one or more files">
      </div>
    </div>
  </form>


  
<center>
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

?>
<table width="100%">

<tr ><th style="border: 0px solid;text-shadow: 4px 4px;
    padding: 50px;
	border-bottom-left-radius: 1em;
	border-bottom-RIGHT-radius: 1em;
	border-top-left-radius: 1em;
	border-top-right-radius: 1em;
	font-family:Algerian;
    background: #D8BFD8;
    font-size:50pt;
    color:	#483D8B;">DEPARTMENT OF CSE</th></tr>
	<tr ><th style="border: 0px solid;
    padding: 3px;
	font-family:Algerian;
    background:FFE4E1;
    font-size:40pt;
	border-top-left-radius: 1em;
	border-top-right-radius: 1em;
    color:	#C71585;">STAFF UPDATES</th></tr>
	<tr> <td style="border: 0px solid;
    padding: 5px;
    background:	#3CB371;
    border-bottom-left-radius: 0em;
    font-size:19pt;
	font-weight:bold;
  font-family:URW Chancery L;
    color:	#FF00FF;text-align:right;"><a style="text-decoration:none;" href="admin.html"> ADMIN </a></td></tr> 
</table></center><pre>
<div class="name">
<table border=0pt; cellpadding=25px; >
<col width="170">
<col width="300">
<col width="850">
<col width="130">
<tr style=" background:	#3CB371; font-size:20pt; color:white;font-weight:bold; font-family:Forte;"><th>DATE</th><th>TOPIC</th><th>MESSAGE</th><th>ATTACHMENT</th></tr>
<?php 
#if($file==''){header("Location:index.php");} else { echo ($file);}
#echo ($file);
 $sql="SELECT *FROM pdetail img";
 $result_set=mysqli_query($conn, $sql);
 while($row=mysqli_fetch_array($result_set))
 {  $file=$row['file'];
	$message=$row['message'];
	$message=nl2br($message);
  ?>
  <tr style="font-size:14pt;font-weight:bold;background:#DCDCDC; font-family:Times New Roman; color:red;">
        <td><?php echo $row['date'] ?></td>
		 <td><?php echo $row['topic']  ?></td>
       
        <td><?php echo($message); ?></td>
		<?php if(!empty($file))
		{
			?>
			
          <td><a href="detimages/<?php echo($file); ?>" target="_blank">view file</a></td>
		<?php
		}else
		{
			
		}
		?>
		</tr>
        <?php
 }
 ?>
    
  
</table></pre>
</div>

</body>
</html>
