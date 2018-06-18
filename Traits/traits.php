<?php

class abc{
	public function test(){
		echo "test function from abc <br>";
	}
}

trait test{
	public function test2(){
		echo "test2 function from test trait <br>";
	}
}

trait test2{
	public function test3(){
		echo "test3 function from test2 trait <br>";
	}
}

class one extends abc{
	use test;	
}

class two extends abc{
	use test,test2;	
}

$one = new one();
$one->test2();
$two = new two();
$two->test2();
$two->test3();