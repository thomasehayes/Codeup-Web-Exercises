JavaScript Object's Review

var car = {
	"miles": 50000,
	"make": "Hyundai",
	"model": "Sonata",
	"speed": 0,
	"accelerate": function() {
		this.speed++;
		this.miles++;
	},
	"brake":function() {
		this.speed = 0;
	}
}
console.log(car.miles)
console.log(car.speed)
car.accelerate()
console.log(car.speed)
console.log(car.miles)

objects bundle together behavior and data
object behavior == functions == methods
object's data == properties

PHP OBJECTS AND HOW THEY ARE DIFFERENT
<?php 
	$car = new stdClass();
	$car->make = "Hyundai";
	$car->model = "Sonata";

?>

// Object Oriented Programming
represent real physical processes in software
"strings", true
in PHP, object is a data type
each object is a type of class
Classes are blueprints for objects

function definitions are to classes
as function calls are to objects


function add($a, $b) {
	return $a + $b;
}
add(1,2);
// classes define properties and methods
// think of objects as the "return value" of classes

to define a class
public means other files can see this class. 
<?php 

public class User() {
	$username = "admin";
	$password = "password";

	function isAdmin() {
		if ($this->username == "admin") {
			return true;
		} else {
			return false;
		}
	}

	function attempLogin($username, $password) {
		if($this-username == $username && $this->password == $password) {
			return true;
		} else {
			return false;
		}
	}
}

?>



