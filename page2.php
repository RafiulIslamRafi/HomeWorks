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
    <a href="index.html">go to home</a><br> <a href="page2.php">refresh</a>
    <div>
        <h3>Question 2: Write a program to insert product profile into the database and show the list into another page</h3>
        <h4>Insert your all Data about your product:</h4>
        <h4>(kono dhoner Code, SQL : data hishebe Input na dile valo hoy.)</h4><br>
        <form action="page2.php" method="post">
            <label>Product ID: </label>
            <input type="text" name="id"><br><br>

            <label>Product Name: </label>
            <input type="text" name="name"><br><br>

            <label>Production Cost: </label>
            <input type="number" name="cost"><br><br>

            <label>Selling price: </label>
            <input type="number" name="sell"><br><br>

            <input type="submit" name="submitted">
        </form>

        <?php
            if(isset($_REQUEST['submitted'])){
                $connection = mysqli_connect("127.0.0.1","root","","test"); //My Local host SQL Server.
                //$connection = new mysqli("127.0.0.1","root","","test");

                if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
                else {
                    $query = "create table product_profile
                    (
                        id varchar(40),
                        name varchar(40),
                        cost numeric(12,2),
                        sell numeric(12,2),
                        primary key(id)
                    )";
                    if(mysqli_query($connection,$query)==true){
                        //it will creat table if table not exist, other it doesn't do any problem.
                    }

                    $id = $_POST["id"];
                    $name = $_POST["name"];
                    $cost = $_POST["cost"];
                    $sell = $_POST["sell"];

                    $query = "insert into product_profile values('$id','$name','$cost','$sell')";

                    //if($connection->query($query)==true){
                    if(mysqli_query($connection,$query)==true){
                        echo "Your Data is stored Successfully<br>";
                    }
                    else echo "Your Data is not Inserted BeCause, Same product ID is already stored.<br>";
                    mysqli_close($connection);
                }
            }
            else echo "<br>";
        ?>

        <a href="page2Output.php">Show the list of Your Stored Data</a>
    </div>
</body>
</html>