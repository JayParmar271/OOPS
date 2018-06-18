<?php

trait one{
	public function test(){
		echo "Test method from one trait.";
	}
}

trait two{
	public function test(){
		echo "Test method from two trait.";
	}
}

class abc{
	use one,two{
		one::test insteadof two;
		two::test as twoTest;
	}
}

$obj = new abc; 
$obj->twoTest();
?>