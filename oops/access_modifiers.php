<?php
include '../user/link.php';

// 1) public access modifier
// crating a class
class Student
{
	// member of class	
	public $fname = '';
	// method of class
	public function display()
	{
		echo 'My name is ' .$this->fname;
	}
}

// creating a object

$carjObj = new Student();
$carjObj->fname = 'Rabi';
$carjObj->display();


// 2) private access modifier

class Students
{
	// member of class	
	private $mname = '';
	// method of class
	private function display()
	{
		echo '<br> My middle name is ' .$this->mname;
	}
}

// creating object

$carjObj = new Students();
$carjObj->mname = 'Krishna';
$carjObj->display(); // here you will get an error 'Cannot access private property Students::$mname'. because of mname is private

// 3) protected access modifier

class Std
{
	// member of class
	protected $lname ='';
	// method of class
	protected function display(){
		echo '<br> My Last name is ' .$this->lname;
	}
}

// creating object

$stdObj = new Std();
$stdObj->lname = 'Yadav';
stdObj->display(); // here also you will get an error 'Cannot access protected property'.

?>