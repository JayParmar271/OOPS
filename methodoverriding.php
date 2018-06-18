<?php

class Base{
	public function test(){
		echo "ABC method from Base class.";
	}
}

trait test{
	public function test(){
		echo "ABC method from test trait.";
	}
}

class child extends Base{
	use test;

	public function test(){
		echo "ABC method from child class.";
	}
}

$obj = new child;
$obj->test();

?>