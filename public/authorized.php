<?php 
session_start();

function pageController() {
    if(!isset($_SESSION['logged_in_user'])) {
        unset($_SESSION['username']);
        header('Location: /login.php');
        exit;
    }
    return $_SESSION;
}

extract(pageController());

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
	<title>Authorized!</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Custom CSS -->
<style>
    body {
    background-image:url("img/background.jpg");
    }

    h1, h3 {
        color: white;
    }

    h1 {
        font-size: 100px;
    }
    .container{
        text-align: center;
        top: 100px;
    }
</style>

</head>
<body>
	<main class="container col-xs-6 col-md-offset-3">
		<h3>User: <?= htmlspecialchars(strip_tags($logged_in_user)); ?> 
            <br>has been
        </h3>

		<h1>Authorized</h1>

        <a href="logout.php">Logout</a>

	</main>
    
	<!-- minified jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Your custom JS goes here -->
	<script type="text/javascript"></script>
</body>
</html>