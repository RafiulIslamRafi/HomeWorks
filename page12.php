<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page 12</title>
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
			border: 1px black solid;
		}
		.col-1 {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 8.333333%;
			flex: 0 0 8.333333%;
			max-width: 8.333333%;
			border: 1px black solid;
		}
	</style>
</head>
<body>
<a href="page12.php">Refresh</a>
	<div class="container">
		<h2>Question 12: Design a webpage that will show the list stored in a database containing student&rsquo;s profile with a link to delete them</h2>
		<hr>
		<h4>Students Profile</h4>
		<?php
			$connection = mysqli_connect("127.0.0.1","root","","test");
			$delete = false;
			if(mysqli_connect_errno()) echo "<br>Can not connect to database";
			else{
				if($_GET["delid"]!=""){
					//delete..
					$delid = $_GET["delid"];
					$ace = false;
					$query = "select name from page6 where roll='$delid'";
					$result = mysqli_query($connection,$query);
					$row = mysqli_fetch_assoc($result);
					if($row["name"]!="") $delete = true;
					else $delete = false;
					$query = "delete from page6 where roll = '$delid'";
					mysqli_query($connection,$query);
				}
				
				$query = "select * from page6";
				$result = mysqli_query($connection,$query);
				$first = true;
				while($row = mysqli_fetch_row($result)){
					if($first){
						echo "<div class=\"row hh\"><div class=\"col-2\">Name</div><div class=\"col-2\">Uni</div><div class=\"col-2\">Dept</div><div class=\"col-2\">Roll</div><div class=\"col-2\">Year</div><div class=\"col-1\">Session</div><div class=\"col-1\">delete</div></div>";
						$first = false;
					}
					echo "<div class=\"row\">";
					for ($i = 0; $i < 6; $i++){
						if($i==5) echo "<div class=\"col-1\">$row[$i]</div>";
						else echo "<div class=\"col-2\">$row[$i]</div>";
					}
					echo "<div class=\"col-1\"> <a href=\"page12.php?delid=$row[3]\">delete</a>    </div>"; //delete er jonno link kora lagbe..
					echo "</div>";
				}
				if($delete==true){
					echo "<br>deleted successfully";
				}
			}
		?>
	
	</div>
</body>
</html>