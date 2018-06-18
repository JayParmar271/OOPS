<?php

abstract class BaseEmployee{

	protected $firstname;
	protected $lastname;

	public function getFullName(){
		return $this->firstname . " " . $this->lastname;
	}

	public abstract function getMonthlySalary();

	public function __construct($f, $l){
		$this->firstname = $f;
		$this->lastname = $l;
	}

}

//not possible to create object of abstract class
//abstarct function must require in all child classes

class FullTimeEmployee extends BaseEmployee{

	protected $annualSalary;

	public function getMonthlySalary(){
		return $this->annualSalary / 12;
	}

}

class ContractEmployee extends BaseEmployee{

	protected $hourlyRate;
	protected $totalHours;

	public function getMonthlySalary(){
		return $this->hourlyRate * $this->totalHours;
	}

}

$fullTime = new FullTimeEmployee('FullTime','Employee');

$contract = new ContractEmployee('Contract','Employee');

echo $contract->getFullName();

?>