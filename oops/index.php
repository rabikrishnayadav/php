<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Oops</title>
	<?php include '../user/link.php' ?>
</head>
<body>
	<h1 class="text-center font-weight-bold bg-warning">Object Oriented PHP</h1>
	<div class="container">
		<ul>
		<h3>Some Topics Of Object Oriented php</h3>
		<li>Class</li>
		Class: blueprint if Objects<br>
		Example: Class Car depicting cars<br>
		<li>Object</li>
		Object : real world thing properties(data) and show behaviours(methods)<br>
		Example: car having name and drive behaviour<br>
		<li>Inheritance</li>
		Dfn: A Class can be created from an existing class and gets public members from the existing class.<br>
		Existing class is known as base or super class.<br>
		New Class is known as child or derived class.<br>
		<li>Constructor</li>
		It is a special method which gets called at the time of instantiating object.<br>
		It is used for initialize objects<br>
		<li>Method Overriding</li>
		A base method can be overridden in derived i.e. base functionality gets overridden in derived class<br>
		<li>Interface</li>
		<li>Abstract Class & Method</li>
		<li>Access Modifiers</li>
	</ul>
	</div><br><hr><br>
	<div class="container">
		<h4>Class and Object</h4>
		Example:<br>
		<code>
			// Create Class<br>
			Class Car<br>
			{<br>
				// data members<br>
				public $name = '';<br>
				// methods<br>
				public function drive(){<br>
					echo $this->name.'is being driven';<br>				}
			}<br>
			// Create Object<br>
			$carjObj = new Car(); // ' new ' keyword asks php to create object<br>
			$carjObj->name='Rabi'; // ' -> ' This is a object operator is used to access members of class<br>
			$carjObj->drive();<br>
		</code>
	</div><br><hr><br>
	<div class="container">
		<h4>Inheritance</h4>
		Example:<br>
		<code>
			// Creating New Class it's super(or base) class<br>
			class Car{<br>
				// member of class<br>
				public $name='';<br>
				//method of class<br>
				public function drive(){<br>
					echo 'driving ';}<br>
			}<br>
			// SportsCar is derived(or child) class<br>
			class SportsCar extends Car  // ' extends ' keyword is used to inherit base class members and methods.<br>
			{<br>
				// member of class<br>
				public $maxSpeed = 0; // derived class can have it's own member<br>
				// method of class<br>
				public function describe(){<br>
					echo ' the name of the sports car is '.$this->name; // name is inherited form the super class<br>
				}<br>
			}<br>
			// Creating Object<br>
			$sportsCar = new SportsCar();<br>
			$sportsCar->name='BMW';<br>
			$sportsCar->drive();<br>
			$sportsCar->describe();<br>
		</code>
	</div><br><hr><br>
	<div class="container">
		<h4>Constructor</h4>
		Example:<br>
		<code>
			// creating a class<br>
			class Cat{<br>
				// member of class<br>
				private $name='';<br>
				private $color='';<br>
				// Constructor<br>
				function __construct($n,$c){<br>
					$this->name=$n;<br>
					$this->color=$c;<br>
				}<br>
				// method of class<br>
				public function walk(){<br>
					echo $this->color. 'cat, '.$this->name. ' is walking';<br>
				}<br>
			}<br>
			// creating object of Cat class<br>
			$cat = new Cat('Manila','Black'); // Values are passed at the time of instantiation, constructir gets called here<br>
			$cat->walk();<br>
		</code>
	</div><br><hr><br>
	<div class="container">
		<h4>Method Overridding</h4>
		Example:<br>
		<code>
			// creating a class<br>
			class Car{<br>
				// member of class<br>
				public $name='';<br>
				// method of class<br>
				public function drive(){<br>
					echo '<br> Car is running';}<br>
			}<br>
			// another child class<br>
			class newSportsCar extends Car{<br>
				// nothing overridden then base logic is still present<br>
			}<br>
			// child class creating<br>
			class SportsCar extends Car{<br>
				public function drive(){  // drive method is overridden<br>
					echo '<br> SportsCar is running';}<br>
			}<br>
			// object is creating for two class<br>
			$nsc =new newSportsCar();<br>
			$nsc->drive();<br>
			$sc = new SportsCar();<br>
			$sc->drive();<br>
		</code>
	</div><br><hr><br>
</body>
</html>