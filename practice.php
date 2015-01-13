<?php  
class Cat {
	public $name;
	public $breed;
	public $gender;
	public $price;

	function __construct($gender, $name, $color, $price) {
		$this->name = $name;
		$this->gender = $gender;
		$this->color = $color;
}

	function getName() {
		return “{$this->name}” .
		“{$this->color}”;
	}
}


$cat1 = new cat();
$cat1->name = “Grumpy”
$cat1->color = “blue”;

?>