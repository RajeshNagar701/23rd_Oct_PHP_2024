<?php
$a=array("name"=>"KEYUR","email"=>"raj@gmail.com","mobile"=>"124567891"); // saprate key and value 1 to make it 2 array


print_r($a);

echo "<br>";


$key_arr=array_keys($a);
$col=implode(",",$key_arr);

$value_arr=array_values($a);
$value=implode(",",$value_arr);

echo "insert into customer ($col) values($value)";

/*
foreach($key_arr as $k)
{
	echo "<p>". $k ."</p>";
}
*/


?>