<?php

/*
 PHP  introduces the final keyword, which prevents child classes from 
overriding a method by prefixing the definition with final. 
If the class itself is
being defined final then it cannot be extended.


*/
// provide securities to class
final class a
{
	 function test()
	{
		echo "This is final method";
	}
}
class b extends a  // extend not possible for final class
{
	function test()
	{
	 echo "This is final method of b class";
    }
}
?>