<?php
session_start();
if(isset($_POST['submit'])){
    echo "in the block";
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo " email is $email $password";
    include 'connection.php';
$query="select * from form where email='$email' and password='$password' ";
$q=mysqli_query($con,$query);


$count=mysqli_num_rows($q);

echo " count $count";

if($count==1){
    echo "code executed";
    $row=mysqli_fetch_array($q);
    $_SESSION["fname"]=$row['fname'];
     header("location:home.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
           border:2px solid red;
           width:250px;
           background:aqua;
           padding:20px;
        }
        input{
            padding:5px 10px;
            border:2px solid black;
        }
    </style>
</head>
<body>
    <center>
    <form action="loginwindow.php" method="post" name="form">
        <h1>Login here</h1>
        <input type="email" name="email" id="" placeholder="Enter your Email"><br><br>
        <input type="text" name="password" id="" placeholder="Enter your Password"><br><br>
        <input type="submit" value="submit" name="submit">
    </form>
    </center>
    
</body>
</html>