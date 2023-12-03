<?php
$arr=array("harshal","prakash","sindhi");
$brr=array("harshal","prakash","dhinglani");
foreach($arr as $ele){
    echo "$ele ";
}
$len=sizeof($arr);
echo "<br>";
echo "The length of the arr is $len"."<br>";
for($i=0;$i<$len;$i++){
    echo $arr[$i]." ";
}
$diff=array_diff($brr,$arr);
echo "<br>";
print_r($diff);
echo "<br>";
$intersect=array_intersect($arr,$brr);
print_r($intersect);
array_push($arr,"(dhinglani)"," holnanthe");
echo "<br>";
print_r($arr);
$rev=array_reverse($arr);
echo "<br>";
print_r($rev);
$assoc=array("harshal"=>"holnanthe","dinesh"=>"mohida","ganesh"=>"ajnad","Tushar"=>"balde");
echo "<br>";

foreach($assoc as $key=>$value){
    echo " [ ".$key."=>".$value." ] ";
}
?>