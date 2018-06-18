<?php

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

	public function __construct(LoggerInterface $logger){
		$this->logger = $logger;
	}

}

?>