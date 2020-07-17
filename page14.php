<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>page 14</title>
	<style>
		h2,form,div{
			text-align: center;
		}
	</style>
</head>
<body>
	<a href="index.html">Go to homepage</a><br>
	<a href="page14.php">refresh</a>
	<div class="container">
		<h2>Question - 14: Develop a web page that will insert data related to apply online for graduate admission and show that profile in another page</h2>
		<hr>
		<form method="post" action="page14output.php">
			<label>SSC Roll</label>
			<input type="text" name="SSC" placeholder="SSC Roll"><br><br>
			
			<label>SSC Year</label>
			<input type="number" name="SSCYear" placeholder="SSC Year"><br><br>
			
			<label>HSC Roll</label>
			<input type="text" name="HSC" placeholder="HSC Roll"><br><br>
			
			<label>HSC Year</label>
			<input type="number" name="HSCYear" placeholder="HSC Year"><br><br>
			<input type="submit" name="submit" value="Apply">
		</form>
	</div>
</body>
</html>