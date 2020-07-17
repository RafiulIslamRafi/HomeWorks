<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 6</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		div{
			text-align: center;
		}
		.hh{
			font-weight: bold;
		}
		.col-2 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 16.666667%;
			flex: 0 0 16.666667%;
			max-width: 16.666667%;
			border: 1px black solid
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Question 6: Write a PHP program that will show all data stored in a database containing student&rsquo;s profile</h2>
		<hr>
		<h4>Students Profile</h4>
		<?php
			$connection = mysqli_connect("127.0.0.1","root","","test");
			if(mysqli_connect_errno()) echo "<br>Can not connect to database";
			else{
				$query = "select * from page6";
				$result = mysqli_query($connection,$query);
				$first = true;
				while($row = mysqli_fetch_row($result)){
					if($first){
						echo "<div class=\"row hh\"><div class=\"col-2\">Name</div><div class=\"col-2\">Uni</div><div class=\"col-2\">Dept</div><div class=\"col-2\">Roll</div><div class=\"col-2\">Year</div><div class=\"col-2\">Session</div></div>";
						$first = false;
					}
					echo "<div class=\"row\">";
					for ($i = 0; $i < 6; $i++)
						echo "<div class=\"col-2\">$row[$i]</div>";
					echo "</div>";
				}
			}
		?>
	
	</div>
</body>
</html>