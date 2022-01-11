<?php
include '../user/link.php';

// creating a interface

interface Animal
{
	public function walk(); // here is only declare the method
}

// cteating the class

class Dog implements Animal  // ' implements ' keyword is used to implement the method from the interface.
{
	public function walk() // logic is implemented here which method already delcare in interface.
	{
		echo ' walking ';
	}
}

// creating a object of class
$dog = new Dog();
$dog->walk();

?>