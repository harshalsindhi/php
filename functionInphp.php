<?php
class oper{
 private $n1;
 private $n2;
 public function __construct($a,$b){
    $this->n1=$a;
    $this->n2=$b;
 }
 public function sum(){
    echo "The addition of number is ".($this->n1 + $this->n2);
    echo "<br>";
 }
 public function sub(){
    echo "The substraction of number is ".($this->n1 - $this->n2);
    echo "<br>";
 }
 public function mult(){
    echo "The multiplication of number is ".($this->n1 * $this->n2);
    echo "<br>";
 }
 public function div(){
    echo "The division of number is ".($this->n1 / $this->n2);
    echo "<br>";
 }
 public function show(){
    echo "n1=$this->n1 n2=$this->n2 "."<br>";
 }
}
$temp=new oper(10,20);
$temp->show();
$temp->sum();
$temp->sub();
$temp->mult();
$temp->div();

?>