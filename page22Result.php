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
		.bb{
			border: 1px black solid;
		}
	</style>
</head>
<body>
	<div class="container"><br><br>
		<div class="row">
			<div class="col bb">Semester</div>
			<div class="col bb">CGPA</div>
		</div>
		<?php
			$connection = mysqli_connect("127.0.0.1","root","","test");
			$query = "select * from page22";
			$result = mysqli_query($connection,$query);
			$gp = 0;
			while($row = mysqli_fetch_row($result)){
				echo "<div class=\"row\">
						<div class=\"col bb\">$row[1] Semister</div>
						<div class=\"col bb\">$row[2]</div>
					</div>";
				$gp = $gp + $row[2] * $row[3];
				
			}
			$val = mysqli_fetch_array(mysqli_query($connection,"select SUM(TC) from page22"));
			$tc = $val[0];
			$CGPA = $gp/$tc;
			echo "<br>My CGPA is : " . $CGPA;
			mysqli_close($connection);
		?>
		
	</div>
</body>
</html>