<?php

/*

 useful in reduce reusable code and remove inheritance multiple
PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

Traits are declared with the trait keyword:

To use a trait in a class, use the use keyword:
*/

trait abc
{
	public function test()
	{
		echo "This is test method";
	}
}
trait xyz
{
	public function sample()
	{
		echo "this is sample method";
	}
}

class c  
{
	use abc,xyz;  // multiple inherit 
}

$obj=new c();
$obj->test();
$obj->sample();

?>