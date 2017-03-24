<?php 

var_dump($_GET);
function pageController() {
	$data = [];
	if(isset($_GET['q'])){
		$data['myName'] = strtoupper($_GET['q']);	
	} else {
		$data['myName'] = '';
	}
	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="get-lecture.php" method="GET">
	<label>Find it here</label>
	<br>
	<input type="text" name="q" placeholder="Search">
	<button type="submit">Search</button>
	

	<a href="get-lecture.php?val=1">1</a>
	<a href="get-lecture.php?val=5">5</a>


	<h1><?= $myName;?></h1>

</form>

</body>
</html>