<?php
session_start();
if(isset($_SESSION['fname'])){
    
}else{
    header("location:loginwindow.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to Home page <?php echo $_SESSION['fname'];?></h1>
</body>
</html>