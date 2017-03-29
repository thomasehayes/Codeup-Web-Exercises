<?php 
require_once "functions.php";
session_start();

function clearSession()
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
clearSession();

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