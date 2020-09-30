<?php
	session_start();
	if(isset($_SESSION['logged'])){
		$_SESSION['massage'] = "Welcome to main page";
		header('location: main.php');
		return;
	}
	if(isset($_REQUEST['submitted'])){
		$username = $_REQUEST['username'];

		//username validation.
		for($i = 0; $i<strlen($username); $i++){
			if($username[$i]==' ') {
				$_SESSION['massage'] = 'username is not alowed for space.';
				header('location: create.php');
				return;
			}
		}

		//password check
		if($_REQUEST['npassword'] != $_REQUEST['cpassword']){
			$_SESSION['massage'] = "Your passWord is not matched";
			header('location: create.php');
			return;
		}
		$connection = mysqli_connect("127.0.0.1","root","","test");

		//create database if not exist
		$query = "CREATE TABLE IF NOT EXISTS page10
		(
			id int NOT NULL AUTO_INCREMENT,
			username varchar(30) NOT NULL,
			name varchar(30),
			phone varchar(20),
			email varchar(30),
			pass varchar(20),
			primary key(id)
		)";
		mysqli_query($connection, $query);
		
		//i am using the database of problem 10.
		$query = "Select * from page10 where username='" . $username . "'";
		$result = mysqli_query($connection, $query);

		if($row = mysqli_fetch_row($result)){
			$_SESSION['massage'] = "UserName is already used";
			header('location: create.php');
			return;
		}
		else{
			$name = $_REQUEST['name'];
			$phone = $_REQUEST['phone'];
			$email = $_REQUEST['email'];
			//name validation:
			if (!preg_match("/^[a-zA-Z .]*$/",$name)) {
				$_SESSION['massage'] = "Only letters, white space and dot are allowed in the name section";
				header('location: create.php');
				return;
			}
			//phone number validation:
			if(!isCorrectPhoneNumber($phone)){
				$_SESSION['massage'] = "Invalid formate of Phone Number";
				header('location: create.php');
				return;
			}
			//email validation:
			if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
				$_SESSION['massage'] = "Invalid email format";
				header('location: create.php');
				return;
			}
			$pass = $_REQUEST['cpassword'];
			$query = "INSERT INTO page10 (username, name, phone, email, pass)
				values('$username','$name','$phone','$email', '$pass')
			";
			mysqli_query($connection, $query);
			$_SESSION['logged'] = mysqli_insert_id($connection);
			$_SESSION['massage'] = "Welcome, your account is created";
			header('location: main.php');
			return;
		}
		mysqli_close($connection);
	}



	//all the helper function are here:
	function isCorrectPhoneNumber($phoneNumber){
		$len = strlen($phoneNumber);
		$i = 0;
		if($len==0) return false;
		if($len!=11 && $len!=14)  return false;
		if($len==11 && ($phoneNumber[0]!='0' || $phoneNumber[1]!='1'))return false;
		if($len==14 && ($phoneNumber[0]!='+' || $phoneNumber[1]!='8' || $phoneNumber[2]!='8' || $phoneNumber[3]!='0' || $phoneNumber[4]!='1')) return false;
		while($i<$len){
			if(($i==0 && $phoneNumber[0]=='+') || ('0'<=$phoneNumber[$i] && $phoneNumber[$i]<='9')) {$i++; continue;}
			else return false;
		}
		return true;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width;initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>page 15: Create Account</title>
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
	<div class="container">
		<?php
			if(isset($_SESSION['massage'])) echo "<br><div style='text-align: center; color: red;'>" . $_SESSION['massage'] . "</div>";
			unset($_SESSION['massage']);
		?>
        <form name="myForm2" onsubmit="return validCreateAccount()" method="post" action="create.php"><br>
            <label>Your Full Name: </label>
            <input type="text" name="name" placeholder="Your Name" required><br><br>
            <label>Your Phone Number: </label>
            <input type="text" name="phone" placeholder="Your Phone Number" required><br><br>
            <label>Your Email: </label>
			<input type="email" name="email" placeholder="Your Email" required><br><br>
			<label>User Name: </label>
			<input type="text" name="username" placeholder="UserName" required><br><br>
			<label>New Password: </label>
            <input type="password" name="npassword" placeholder="New Password" required><br><br>
            <label>Confirm Password: </label>
			<input type="password" name="cpassword" placeholder="Confirm Password" required><br><br>
			<input type="submit" name="submitted">
		</form>
	</div>
</body>
</html>