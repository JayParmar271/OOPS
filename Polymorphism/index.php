<?php

//polymorphism
function __autoload($class){
	include_once "classes/$class.php";
}

$logger = new EmailLogger();

$profile = new UserProfile($logger);

$profile->deleteUser();

?> 