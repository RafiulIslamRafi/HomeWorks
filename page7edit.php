<?php
    session_start();
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $position = $_REQUEST['position'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $interestfield = $_REQUEST['interestfield'];
        $journal = $_REQUEST['journal'];
        $connection = mysqli_connect("127.0.0.1","root","","test");
        $query = "UPDATE page7 set
            name = '$name',
            position = '$position',
            phone = '$phone',
            email = '$email',
            interestfield = '$interestfield',
            journal = '$journal' 
            where id = $id";
        mysqli_query($connection, $query);
        $_SESSION['massage'] = 'The Data of '.$name. ' is updated';
        header('location: page7.php');
        return;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Question 7</title>
    <style>
        form{
            text-align: center;
        }
    </style>
</head>
<body><br>
    <?php
        $connection = mysqli_connect("127.0.0.1","root","","test");
        $query = 'Select * from page7 where id='.$_REQUEST['id'];
        $result = mysqli_query($connection, $query);
        if($row = mysqli_fetch_row($result)){
            echo '<form action="page7edit.php" method="post">
                <label>Name: </label><br>
                <input type="text" name="name" value="'. $row[1] .'"><br>
                <label>Position: </label><br>
                <input type="text" name="position" value="'. $row[2] .'"><br>
                <label>Phone Number: </label><br>
                <input type="text" name="phone" value="'. $row[3] .'"><br>
                <label>Email: </label><br>
                <input type="email" name="email" value="'. $row[4] .'"><br>
                <label>interestfield: </label><br>
                <input type="text" name="interestfield" value="'. $row[5] .'"><br>
                <label>journal: </label><br>
                <input type="text" name="journal" value="'. $row[6] .'"><br>
                <input type="hidden" name="id" value="'. $row[0] .'"><br>
                <input type="submit" name="update" value="Update">
            </form>';
        }
    ?>
</body>
</html>