<?php

abstract class ABC{

	public abstract function xyz();

}

class BCD extends ABC{

	public function xyz(){
		echo "hello world";
	}

}

$obj = new BCD();
$obj->xyz();

?>