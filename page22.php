<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>page 22</title>
	<style>
		h2,form,div{ 
			text-align: center; 
		}
	</style>
</head>
<body>
	<a href="index.html">Go to Home</a><br>
	<a href="page22.php">refresh</a>
	<div class="container">
	<h2>Problem 22: Develop a web page that can save all data from your current semester in a database and show the result in another page in tabular form. The result will be calculated as GPA. Show proper validation of input data.</h2>
	
	<?php
		$connection = mysqli_connect("127.0.0.1","root","","test");
		$query = "SELECT Count(ID) from page22";
		$result = mysqli_query($connection,$query);
		$val = mysqli_fetch_array($result);
		$cnt = $val[0];
		$inserted = false;
		
		if(isset($_REQUEST["submit"])){
			$semister =  $_POST["semister"];
			$gpa = $_POST["gpa"];
			$TC = $_POST["tc"];
			mysqli_query($connection,"Insert into page22 (Semester,GPA,TC)
values('$semister','$gpa','$TC');");
			
			$inserted = true;
		}
		if($cnt == 0) $next_semister = "1st";
		else if($cnt == 1) $next_semister = "2nd"; 
		else if($cnt == 2) $next_semister = "3rd";
		else if($cnt == 3) $next_semister = "4th";
		else if($cnt == 4) $next_semister = "5th";
		else if($cnt == 5) $next_semister = "6th";
		else if($cnt == 6) $next_semister = "7th";
		else if($cnt == 7) $next_semister = "8th";
		else if($cnt == 8) $next_semister = "finished";
		$next_credit = array(21.0,22.5,19.5,22.5,19.5,21.0,22.5,15.0,"finished");
	?><br><br>
	<form method="post" action="page22.php">
		<label>Semister: </label>
		<input type="text" name="semister" value=<?php echo $next_semister ?> ><br><br>
		<label>GPA:</label>
		<input type="decimal" name="gpa"><br><br>
		<label>Total Credit on this semister:</label>
		<input type="decimal" name="tc" value=<?php echo $next_credit[$cnt] ?>><br><br>
		<input type="submit" name="submit">
	</form><br>
	<?php
		if($inserted==true) echo "Your data is inserted";
	?>
	<br>
	<div><a href="page22Result.php">Show the result</a></div>
	</div>
</body>
</html>