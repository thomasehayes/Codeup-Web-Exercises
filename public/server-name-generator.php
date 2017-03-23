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

?>

<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
</head>
<body>
<?php echo randomAdjectives(). "<br>"; ?>
<?php echo randomNouns(); ?>
</body>
</html>