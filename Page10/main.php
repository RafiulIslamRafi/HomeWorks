<?php
	session_start();
	if(!isset($_SESSION['logged'])){
		$_SESSION['massage'] = "You must log in first";
		header('location: login.php');
		return;
	}
	if(isset($_REQUEST['logout'])){
		unset($_SESSION['logged']);
		$_SESSION['massage'] = 'logout successful';
		header('location: login.php');
		return;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Main Page</title>
	<style>
		div, form, .workspace, .flashmassage{
			text-align: center;
		}
		.workspace{
			width: 100%;
			height: 600px;
			border: black 1px solid;
		}
	</style>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="Header">
			<?php
				$id = $_SESSION['logged'];
				$connection = mysqli_connect("127.0.0.1","root","","test");
				$query = "Select * from page10 where id='" . $id . "'";
				$result = mysqli_query($connection, $query);
				if($row = mysqli_fetch_row($result)){
					$name = $row[2];
					$username = $row[1];
					$phone = $row[3];
					$email = $row[4];
					echo "<h1> Hellow, ". $name . "( (".$username.")</h1>";
				}
			?>
		</div>
		<div class="flashmassage">
			<?php
				if(isset($_SESSION['massage'])){
					echo '<h2><div style="color:green; text-align: center;">'. $_SESSION['massage']."</div></h2>";
					unset($_SESSION['massage']);
				}
			?>
		</div>
		<div class="workspace">
			<h1>this part is for work space for admin pannel.</h1>
		</div>
		<form action="main.php" method="post"><br><br><br>
			<input type="submit" name="logout" value="Log Out">
		</form>
	</div>
</body>
</html>