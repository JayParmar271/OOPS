<?php

class ABC{

	public function test(){
		echo "test";
	}

}

class XYZ{

	public function testXyz(){
		echo "test xyz";
	}

}

function test1(ABC $abc){
	$abc->test();
}

$abc = new ABC();

test1($abc);

?>