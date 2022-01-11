<?php
include '../user/link.php';

// Creating New Class it's super(or base) class

class Car
{
	// member of class
	public $name='';

	//method of class

	public function drive()
	{
		echo 'driving ';
	}
}

// SportsCar is derived(or child) class

class SportsCar extends Car  // ' extends ' keyword is used to inherit base class members and methods.
{
	// member of class
	public $maxSpeed = 0; // derived class can have it's own member

	// method of class
	public function describe()
	{
		echo ' the name of the sports car is '.$this->name; // name is inherited form the super class
	}
}

// Creating Object

$sportsCar = new SportsCar();
$sportsCar->name='BMW';
$sportsCar->drive();
$sportsCar->describe();

?>