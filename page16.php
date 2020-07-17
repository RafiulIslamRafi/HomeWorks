<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>page 16</title>
	<style>
		h2,form,div{ text-align: center;}
	</style>

</head>
<body>
	<a href="page16.php">refresh</a>
	<div class="container">
		<h2>Question - 16: Develop a page that will facilitate the online voting system for three candidates</h2>
		<hr>
		<form method="post" action="page16.php">
			<label>Vote to your choich</label><br>
			<input type="radio" name="person" value="person1" checked> person1<br>
			<input type="radio" name="person" value="person2"> person2<br>
			<input type="radio" name="person" value="person3"> person3<br><br>
			
			<label>Natinational ID Number: </label>
			<input type="number" name="NID" required><br><br>
			<label>password</label>
			<input type="password" name="pass" required><br><br>
			
			<input type="submit" name="submit">
		</form>
	
	<?php
		if(isset($_REQUEST["submit"])){
			$nid = $_POST["NID"];
			$connection = mysqli_connect("127.0.0.1","root","","test");
			$query = "select pass,votted from page16votter where NID = '$nid'";
			$result = mysqli_query($connection,$query);
			$row = mysqli_fetch_assoc($result);
			if($row["pass"]==""){
				echo "<br>your info is not in database";
				//if exist, data can add.
			}
			else if($row["pass"]==$_POST["pass"]){
				if($row["votted"]=="YES") echo "<bd>your vote is already votted";
				else{
					//voter update..
					$query = "UPDATE page16votter set votted = 'YES' where NID = '$nid'";
					mysqli_query($connection,$query);
					
					//candidate update
					$person = $_POST["person"];
					
					$query = "UPDATE page16candidate set votecount = votecount+1 where person = '$person'";
					mysqli_query($connection,$query);
					
					
					echo "<br>Your vote is successfull";
				}
			}
			else echo "<br>your pass is not same";
		}
	?>
	</div>
</body>
</html>