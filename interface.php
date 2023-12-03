<?php 
interface animal{
    public function sound();
} 
class dog implements animal{
    public function sound(){
 echo "bou.. bou... bou...<br>";
    }
}
class cat implements animal{
    public function sound(){
        echo "meou.. meou... meor... <br>";
    }
}
$d1=new cat();
$d1->sound();
?>