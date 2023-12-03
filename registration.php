<?php
session_start();
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = mysqli_connect("localhost", "root", "", "formdata");
   
    $query = "insert into form(fname,lname,phone,email,password) values('$fname','$lname','$phone','$email','$password')";
  $q=mysqli_query($con,$query);
    $_SESSION['name']=$fname;
  header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <form action="#" method="post" name="reg_form">
            <h1>Register here</h1>
            <input type="text" name="fname" class="name" placeholder="Enter first Name" />
            <br>
            <input type="text" name="lname" class="name" placeholder="Enter last Name" />
            <br>
            <input type="number" name="phone" id="" class="name" placeholder="Enter Phone">
            <br>
            <input type="email" name="email" class="name" placeholder="Enter Your email" />
            <br>
            <input type="password" name="password" class="name" placeholder="Enter Password" />
            <input type="submit" value="Reigister" class="btn" name="submit">
        </form>
    </div>
</body>

</html>