<?php 

interface abc{

	public function test();

	public function xyz();

}

class def implements abc{

	public function test(){
		echo "test";
	}

	public function xyz(){
		echo "xyz";
	}

}

//multi class extends using only by interface not by class
//not possible to make variables and constructor in interface
//only public function declaration possible in interface

interface a{
	public function abc();
}

interface b{
	public function xyz();
}

class c implements a,b{
	 public function abc(){
	 	echo "abc";
	 }

	 public function xyz(){
	 	echo "xyz";
	 }
}

?>