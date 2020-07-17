<!DOCTYPE html>
<html lang=""en>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>page 11</title>
	<style>
		h2,form,div{
			text-align: center;
		}
	</style>
</head>
<body>
	<a href="page11.php">refresh</a>
	<div class="container">
		<h2>Question - 11: Write a PHP program that will store all data in a database retrieving from a form containing electronics product info</h2>
		<form method="post" action="page11.php">
			<label>Product Name: </label>
			<input type="text" name="name" placeholder="Product Name"><br><br>
			
			<label>Hired From: </label>
			<input type="text" name="country" placeholder="Country Name"><br><br>
			
			<label>How many?: </label>
			<input type="number" name="count" placeholder="Number of this Product"><br><br>
			
			<label>Price per piece: </label>
			<input type="number" name="price" placeholder="Price per piece"><br><br>
			
			<label>Model/Value: </label>
			<input type="text" name="model" placeholder="model"><br><br>
			
			<input type="submit" name="submit" value="submit">
		</form>
		<?php
			if(isset($_REQUEST["submit"])){
				$connection = mysqli_connect("127.0.0.1","root","","test");
				if(mysqli_connect_errno()) echo "<br>Connection Error";
				else{
					$query = "create table page_eleven
					(
						name varchar(20),
						from_where varchar(20),
						how_many numeric(10),
						price numeric(10),
						model varchar(20),
						primary key(name,model)
					)";
					if(mysqli_query($connection,$query)==true){
						//table is created if exists.
					}
					
					$name = $_POST["name"];
					$country = $_POST["country"];
					$count = $_POST["count"];
					$price = $_POST["price"];
					$model = $_POST["model"];
					
					$query = "insert into page_eleven values('$name' , '$country' , '$_count' , '$price' , '$model')";
					if(mysqli_query($connection,$query)==true){
						echo "<br>Your data is inserted.";
					}
					else echo "<br>Your data is not inserted.";
				}
				mysqli_close($connection);
			}
		?>
	</div>

</body>
</html>