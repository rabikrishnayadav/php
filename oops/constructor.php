<?php
include '../user/link.php';

// creating a class

class Cat
{
	// member of class

	private $name='';
	private $color='';

	// Constructor
	function __construct($n,$c)
	{
		$this->name=$n;
		$this->color=$c;
	}

	// method of class

	public function walk()
	{
		echo $this->color. 'cat, '.$this->name. ' is walking';
	}
}

// creating object of Cat class

$cat = new Cat('Manila','Black'); // Values are passed at the time of instantiation, constructir gets called here
$cat->walk();

?>