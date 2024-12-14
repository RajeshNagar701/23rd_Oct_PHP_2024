<?php

/*
// array is collection values


$a="raj";
$b="akash";
$c="mahesh";

$names=array("Raj","akash","mahesh");   // array("0"=>"Raj","1"=>"akash","2"=>"Mahesh");


collections of values

$nemeric=array("a","b","c");  index auto generate 0

$associate=array("raj"=>"a","2"=>"b","3"=>"c");  // associate

$multidemetional=array("a","b"=>array("p","q"),"c");  // multidemetional

*/

$name="a";
$name1="b";
$name2="c";

$arr=array("a","b","c","d","e","f","g");  
print_r($arr); // array("0"=>"a","1"=>"b","2"=>"c");

echo "</br>";

echo $arr[5] . "</br>";

foreach($arr as $data)
{
	echo "<h1>". $data ."</h1>";
}


?>