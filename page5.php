<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>page 5</title>
    <style>
        a{
            text-decoration: none;
        }
        h2,div{
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="index.html">Go to Home</a><br>
    <a href="page5.php">refresh</a>
    <div class="container">
        <h2>Question 5: Write a PHP program that will store all data in a database retrieving from a form containing employee’s profile</h2>
        <br><div><h4>Insert your all data</h4></div>
        <form action="page5.php" method="post">
            <label>Your Full name:</label>
            <input type="text" name="name" placeholder="Insert your full name" required><br><br>
            
            <label>Your Birth date:</label>
            <input type="date" name="bdate" required><br><br>
            
            <label>Your Phone Number:</label>
            <input type="number" name="phone" placeholder="Insert phone Number" required><br><br>
            
            <label>Your Email:</label>
            <input type="email" name="email" placeholder="Insert your email" required><br><br>
            
            <label>Your Skill:</label>
            <input type="text" name="skill" placeholder="skills" required><br><br>
            
            <input type="submit" name="submit">
        </form>
        <?php
            if(isset($_REQUEST["submit"])){
                $connection = mysqli_connect("127.0.0.1","root","","test");
                if(mysqli_connect_errno()) echo "<br> Can not connect with database";
                else{
                    $query = "create table page5 
                    (
                        name varchar(40),
                        birtdate varchar(20),
                        phone_number numeric(20),
                        email varchar(40),
                        skill varchar(300),
                        primary key(email)
                    )
                    ";
                    if(mysqli_query($connection,$query)){
                        //table create if not exists.
                    }
                    $name = $_POST["name"];
                    $birthDate = $_POST["bdate"];
                    $phone_number = $_POST["phone"];
                    $email = $_POST["email"];
                    $skill = $_POST["skill"];

                    $query = "insert into page5 values('$name','$birthDate','$phone_number','$email','$skill')";
                    if(mysqli_query($connection,$query)){
                        echo "<br>Your data is inserted";
                    }else echo "<br>Your data is not inserted for similar email";
                }
            }
        ?>
    </div>
</body>
</html>