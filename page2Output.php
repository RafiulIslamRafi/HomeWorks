<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2 Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        div{
            text-align: center;
        }
        a{
            text-decoration: none;
        }
        .col-3{
            position: relative;
            border: black 1px solid;
            width: 100%;
            overflow: hidden;
            padding-right: 15px;
            padding-left: 15px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: 0px;
            margin-left: 0px;
        }
        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            display: block;
            margin: 8px;
        }

    </style>
</head>
<body>
    <a href="index.html">go to home</a>
    <div>
        <?php
            $connection = mysqli_connect("127.0.0.1","root","","test");
            if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
            else {
                //echo "Connected with DataBase<br>"; 

                $query = "select * from product_profile";
                $result = mysqli_query($connection,$query);
                
                //$row=mysqli_fetch_array($result);
                $first = true;
                $len = 0;
                while ($row=mysqli_fetch_row($result))
                {
                    if($first){
                        $len = count($row);
                        echo "<div class='container'>
                        <div class='row'>
                            <div class='col-3'><b>Product ID</b></div>
                            <div class='col-3'><b>Priduct Name</b></div>
                            <div class='col-3'><b>Production Cost</b></div>
                            <div class='col-3'><b>Selling Cost</b></div>
                        </div>";
                        $first = false;
                    }
                    echo "<div class='row'>
                        <div class='col-3'>$row[0]</div>
                        <div class='col-3'>$row[1]</div>
                        <div class='col-3'>$row[2]</div>
                        <div class='col-3'>$row[3]</div>
                    </div>";
                }
                mysqli_close($connection);
                //echo "database connection closed";
                if($first==false) echo "</div>";
            }
        ?>
    </div>
</body>
</html>