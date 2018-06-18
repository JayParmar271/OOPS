<?php

/**
 * 
 */
class abc 
{
	public static $data = 'static data';

	public static function xyz(){
		echo 'xyz';
	}
}

// echo abc::$data;
// abc::xyz();

/**
 *  
 */
class House
{
	
	public static $size;

	public static function getSize(){
		return self::$size;
	}

	public static function setSize($s){
		self::$size = $s;
	}

}

// House::setSize(1200);
// echo House::getSize();

//for object count
class abc1{

	public static $objectCount = 0;

	public static function getCount(){
		return self::$objectCount;
	}

	public function __consturct(){
		self::$objectCount++;
	}

}

class xyz1 extends abc1{

	public static function getCount(){
		parent::getCount();
		//new functionality here.
	}

}


$a = new abc1();
$b = new abc1();
$c = new abc1();

echo abc1::getCount();

?>