<?php 
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $file=$_FILES['file'];
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    move_uploaded_file($filepath,"./img/$filename");
    include("connection.php");
    $query="insert into file(name,email,image) values('$name','$email','$filename')";
    $q=mysqli_query($con,$query);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            padding:5px 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <form action="#" method="post" name="form" enctype="multipart/form-data">
        <h1>Enter your Details</h1>
       <input type="text" name="name" placeholder="Enter your name"><br>
       <br>
       <input type="email" name="email" id="" placeholder="Enter Your email"> 
       <br>
       <input type="file" name="file" id=""><br>
       <input type="submit" value="submit" name="submit">
    </form>
    </div>
</body>
</html>