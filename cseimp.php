
<html>
<head>
  <style>
    .circle{
      width: 100px;
      height: 100px;
      border-radius: 60px;
      background-color: grey;
      top: 18px;
      float: right;
      left: 10px;
      right: 20px;
      overflow: hidden;
    }
    .fill{
      width: 100%;
      height: 100%;
      border-radius: 155px;
    }
    .circleoutline{
      position: relative;
      top: 5.5px;
      left: 5.5px;
      width: 295px;
      height: 295px;
      border-radius: 150px;
      -webkit-border-radius: 150px;
      border: 2px solid blue;
    }
  </style>
</head>
<body background="l.jpg">
  <div class="circle">

    <a style="text-decoration: none" href="./logout.php" class="fill">LOG OUT
      <div class="circleoutline">
    </div>
  </a></div>

<link rel="stylesheet" href="css/rose.css">
<div class="form-style-3"><center>
<p style="font-size:20pt;color:blue;"> <b>IMPLANT TRAINING</b></P></center>
<form action=" cseimplant.php" method="get">
<fieldset><legend>Personal</legend>
<label for="field1"><span>Name Of Company: <span class="required"></span></span><input type="text" class="input-field" name="name" value="" /></label>
<label for="field1"><span>Address: <span class="required"></span></span><input type="text" class="input-field" name="address" value="" /></label>
<label for="field2"><span>Email: <span class="required"></span></span><input type="email" class="input-field" name="email" value="" /></label>
<label for="field3"><span>Phone:<span class="required"></span></span><input type="text" class="input-field" name="phone" value="" /></label>
<!-- <label for="field1"><span>Training Attended By: <span class="required"></span></span><input type="text" class="input-field" name="attend" value="" /></label>
 --><label for="field1"><span>DATE:<span class="required"></span></span></label><br>
<label for="field1"><span>From:<span class="required"></span></span><input type="date" class="input-field" name="from" value="From  -   To" /></label>
<label for="field1"><span>To:<span class="required"></span></span><input type="date" class="input-field" name="to" value="From  -   To" /></label>
</fieldset>
<fieldset><legend>Message</legend>
<label for="field6"><span>Message <span class="required"></span></span><textarea name="message" class="textarea-field"></textarea></label>
<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
</fieldset>
</form>
</div>

</body>
</html>
