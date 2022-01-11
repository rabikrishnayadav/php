<?php
include '../user/link.php';

abstract class Car
{
	// member of class

	protected $speed = 0;

	abstract public function set_speed($speed);  // abstract method only declared

	public function drive()
	{
		echo 'driving at '.$this->speed;
	}
}

// creating a object

// $c = new Car();  // here you will get error an 'can not instantiate abstract class object'.

// creating child class

class SportsCar extends Car
{
	// implement abstract method

	public function set_speed($speed)
	{
		$this->speed = $speed;
	}
}

// crating a object

$sc = new SportsCar();
$sc->set_speed(100);
$sc->drive();

?>