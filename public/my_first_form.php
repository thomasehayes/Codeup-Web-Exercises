
<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>

	<body>
			<form method="POST" action="/my_first_form.php">
				<p>
					<label for="username">Username</label>
					<input placeholder="enter username" id="username" name="username" type="text">
				</p>
				<p>
					<label for="password">Password</label>
					<input placeholder="input your passowrd" id="password" name="password" type="password">
				</p>
				<p>
					<input type="submit">
				</p>
			</form>


		<!-- Form's action is where the request goes -->
			<form action="my_first_form.php" method="GET">
				<p>
					<label for="property_type"> Property Type</label>
					<input type="text" id="property_type" name="property_type">
				</p>
				<p>
					<label for="zipcode">Zipcode</label>
					<input type="text" id="zipcode" name="zipcode">
				</p>

				<button type="submit">Search now!</button>
			</form>

		<h1>Search DuckDuckGo</h1>
			<form action="https://duckduckgo.com" method="GET">
				<p>
					<label for="search">Search DuckDuckGo</label>
					<input type="text" name="q" id="q">
				</p>
				<button type="submit">Search</button>
			</form>

		<h1>Search Google</h1>
			<form action="https://google.com/search" method="GET">
				<p>
					<label for="search">Search Google</label>
					<input type="text" name="q" id="google">
				</p>
				<input type="submit" value="Find">	
			</form>

		<h1>User Login</h1>
		<form action="my_first_form.php" method="POST">
			<p>
				<label for="to">To</label>
				<input type="text" id="to" name="to">
			</p>

			<p>
				<label for="From">From</label>
				<input type="text" id="From" name="From">
			</p>

			<p>
				<label for="subject">Subject</label>
				<input type="text" id="subject" name="subject">
			</p>
			
			<p>
				<label for="email_body">Compose an Email</label>
				<br>
				<textarea id="email_body" name="email_body" placeholder="Content Here"></textarea>
			</p>

			<button type="submit">Send Email</button>
			
		</form>
		<hr>

		<h1>Multiple Choice Test</h1>
		<form action="my_first_form.php" method="GET">
			<p>What is the capital of Texas?</p>
				<label>
				    <input type="radio" name="q1" value="houston">
				    Houston
				</label>
				<label>
				    <input type="radio" name="q1" value="dallas">
				    Dallas
				</label>
				<label>
				    <input type="radio" name="q1" value="austin">
				    Austin
				</label>
				<label>
				    <input type="radio" name="q1" value="san antonio">
				    San Antonio
				</label>
		</form>

	</body>
</html>
