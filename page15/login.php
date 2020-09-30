<?php
	session_start();
	if(isset($_SESSION['logged'])){
		$_SESSION['massage'] = "Welcome to main page";
		header('location: main.php');
		return;
	}
	if(isset($_REQUEST['login'])){
		$user = $_REQUEST['username'];
		$pass = $_REQUEST['password'];
		$connection = mysqli_connect("127.0.0.1","root","","test");
		$query = "Select * from page10 where username='" . $user . "'";
		$result = mysqli_query($connection, $query);
		if($row = mysqli_fetch_row($result)){
			if($pass==$row[5]){
				$_SESSION['logged'] = $row[0];
				$_SESSION['massage'] = 'Login Successful';
				header('location: main.php');
				return;
			}
			else{
				$_SESSION['massage'] = 'password is wrong';
				header('location: login.php');
				return;
			}
		}
		else{
			$space = false;
			for($i = 0; $i<strlen($user); $i++){
				if($user[$i]==' ') {
					$space = true;
					$_SESSION['massage'] = 'username is not alowed for space.';
					break;
				}
			}
			If(!$space) $_SESSION['massage'] = 'username not found, you may create an account';
			header('location: login.php');
			return;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width;initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>page 15: login</title>
	<style>
	h2,form, .create{
		text-align:center;
	}
	a{
		text-decoration: none;
	}
	</style>
	<script src="valid.js"></script>
</head>
<body>
	<h2>Question - 15: Develop a website with a user registration process with username, password, email, name, contact no with proper php and javascript validation. The webpage can also help to login using the credentials</h2>
	<div class="container">
		<?php
			if(isset($_SESSION['massage'])){
				echo '<br><h2><div style="color:red; text-align: center;">'. $_SESSION['massage']."</div></h2>";
				unset($_SESSION['massage']);
			}
		?>
		<form name="myForm" onsubmit="return validlogin()" method="post" action="login.php"><br>
			<label>User Name: </label>
			<input type="text" name="username" placeholder="UserName" required><br><br>
			<label>Password: </label>
			<input type="password" name="password" placeholder="Password" required><br><br>
			<input type="submit" name="login" value="Login">
		</form>
		<br>
		<div class="create"><a href="create.php">Create a New Account</a></div>
	</div>
</body>
</html>