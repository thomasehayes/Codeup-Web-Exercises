<?php 

function randomAdjectives() {
	$adjectives = ['spotty', 'giant', 'chunky', 'blue-eyed', 'dazzling', 'earsplitting', 'knowledgeable', 'berserk', 'godly', 'tiny'];
	$randomAdj = array_rand($adjectives);
	return $adjectives[$randomAdj];
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
</head>
<body>
<?php echo randomAdjectives(). "<br>"; ?>

</body>
</html>