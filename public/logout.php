<?php 
require_once "functions.php";
require_once "../Auth.php";
session_start();

function pageController() {
    Auth::logout();  
}

pageController();

?>

<!DOCTYPE html>
<html lang="en-us">
<head>

    <title>Logout</title>
    <?php include_once "header.php"; ?>

<!-- Custom CSS -->

<style>

    body {
        background-image:url("img/background.jpg");
        overflow-y:hidden;
        overflow-x:hidden;
    }
    h1 {
        color: yellow;
        font-size: 100px;
    }
    .container {
        text-align: center;
    }
</style>

</head>

<body>

    <div class="container">
        <h1>You are Logged Out!</h1>
        <a href="/login.php">Click here to return to Login Page!</a>
	</div>

     <?php include_once "footer.php"; ?> 
</body>
</html>