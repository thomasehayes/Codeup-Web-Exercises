<?php 
require_once "Log.php";

class Auth {

	public $username;
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public static function attempt($username, $password) 
	{
		if($username == "guest" && password_verify($password, self::$password)) {
			$_SESSION['logged_in_user'] = $username;
			header("Location: /authorized.php");
			exit;
		} 
	}

	// public static function check()
	// {
		// if($username == "guest" && $password == $this->password) {
		// 	$_SESSION['logged_in_user'] = $username;
		// 	header("Location: /authorized.php");
		// 	exit;
		// } else {
		// 	$message = "Please Log In.";
		// }
	// }
	// public static function user() 
	// {

	// }

	public static function logout()
	{
	    // clear $_SESSION array
	    session_unset();

	    // delete session data on the server
	    session_destroy();

	    // ensure client is sent a new session cookie
	    session_regenerate_id();

	    // start a new session - session_destroy() ended our previous session so
	    // if we want to store any new data in $_SESSION we must start a new one
	    session_start();
	}

}

?>