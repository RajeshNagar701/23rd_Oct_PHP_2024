<?php

/*

In PHP, destructor method is named as __destruct. 
During shutdown sequence too, objects will be destroyed. 
Destructor method doesn't take any arguments, 
neither does it return any data type


*/

class a
{
    
    function __construct()
    {
        echo "I'm alive! <br>";    
	}
   
    function __destruct()// object() destroy & call in last
    {
        echo "I'm dead now <br>";
    }
	function display()  
    {
        echo "I'm display now <br>";
    }
	
}

$a = new a();
$a->display();

?>