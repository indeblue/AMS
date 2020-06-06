<?php
session_start();
include("connection.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
   
    <link rel="stylesheet" href="login1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
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
p.serif {
    border-radius: 15px;
    text-align: center;
    background: #11ab6b;
    font-family: "Comic Sans MS", cursive, sans-serif;
    font-size: 45;
    color: #000000;
}

</style>
<centre> <b><p class="serif">AMS</p></b>
    <div id="container-login">
        <div id="title">
            Login
        </div>

        <form action="" method="post">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input type="text" name="username" placeholder="Username" value="">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input name="password" placeholder="Password" type="password" value="" >
            </div>
			<br>
			<br>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>
            <br>
			<br>
            <input type="submit" name="submit" value="Log In" />
        </form>
        <?php
        if ($_POST)
{
    $user = $_POST['username'];
    $pwd  = $_POST['password'];
    $query ="SELECT *FROM user WHERE username ='$user' and password ='$pwd'";
    $data  = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
        $_SESSION['user_name']=$user;
       // echo "fac";
         
        header('location:takea.php');
    }
    
    $query1 ="SELECT *FROM student WHERE username ='$user' and  password ='$pwd'";
    $data1  = mysqli_query($conn, $query1);
    $total1 = mysqli_num_rows($data1);
    if($total1==1)
    {
        $_SESSION['user_name']=$user;
        
        header('location:showstudent.php');
    }
    else
    {
        echo "login failed";
    }

}
?>
</div>
</body>

</html>


