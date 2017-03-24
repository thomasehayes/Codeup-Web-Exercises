<?php

var_dump($_GET);

function pageController() {
	$data = [];

	return $data;
}

extract(pageController());
?>

<!-- In this exercise we will be experimenting with sending single data values to a page. This will allow us to gain a better understanding of how data will be transmitted to our web-applications. Follow the specifications below to get started:

Create a file called counter.php using the page controller template.

In your HTML, you will need two links. One that says up and another that says down.

	Add a heading that shows a number representing the current counter value. This value will start at zero. When up is clicked, the counter value should increase; when down is clicked, it should decrease.

	The up and down links will send GET requests back to the counter page itself.

Create a function that will access the $_GET superglobal variable. It should determine what the new counter value is and return it.

Use the extract() function to change the return value of the pageController() into variables for your HTML. -->

<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
</head>
<body>
	<form action="counter.php" method="GET">

		<a href="counter.php?val=1">UP</a>
		<a href="counter.php?val=1">DOWN</a>

	</form>
</body>
</html>