<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<style>
body {
  background-image: url('qwe.jpg');
  min-height: 380px;
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
  width: 300px;
  border: 15px solid #cc7f04;
  padding: 50px;
  margin: auto;
  font-weight: bold;
  text-align: center;
 
 
}
#details{
    background-color: lightgrey;
  width: 310px;
  border: 15px solid #cc7f04;
  padding: 10px;
  margin: 20px;
  font-weight: bold;
text-align: center;
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
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}

</style>
<centre> <b><p class="serif">AMS</p></b></centre>
<body>


<?php
include("connection.php");
session_start();
$id=$_SESSION['user_name'];

error_reporting(0);
$q1="SELECT * from student where username=`$id`";
$d1=mysqli_query($conn,$q1);
$res=mysqli_fetch_assoc($d1);

echo "<div id='details'><span id='stu_name'>Student Name : $id </span>".$res['name']." </span></div>";


$sub = array("CS", "COA", "IT","EE");


foreach($sub as $value)
{
    ?>
    <div id="box" >
    <?php
    $query="SELECT * from `$value`";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    echo "<span>Subject : $value</span>";
    if($total!=0)
    {
        ?>
        <table>
            <tr>
                <td>Date</td>
                <td>Attendance</td>
            </tr>    
        <?php
        $sum=0;
        // echo "Table has records ";
        while($result=mysqli_fetch_assoc($data))
        {
            echo    "<tr>
                        <td>".$result['Date']."</td>
                        <td>".$result['Akshay']."</td>
                        
                        
                    </tr> " ;
                    $sum += $result['Akshay'];
        }
        echo    "<tr id='''total'''>
        <td id='''total'''>"."Total Attendance"."</td>
        <td id='''total'''>".$sum."</td>
        
        
    </tr> " ;
    }
    else {
        echo " Table do not have records";
    }
    
    ?>
   
    
    </table>
    </div>
    
    <?php
        
    
}
?>
            <div id="button" >
                <button class="button" onclick="window.location.href ='login.php';">Logout</button>
            </div>


</body>
</html>
