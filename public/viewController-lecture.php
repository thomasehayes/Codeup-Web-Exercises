<!-- for lecture purpose -->
<?php 
// controller



// A real world example
//Returns a complete name using first name and the last one(s).
function fullName($fname, $lname) {
	return $fname . " " . $lname;
}

// pageController() purpose is to prepare the variables that we want to use in the view.
function pageController() {
	// Always create an array
	$data = [];

	// Try to always make associative arrays. 
	$data['fName'] = 'Thomas';
	$data['lName'] = 'Hayes';

	$data['fullName'] = fullName($data['fName'], $data['lName']);

	$data['colors'] = ['Blue', 'Purple', 'Red', 'Black'];

	// We always want to return the whole array
	return $data;
}

// the extract makes fName and lName into variables that can be called out in the view section
extract(pageController());

?>

<!-- View -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1 {
			text-align: center;
			font-size: 150px;
		}
	</style>
</head>
<body>
	<h1> <?= $fullName; ?> </h1>
<!-- 	
	<ol>
	<?php foreach ($colors as $color) : ?>
		<li> <?= $color; ?></li>
	<?php endforeach; ?>
	</ol> 
-->

</body>
</html>