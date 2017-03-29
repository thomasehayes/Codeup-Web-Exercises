<?php 
require_once "functions.php";
session_start();

// get the current session ID
$sessionId = session_id();

$message = "";
// check if the form was submitted
if(!empty($_POST)) {
	$username = inputGet('username');
	$password = inputGet('password');
	if($username == "guest" && $password == "password") {
		$_SESSION['logged_in_user'] =$username;
		header("Location: /authorized.php");
		exit;
	} else {
		$message = "Either username or password were incorrect";
		
	}
}

?>

<!DOCTYPE html>
<html lang="en-us">
<head>

	<title>Login</title>
	<<?php include_once "header.php"; ?>
<!-- Custom CSS -->

<style>
	body {
		background-image:url("img/background.jpg");
		overflow-y:hidden;
		overflow-x:hidden;
	}

	.white {
		color: white;
	}

	main {
		top: 100px;
		left: 100px;
	}

</style>


</head>
<body>
	<main class="container col-xs-6 col-md-offset-4" >
		<h1 class="white">Login to gain access!</h1>
		<p class="white"><?= escape($message); ?></p>

		<form action="/login.php" method="POST" class="col-xs-4">
			<div class="form-group">
		    	<label for="username" class="white">Username</label>
		    	<input type="text" name="username" class="form-control" id="username" placeholder="Username">
		  	</div>
		  	<div class="form-group">
    			<label for="password" class="white">Password</label>
    			<input type="password" name="password" class="form-control" id="password" placeholder="Password">
  			</div>
  			<button type="submit" class="btn btn-default">Login</button>
		</form>
	</main>

     <?php include_once "footer.php"; ?> 
</body>
</html>