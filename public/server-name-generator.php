<?php 

function randomAdjectives() {
	$adjectives = ['spotty', 'giant', 'chunky', 'blue-eyed', 'dazzling', 'earsplitting', 'knowledgeable', 'berserk', 'godly', 'tiny'];
	$randomAdj = array_rand($adjectives);
	return $adjectives[$randomAdj];
}

function randomNouns() {
	$nouns = ['afterthought', 'downtown', 'car', 'snail', 'airport', 'morning', 'beginner', 'payment', 'beef', 'dinosaurs'];
	$randomNoun = array_rand($nouns);
	return $nouns[$randomNoun];
	
} 

// function randomServerName() {
// 	return randomAdjectives() . " " . randomNouns();
// }

function pageController() {
	$data = [];

	$data['randomServerName'] = randomAdjectives() . " " . randomNouns();

	return $data;
}


extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
	<style type="text/css">
		h1 {
			text-align: center;
			font-size: 100px;
		}
	</style>
</head>
<body>
	<h1><?= $randomServerName; ?></h1>

</body>
</html>