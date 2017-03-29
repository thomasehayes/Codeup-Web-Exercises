<?php 
require_once "functions.php";
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

	<title>Authorized!</title>
    <?php include_once "header.php"; ?>

<!-- Custom CSS -->
<style>
    body {
    background-image:url("img/background.jpg");
    overflow-y:hidden;
    overflow-x:hidden;
    }

    .font-color {
        color: yellow;
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

        <h1 class="font-color">Welcome</h1>
		<h2 class="font-color"><?= escape($logged_in_user); ?> </h2>

        <a href="logout.php">Logout</a>

	</main>

     <?php include_once "footer.php"; ?>   
</body>
</html>