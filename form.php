<?php 
session_start();
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
   $con=mysqli_connect("localhost","root","","formdata");
   $query="select * from form where email='$email' and password='$pass'";
   $q=mysqli_query($con,$query);
   $rows=mysqli_num_rows($q);
   echo $rows;
   if($rows==1){
    $row=mysqli_fetch_assoc($q);
    $_SESSION['name']=$row['fname'];
    header("location:home.php");
   }else{
 header("location:form.php");
   }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <form action="#" name="f1" method="POST">
       <h1>Login here</h1>
            <input type="text" class="input" name="email" placeholder="Enter Email">
            <br>
            <input type="password" class="input" name="password" placeholder="Enter Password">
            <br>
            <input type="submit" class="btn" name="submit">
            <a href="registration.php">Don't have an account</a>
        </form>
    </div>
</body>

</html>