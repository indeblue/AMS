<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
<link href ="takeaa.css" rel ="stylesheet" type = "text/css">

</head>
<body>
<style>
body {
  background-image: url('qwe.jpg');
  
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>

<centre>
<h1>


</h1>
</centre>
<div id="container-login">

 <div id="title">
            AMS PORTAL
        </div>


<div class="input">
<form action="" method="post">
<label for="subject">YOUR SUBJECT:</label>

<select name="subject">
  <option value="cs">CS</option>
  <option value="coa">COA</option>
  <option value="it">IT</option>
  <option value="ee">EE</option>
</select>
</div>
<br>
<br>
    <button type="submit" name="submit" >Take Attendence</button>
    <br>
    <br>
    <button type="submit" name="submit1" >View Attendence Link</button>
	</form>
<div>

</div>
</DIV>
<body>
</html>

<?php
if( isset($_POST['submit']))
{
  $_SESSION['subject']=$_POST['subject'];
  header('location:submit.php');
}

else if( isset($_POST['submit1']))
{
  $_SESSION['subject']=$_POST['subject'];
  header('location:showf.php');
}
?>