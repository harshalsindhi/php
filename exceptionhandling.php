<?php 
$a=12;
$b=0;
try{
    if($b==0){
        throw new Exception("Can't divide by zero");
    }
    echo "ans ".$a/$b;
}catch(Exception $e){
    echo $e->getMessage();
}
?>