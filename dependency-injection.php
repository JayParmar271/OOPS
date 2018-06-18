<?php

class Logger{

	public function log($message){
		echo "Logging message : $message";
	}

}

$logger = new Logger();

$logger->log("This is a message.");

class UserProfile
{

	private $logger;
	
	public function createUser(){
		//create user
		$this->logger->log("User Created");
	}

	public function updateUser(){
		//update user
		$this->logger->log("User updated");
	}

	public function deleteUser(){
		//delete user
		$this->logger->log("User Deleted");
	}

	public function __construct(Logger $logger){
		$this->logger = $logger;
	}

}

$logger = new Logger();

$profile = new UserProfile($logger);

$profile->createUser();

$profile->updateUser();

$profile->deleteUser();

?>