<?php
	if(isset($_REQUEST["submit"])){
		echo "Name = from web scraping<br>";
		echo "Father Name  = from web scraping<br>";
		echo "Mother Name = from web scraping<br>";
		echo "About SSC, Roll: " . $_POST["SSC"] . "; " . "Year: " . $_POST["SSCYear"] . "; " . "GPA from web scraping<br>";
		echo "About HSC, Roll: " . $_POST["HSC"] . "; " . "Year: " . $_POST["HSCYear"] . "; " . "GPA from web scraping";
	}
	//need to data in to database. i am skiping it.
?>