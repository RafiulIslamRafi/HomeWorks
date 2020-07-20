<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Index page</title>
    <style>
		.cc{
			border: 1px black solid;
		}
		h2{text-align:center;}
	</style>
</head>
<body>
    <div class="container">
		<br><h2>Your Info: </h2><br>
        <?php
			if(isset($_REQUEST["submit"])){
				$name = $_POST["name"];
				$email = $_POST["email"];
				$pn = $_POST["pn"];
				$jdate = $_POST["jdate"];
				$education = $_POST["education"];
				$journal = $_POST["journal"];
				$interest = $_POST["interest"];
				echo "<div class=\"row\"><div class=\"col-6 cc\">Your name</div><div class=\"col-6 cc\">$name</div></div>";
				echo "<div class=\"row\"><div class=\"col-6 cc\">Your Email</div><div class=\"col-6 cc\">$email</div></div>";
				echo "<div class=\"row\"><div class=\"col-6 cc\">Your Phone number</div><div class=\"col-6 cc\">$pn</div></div>";
				echo "<div class=\"row\"><div class=\"col-6 cc\">Your join date</div><div class=\"col-6 cc\">$jdate</div></div>";
				echo "<div class=\"row\"><div class=\"col-6 cc\">about your education</div><div class=\"col-6 cc\">$education</div></div>";
				echo "<div class=\"row\"><div class=\"col-6 cc\">abour your published journal</div><div class=\"col-6 cc\">$journal</div></div>";
				echo "<div class=\"row\"><div class=\"col-6 cc\">about your interest field</div><div class=\"col-6 cc\">$interest</div></div>";
			}
		?>
    </div>
</body>
</html>