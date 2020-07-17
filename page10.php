<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width;initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>page 10</title>
	<style>
	h2,form{
		text-align:center;
	}
	a{
		text-decoration: none;
	}
	</style>
</head>
<body>
	<a href="index.html">go to home</a><br>
	<a href="page10.php">Refresh</a>
	<h2>Question - 10: Develop an admin panel with a demo page that will also contain security page having user name and password in the database and logout of option</h2>
	<div class="container">
		<form method="post" action="page10output.php"><br><br>
			<label>User Name: </label>
			<input type="text" name="username" placeholder="UserName" required><br><br>
			<label>Password: </label>
			<input type="password" name="password" placeholder="Password" required><br><br>
			<input type="submit" name="login" value="Login">
		</form>
	</div>
</body>
</html>