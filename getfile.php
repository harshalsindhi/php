
<?php
include("connection.php");
$query="select * from file";
$q=mysqli_query($con,$query);
// while($row=mysqli_fetch_assoc($q)){
//     echo "<div class='img'>";
    
//     echo "</div>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height:300px;
            width:200px;
        }
        .d-flex{
            display:flex;

            
            
        }
    </style>
</head>
<body>
    <h1>Images in the database</h1>
    <div class="d-flex">
    <?php
    
    while($row=mysqli_fetch_assoc($q)){
    $image=$row['image'];
    ?>
    <div class="img">
    <img src="./img/<?php echo $image?>" alt="">
    </div>
    <?php }?>
    </div>
    
</body>
</html>