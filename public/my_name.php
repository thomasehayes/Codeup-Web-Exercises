<?php
	$firstName = "Thomas";
	echo "$firstName\n";

	define("SIDES_OF_DICE", 6);

	// echo SIDES_OF_DICE; 

	$roll= mt_rand(1, SIDES_OF_DICE);

	echo "You rolled {$roll}\n";

?>