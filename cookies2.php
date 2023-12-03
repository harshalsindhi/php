<?php
echo $_COOKIE['name'];
setcookie("name","harshal",time()-60*60*24);
?>