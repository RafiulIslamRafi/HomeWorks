<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 21</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        *{
            overflow: hidden;
        }
        a{
            text-decoration: none;
        }
        h4,form,div{
            text-align: center;
        }
        .header {
            height: 100px;
            border: 1px solid black;
        }
        .left_body{
            height: 300px;
            border: 1px solid red;
        }
        .left{
            float: left;
            width: 20%;
            border: 1px solid black;
            height:100%;
        }
        .body{
            float: left;
            width: 80%;
            border: 1px solid black;
            height:100%;
        }
        .footer{
            height: 50px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <a href="index.html">go to home</a><br>
    <a href="page21.php">Refresh</a>
    <h4>Question 21: Develop a web page with proper header, footer, left panel and body section in different files. Also show that if one part is absent, the design will not be broken.</h4>
       
    <div class="container">
        <div class="header">
            <?php include 'page21/header.php';?> 
        </div>
        <div class="left_body">
            <div class="left">
                <?php include 'page21/left.php';?> 
            </div>
            <div class="body">
                <?php include 'page21/body.php';?> 
            </div>
        </div>
        <div class="footer">
            <?php include 'page21/footer.php';?> 
        </div>
    </div>
</body>
</html>