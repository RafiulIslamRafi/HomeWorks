<?php
    $massage = ""; //a massage for validation and no database.
    function isName($name){
        if (!preg_match("/^[a-zA-Z-' .]*$/",$name)) return "Only letters, white space and dot are allowed";
        else return "";
    }
    function isValidEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format";
        }
        return "";
    }
    if(isset($_REQUEST['submitted'])){
        if(isName($_REQUEST['name']) != ""){
            $massage = '<div style="color:red;">'. isName($_REQUEST['name']) . " in Full Name Section</div>";
        }
        else if(isName($_REQUEST['title']) != ""){
            $massage = '<div style="color:red;">'. isName($_REQUEST['title']) . " in Ttile Section</div>";
        }
        else if(isValidEmail($_REQUEST['email']) != ""){
            $massage = '<div style="color:red;">'. isValidEmail($_REQUEST['email']) ." </div>";
        }
        else $massage = '<div style="color:green;">Your Data is Submitted</div>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Question 9</title>
    <style>
        form,h4,h1,h3{
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="index.html">go to home</a>
    <h4>Question 9: Write a PHP program that will validate all data retrieving from a form containing employee’s profile</h4>
    <div class="container">
        <?php
            echo "<br><h3>".$massage."</h3>";
            $massage = "";
        ?>
        <br><form action="page9.php" method="post">
            <label>Full Name: </label><br>
            <input type="text" name="name" placeholder="Name" required><br><br>
            <label>Title: </label><br>
            <input type="text" name="title" placeholder="title" required><br><br>
            <label>Email: </label><br>
            <input type="email" name="email" placeholder="email" required><br><br>
            <label>Birth Date: </label><br>
            <input type="date" name="bdate" required><br><br>
            <label>Hired Date: </label><br>
            <input type="date" name="hdate" required><br><br>
            <label>Phone Number: </label><br>
            <input type="number" name="phone" placeholder="Phone Number" required><br><br>
            <label>Home Address: </label><br>
            <textarea type="text" name="address" placeholder="Home Address" required></textarea><br><br>
            <label>Notes: </label><br>
            <textarea type="text" name="Notes" placeholder="Notes" required></textarea><br><br>
            <input type="submit" name="submitted">
        </form>
    </div>
</body>
</html>