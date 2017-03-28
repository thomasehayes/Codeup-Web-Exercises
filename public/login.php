<?php 

session_start();

// get the current session ID
$sessionId = session_id();

$message = "";
// check if the form was submitted
if(!empty($_POST)) {
	$username = isset($_POST['username']) ? $_POST['username'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";
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
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="">
	<meta name="Keywords" content="">
    <meta name="author" content="">
	<title>Login</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
		<p class="white"><?= htmlspecialchars(strip_tags($message)) ?></p>

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

	<!-- minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Your custom JS goes here -->
	<script type="text/javascript"></script>
</body>
</html>