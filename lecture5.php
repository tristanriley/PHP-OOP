<?php

class Pet {
	public $firstname;
	public $lastname;
	public $gender;
	public $weight;
	public $breed;

	function__construct($firstname,$lastname,$gender,$weight,$breed) {
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->breed = $breed;
	}

	function getName(){
		return "This is " . $this->firstname . $this->lastname . " and its a " . $this->breed. ".";
	}
}
class hamster extends Pet {
	function__construct($firstname,$lastname,$gender,$weight,$breed)
	parent::__construct($firstname,$lastname,$gender,$weight,$br);
	$this->weight = $weight;
}
function newpet(){
	return $this->gender;
}

class dog extends Baby {
	function__construct($firstname,$lastname,$gender,$weight,$breed);
	parent::__construct($firstname,$lastname,$gender,$weight,$bree);
	this->gender =$gender;
}

$hamster = new hamster("male","small","gray","male", 2 true);
print "Pet 1 is a " . $hamster->getName();