<?php
include("connection.php");
session_start();
$subject=$_SESSION['subject'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Attendance</title>
<link rel="stylesheet" href="showfaculty.css">
</head>
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
p.serif {
    border-radius: 15px;
    text-align: center;
    background: #11ab6b;
    font-family: "Comic Sans MS", cursive, sans-serif;
    font-size: 45px;
    color: #000000;
    
}
#box{
  background-color: lightgrey;
  width: 600px;
  border: 15px solid #cc7f04;
  padding: 50px;
  margin: 20px;
  font-weight: bold;
text-align: center;
}
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
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

</style>
<centre> <b><p class="serif">AMS</p></b></centre>
<body>

<div id="box">
<table id ="tab">
<tr>
<!-- <th>S.No</th> -->
<th>Date</th>
<th>Akshay</th>
<th>Gagan</th>
<th>Mayur</th>
<th>Kumar Sambhav</th>
<th>Ranjeet Patel</th>
<th>Siddarth Misha</th>
</tr>
<?php

$sql = "SELECT *  FROM `" . $subject . "`";
$data=mysqli_query($conn,$sql);
$total=mysqli_num_rows($data);
// echo $total;
$result = $conn->query($sql);
// echo $result;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Date"]. "</td><td>" . $row["Akshay"] . "</td><td>". $row["Gagn"] . "</td><td>". $row["Mayur"] . "</td><td>". $row["Kumar Sambhav"] . "</td><td>". $row["Ranjeet Patel"] . "</td><td>". $row["Siddarth Mishra"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</div>
<form action="" method="POST">
<div id="buttons">
    <button class="button" type="submit" name="export"><a href="export.php">Export</a></button>

    <button class="button" ><a href="login.php">Logout</a></button>
    
</div>
</form>
</body>
</html>
