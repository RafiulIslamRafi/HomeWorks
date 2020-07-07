<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <script src="myScript.js"></script>
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
    <a href="index.html">go to home</a><br> <a href="page4.php">refresh</a>
    <div>
        <h3>Question 4: Develop a web page using PHP that will show insert all data of your personal profile and show that profile in another page</h3>
        <h4>Insert your all Data about your Personal Profile:</h4>
        <h4>(kono dhoner Code, SQL : data hishebe Input na dile valo hoy.)</h4><br>
        <form name="myForm" onsubmit="return validateForm()" action="page4.php" method="post">
            <label>Your Name: </label>
            <input type="text" name="name" placeholder="Your Name" required><br><br>

            <label>Birth Date</label>
            <input type="date" name="birthDate" required><br><br>

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male" checked>Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Other">Other<br><br>

            <label>Your Email:</label>
            <input type="email" name="email" placeholder="Insert your Email" required><br><br>

            <label>Phone Number: </label>
            <input type="text" name="phoneNumber" placeholder="Insert your phone number" required><br><br>


            <input type="submit" name="submitted">
        </form>

        <?php
            if(isset($_REQUEST['submitted'])){
                $connection = mysqli_connect("127.0.0.1","root","","test"); //My Local host SQL Server.
                //$connection = new mysqli("127.0.0.1","root","","test");

                if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();
                else {
                    $query = "create table personal_profile
                    (
                        name varchar(40),
                        date varchar(20),
                        gender varchar(12),
                        email varchar(30),
                        phoneNumber varchar(20),
                        primary key(email)
                    )";
                    if(mysqli_query($connection,$query)==true){
                        //it will creat table if table not exist, other it doesn't do any problem.
                    }

                    $name = $_POST["name"];
                    $date = $_POST["birthDate"];
                    $gender = $_POST["gender"];
                    $email = $_POST["email"];
                    $phoneNumber = $_POST["phoneNumber"];

                    $query = "insert into personal_profile values('$name','$date','$gender','$email','$phoneNumber')";

                    //if($connection->query($query)==true){
                    if(mysqli_query($connection,$query)==true){
                        echo "Your Data is stored Successfully<br>";
                    }
                    else echo "Your Data is not Inserted BeCause, Same Email is already stored.<br>";
                    mysqli_close($connection);
                }
            }
            else echo "<br>";
        ?>

        <a href="page4Output.php">Show the list of Your Stored Data</a>
    </div>
</body>
</html>