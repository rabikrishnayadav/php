<?php include '../user/link.php';

// Create Class

Class Car
{
	// data members
	public $name = '';

	// methods
	public function drive()
	{
		echo $this->name.' is being driven';
	}
}

// Create Object

$carjObj = new Car(); // ' new ' keyword asks php to create object
$carjObj->name='Rabi'; // ' -> ' This is a object operator is used to access members of class
$carjObj->drive();

?>