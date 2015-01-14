<?php
class Person{
	public $firstname;
	public $height;
	public $weight;
	public $hair;
	public $gender;
	public $personality;
	public $lastname;

	function __construct($firstname, $height, $weight, $hair, $gender, $personality, $lastname){
		$this->firstname = $firstname;
		$this->height = $height;
		$this->weight = $weight;
		$this->gender = $gender;
		$this->hair = $hair;
		$this->personality = $personality;
		$this->lastname = $lastname;

	} 

	function getName(){
	return "This is my" . $this->firstname .
		   " and last" . $this->lastname;
	}

}
class Me extends Person{
	function greet(){
		return $this->gender;
	}
};

$me = new Me("Me" , "mean" , "white" , "male" , 15);
print "Person 1 is a" . $me->getName();


class wolf{
	public $firstname;
	public $height;
	public $weight;
	public $hair;
	public $gender;
	public $bark;
	public $lastname;

	function __construct($firstname, $height, $weight, $hair, $gender, $bark, $lastname){
		$this->firstname = $firstname;
		$this->height = $height;
		$this->weight = $weight;
		$this->gender = $gender;
		$this->hair = $hair;
		$this->personality = $bark;
		$this->lastname = $lastname;

	} 

	function getName(){
	return "This is my wolf's" . $this->firstname .
		   " and last" . $this->lastname;
	}

}
class knine extends wolf{
	function greet(){
		return $this->gender;
	}
};

$knine = new knine("wolfy" , "bark" , "white" , "male" , 15);
print "wolf 1  is a" . $knine->getName();

class teacher{
	public $firstname;
	public $height;
	public $weight;
	public $hair;
	public $gender;
	public $personality;
	public $lastname;

	function __construct($firstname, $height, $weight, $hair, $gender, $personality, $lastname){
		$this->firstname = $firstname;
		$this->height = $height;
		$this->weight = $weight;
		$this->gender = $gender;
		$this->hair = $hair;
		$this->personality = $personality;
		$this->lastname = $lastname;

	} 

	function getName(){
	return "This is my teacher's" . $this->firstname .
		   " and last" . $this->lastname;
	}

}
class Mr. extends teacher{
	function greet(){
		return $this->gender;
	}
};

$Mr. = new Mr.("Mr." , "nice" , "black" , "male" , 5);
print "teacher 1 is a" . $->getName();

