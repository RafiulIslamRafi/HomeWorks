<?php
	$login = false;
	$row = mysqli_fetch_row(mysqli_query(mysqli_connect("127.0.0.1","root","","test"),"select * from page10"));
	if($_POST["username"]==$row[0] && $_POST["password"]==$row[1]){
		$login = true;
	}
	if($login==false) echo "<a href=\"page10.php\">Login</a> Unsuccessful";
	else{
		echo "Welcome, you are Logged IN";
		echo "<form method=\"post\" action=\"page10.php\"><input type=\"submit\" name=\"Log Out\" value=\"Log Out\"></form>";
	}
?>

