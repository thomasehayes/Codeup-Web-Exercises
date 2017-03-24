<?php 

function pageController() {
	$data = [];

	$data['favoriteThingsArray'] = ['Chick-fil-a', 'My Dog', 'Boosted Board', 'YouTube', 'Fried Chicken'];
	
	return $data;
}

extract(pageController());
?>


<!DOCTYPE html>
<html>
<head>
	<title>Favorite Things</title>
	<style type="text/css">
		table {
			margin: 0 auto;
			font-size: 20px;
		}
		tr:nth-child(even) {
			background-color: lightgray;
		}
	</style>
</head>
<body>
	<table border=15>
		<thead>
			<tr>
				<th>ID</th>
				<th>Favorites</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php foreach ($favoriteThingsArray as $key => $thing) : ?>
					<tr>
						<td> <?= ($key + 1) ?></td>
						<td> <?= $thing ?> </td>
					</tr>
				<?php endforeach ?>
			</tr>
		</tbody>
	</table>

</body>
</html>