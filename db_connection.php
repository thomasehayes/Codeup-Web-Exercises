<?php 

// How we used to connect
// mysql -u vagrant -p -- or -- localhost/ 127.0.0.1
// This is how we connect it with PHP
// DSN - Data Source Name
// 1. Driver. mysql
// 2. Host. 127.0.0.1 or localhost
// 3. Database name. employees
// 4. username: vagrant
// 5. password: vagrant
require __DIR__ . '/pdo_test.php'; // Don't forget the forward slash at the beginning, 
								  // when using __DIR__

	$connection = new PDO(
		'mysql:host=DB_HOST;DB_NAME=employees', 
		DB_USER, 
		DB_PASSWORD
	);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// This is optional, we just want to show some output to confirm 
	// that the connection was successful
	// Will remove because it not neccessary
	echo $connection->getAttribute(PDO::ATTR_CONNECTION_STATUS), PHP_EOL;

	// Exception
	// comes from exceptional. - Something you cannot control



?>