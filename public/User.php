<?php 
//each class has its own filename of the same name as the class
//they are both capitalized or StudlyCase
class User {
	public $username;
	public $password;

	public function isAdmin() {
		if ($this->username == "admin") {
			return true;
		} else {
			return false;
		}
	}

	public function attempLogin($username, $password) {
		if($this->username == $username && $this->password == $password) {
			return true;
		} else {
			return false;
		}
	}
}

?>