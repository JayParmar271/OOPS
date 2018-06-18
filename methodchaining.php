<?php

class ABC{

	public function fun1(){
		echo "fun1 of abc class";
		return $this;
		//return object for fun2;
	}

	public function fun2(){
		echo "fun1 of abc class";
		return $this;
		//return object for fun3;
	}

	public function fun3(){
		echo "fun1 of abc class";
	}
}

$obj = new ABC;
$obj->fun1()->fun2()->fun3();

?>