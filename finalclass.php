<?php 
class animal{
    public function __construct(){
        echo "animal class <br>";
    }
    public function base(){
        echo "This is Base Class <br>";
    }
    
}
 class dog extends animal{
    
    public function __construct(){
       
        echo "dog class <br>";
    }
   
    public function dog(){
    echo "This is Dog class <br>";
  }  
}
 class dogchild extends dog{
    public function __construct(){
        $this->dog();
        echo "This is dogchild <br>";
    }
    
}
$obj=new dogchild();


?>