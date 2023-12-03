<?php 
setcookie("name","harshal",time()+60*60*24);
if($_COOKIE["name"]){
    echo "cookie is set ".$_COOKIE['name']."<br>";
}
?>