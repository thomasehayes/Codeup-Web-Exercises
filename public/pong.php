<?php
require_once "functions.php";
require_once "Input.php";

// on page load, set counter to 0
// make a button or link that increments the counter by 1
// make a button or link that decreases the counter by 1
// add up over time
function pageController() {
	$data = [];
	
	//if a value exists, get that value and assign to variable, else assign default value
	if (Input::has('count')) {
		$data['count'] = Input::get('count');
	} else {
		$data['count'] = 0;
	}
	return $data;
}
extract(pageController());
?>
<!DOCTYPE html>
<html lang="en-us">
<head>

	<title>Counter Example</title>

	<?php include_once "header.php"; ?>

<!-- Custom CSS -->
<style></style>
</head>
<body>
	<main class="container">
		<h1>Pong!</h1>
		<h1>Counter: <?= ($count) ?></h1>
		<a class="btn btn-primary" href="ping.php?count=<?= ($count +1) ?>">Hit</a>
		<a class="btn btn-primary" href="ping.php?count=0">Miss</a>


	</main>
	<?php include_once "footer.php"; ?>
	
</body>
</html>
