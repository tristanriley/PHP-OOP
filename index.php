class Harry {
	//class body
	//class body
	//class body
}

$Harry1 = new Harry();
$Harry2 = new Harry();

class Harry {
public $name = “Harry”;
public $house = “Griffindor”;
public $gender = “male”;
public $age = 11;
}

$Harry1 = new Harry();
print $Harry1->name;
// Harry

public function myMethod( $argument, $another) {
// stuff
}

$Harry1 = new Harry();
$Harry1->firstName = “Harry”;
$Harry1->lastName = “Potter”;
print “The boys’s name is {$Harry1->getName()}.”;
//The boys’s name is Harry Potter.

/////////////////////////////////////////////////////////////

class Ron {
	//class body
	//class body
	//class body
}

$Ron1 = new Ron();
$Ron2 = new Ron();

class Ron {
public $name = “Ron”;
public $house = “Griffindor”;
public $gender = “male”;
public $age = 11;
}

$Ron1 = new Ron();
print $Ron1->name;
// Ron

public function myMethod( $argument, $another) {
// stuff
}

class Ron {
	public $firstName = “Ron”;
	public $LastName = “Weasly”;
	public $house = “Griffindor”;
	public $gender = “male”;
	public $age = 11;

	function getName() {
	return “{$this->firstName}” .
	“{$this->lastName}”;
	}

}

$Ron1 = new Ron();
$Ron1->firstName = “Ron”;
$Ron1->lastName = “Weasly”;
print “The boys’s name is {$Ron1->getName()}.”;
//The boys’s name is Ron Weasly.

////////////////////////////////////////////////////////////

class Hermione {
	//class body
	//class body
	//class body
}

$Hermione1 = new Hermione();
$Hermione2 = new Hermione();

class Hermione{
public $name = “Hermione”;
public $house = “Griffindor”;
public $gender = “female”;
public $age = 11;
}

$Hermione1 = new Hermione();
print $Hermione1->name;
// Hermione

public function myMethod( $argument, $another) {
// stuff
}

class Hermione {
	public $firstName = “Hermione”;
	public $LastName = “Granger”;
	public $house = “Griffindor”;
	public $gender = “female”;
	public $age = 11;

	function getName() {
	return “{$this>
	firstName}” .
	“{$this>
	lastName}”;
	}

}

$Hermione1 = new Hermione();
$Hermione1->firstName = “Hermione”;
$Hermione1->lastName = “Granger”;
print “The girls’s name is {$Hermione1->getName()}.”;
//The girls’s name is Hermione Granger.