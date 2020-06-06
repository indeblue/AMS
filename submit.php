<?php
session_start();
include("connection.php");
$sub=$_SESSION['subject'];

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="blaa.css" type="text/css">

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
#customers {
    
    border-collapse: collapse;
    width: 100%;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(n) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color:  #ff8400;
    color: white;
  
}
h1{
  font-family: "Comic Sans MS", cursive, sans-serif;
  
}
.button {
  background-color: #ff8400; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}


.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>

<form method ="POST">
<h1 style="color:#6919b0;">Select date : <input type="date" name="Date" /></>
<br>
<br>
<table id="customers">
  <tr>
    <th>Student</th>
    
    <th>Attendance</th>
  </tr>
  <tr>
    <td>Akshay </td>
    
    <td><input name="Akshay" placeholder="0 or 1" type="number"></td>
  </tr>
  <tr>
    <td>Gagan</td>
    
    <td><input name="Gagn" placeholder="0 or 1" type="number"></td>
  </tr>
  <tr>
    <td>Mayur</td>
   
    <td><input name="Mayur" placeholder="0 or 1" type="number"></td>
  </tr>
  <td>Kumar Sambhav</td>
    
    <td><input name="KumarSambhav" placeholder="0 or 1" type="number"></td>
  </tr>
  <td>Ranjeet Patel</td>
    
    <td><input name="RanjeetPatel" placeholder="0 or 1" type="number"></td>
  </tr>
  <td>Siddarth Mishra</td>
    
    <td><input name="SiddarthMishra" placeholder="0 or 1" type="number"></td>
  </tr>
</table>
<br>

<input name="submit" type ="submit" class="button" value="Submit Attendance" />
</form>

 </body>
</html>

<?php

if( isset($_POST['submit']))
{
  
  $data1 = $_POST['Akshay'];
  $data2 = $_POST['Gagn'];
  $data3 = $_POST['Mayur'];
  $data4 = $_POST['KumarSambhav'];
  $data5 = $_POST['RanjeetPatel'];
  $data6 = $_POST['SiddarthMishra'];
  $data7 = $_POST['Date'];
  $sql= "INSERT INTO `$sub` VALUES ('$data7','$data1','$data2','$data3','$data4','$data5','$data6')";
  $trouper =  mysqli_query($conn, $sql);
  print("<script>alert('Attendance has been recorded successfully , you can close the webpage now.');</script>");
}
?>