<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <style>
        div{
            text-align: center;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <a href="index.html">go to home</a>
    <div>
        <h3>Question 2: Write a program to insert product profile into the database and show the list into another page</h3>
        <h4>Insert your all Data about your product:</h4>
        <form action="page2Output.php" method="post">
            <label>Product Name: </label>
            <input type="text" name="Product"><br><br>

            <label>Production Cost: </label>
            <input type="text" name="Cost"><br><br>

            <label>Selling price: </label>
            <input type="text" name="sell"><br><br>

            <input type="submit" name="submitted">
        </form>

        <?php
            if(isset($_REQUEST['submitted'])){
                $txt = $_POST["Product"] . " " . $_POST["Cost"] . " " . $_POST["sell"];
                if($txt!="  ")
                {
                    $txt = $txt . "\n";
                    $myfile = fopen("testfile.txt", "a");
                    fwrite($myfile, $txt);
                    fclose($myfile);
                    echo "Your Data is Stored Now"."<br>";
                }
                else{
                    echo "Your Data is not Stored"."<br>";
                }
            }
            else echo "<br>";
        ?>

        <a href="page2Output.php">Show the list</a>
    </div>
</body>
</html>