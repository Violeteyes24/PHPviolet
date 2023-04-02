<!DOCTYPE html>
<html>
<head>
	<title>PHP FORM ACTIVITY</title>
</head>
<body>
	<h2>PHP FORM ACTIVITY</h2>
	<form method="POST" action="register2.php">
		<label for="firstname">First Name:</label>
		<input type="text" name="firstname" required><br><br>
		<label for="lastname">Last Name:</label>
		<input type="text" name="lastname" required><br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" required><br><br>
		<label for="confirmpassword">Confirm Password:</label>
		<input type="password" name="confirmpassword" required><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>