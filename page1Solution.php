<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Question 1 Output</title>
    <style>
        .row {
            margin-right: -15px;
            margin-left: -15px;
            border: black 1px solid;
            text-align: left;
        }
    </style>
</head>
<body>
    <a href="index.html">go to home</a>
    <div class="container" style="text-align: center;">
    
    <!--if(valid)-->
        <h2>Welcome To Output Page<br>I got your data and you need to Check it</h2><br>
        <div class="row">
            <div class="col-xs-6">Your Name</div>
            <div class="col-xs-6"><?php echo $_POST["name"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Birth Date</div>
            <div class="col-xs-6"><?php echo $_POST["birthDate"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Gender</div>
            <div class="col-xs-6"><?php echo $_POST["gender"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Father's Name</div>
            <div class="col-xs-6"><?php echo $_POST["father"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Mother's Name</div>
            <div class="col-xs-6"><?php echo $_POST["mother"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Email</div>
            <div class="col-xs-6"><?php echo $_POST["email"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Phone Number</div>
            <div class="col-xs-6"><?php echo $_POST["phoneNumber"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Current Institution Name</div>
            <div class="col-xs-6"><?php echo $_POST["Uni"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Department Name</div>
            <div class="col-xs-6"><?php echo $_POST["dept"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Session</div>
            <div class="col-xs-6"><?php echo $_POST["session"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Roll</div>
            <div class="col-xs-6"><?php echo $_POST["roll"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your current year</div>
            <div class="col-xs-6"><?php echo $_POST["year"]; ?></div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Current Semester</div>
            <div class="col-xs-6"><?php echo $_POST["semester"]; ?></div>
        </div>';
    </div>
    
</body>
</html>