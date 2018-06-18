<?php

class DB{

	protected static $table = 'basetable';

	public function select(){
		echo "SELECT * FROM " . static::$table;
	}

	public function insert(){
		echo "INSERT INTO " . static::$table;
	}
}

class abc extends DB{

	protected static $table = 'abc';

}

class userAccounts extends DB{

	protected static $table = 'useraccounts';

}

$abc = new abc;
$abc->select();
echo "<br>";
$useraccounts = new userAccounts;
$useraccounts->select();

?>