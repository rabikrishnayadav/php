<?php
include '../user/link.php';

// creating a class

class Car
{
	// member of class

	public $name='';

	// method of class

	public function drive()
	{
		echo '<br> Car is running';
	}
}

// another child class

class newSportsCar extends Car
{
	// nothing overridden then base logic is still present
}

// child class creating

class SportsCar extends Car
{
	public function drive()  // drive method is overridden
	{
		echo '<br> SportsCar is running';
	}
}

// object is creating for two class

$nsc =new newSportsCar();
$nsc->drive();
$sc = new SportsCar();
$sc->drive();

?>