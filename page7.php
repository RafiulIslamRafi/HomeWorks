<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Question 7</title>
    <style>
        body{
            margin: 20px;
            text-align: center;
        }
        .c{
            border: black 1px solid;
        }
    </style>
</head>
<body><br>
    <h3>Question 7: Write a PHP program that will able to edit all data stored in a database containing teacher’s profile</h3><br>
    <?php
        $connection = mysqli_connect("127.0.0.1","root","","test");
        $query = "Select * from page7";
        $result = mysqli_query($connection, $query);
        $first = true;
        if(isset($_SESSION['massage'])) {
            echo "<div style='color:green;'><h3>".$_SESSION['massage']."<br><br></h3></div>";
            unset($_SESSION['massage']);
        }
        while($row = mysqli_fetch_row($result)){
            if($first){
                //header print
                echo '<div class="row">
                    <div class="col-2 c"><b>Name</b></div>
                    <div class="col-2 c"><b>Position</b></div>
                    <div class="col-1 c"><b>Phone</b></div>
                    <div class="col-2 c"><b>Email</b></div>
                    <div class="col-2 c"><b>Interested Area</b></div>
                    <div class="col-2 c"><b>Journal</b></div>
                    <div class="col-1 c"><b>Action</b></div>
                </div>';
                $first = false;
            }
            echo '<div class="row">
                    <div class="col-2 c">'.$row[1].'</div>
                    <div class="col-2 c">'.$row[2].'</div>
                    <div class="col-1 c">'.$row[3].'</div>
                    <div class="col-2 c">'.$row[4].'</div>
                    <div class="col-2 c">'.$row[5].'</div>
                    <div class="col-2 c">'.$row[6].'</div>
                    <div class="col-1 c"><a href="page7edit.php?id='. $row[0] .'">Edit</a></div>
                </div>';

        }
    ?>
</body>
</html>