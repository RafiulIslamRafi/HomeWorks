<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 19</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        a{
            text-decoration: none;
        }
        h4,form,div{
            text-align: center;
        }
        img{
            height: 400px;
            width: 400px;
            padding: 2px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <a href="index.html">go to home</a><br>
    <a href="page19.php">Refresh</a>
    <h4>Question 19: Write a php program to upload a image file with proper validation in php.</h4>
    <form action="page19.php" method="post" enctype="multipart/form-data">
        <br><br>
        <label>Upload Your Photo: </label>
        <input type="file" name="image" id="image"><br><br>
        <input type="submit" name="submit">
    </form>    
    <div>
    <?php
        if(isset($_REQUEST["submit"])){
            $file_name = basename($_FILES["image"]["name"]); //just file name, no image
            $extention = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); // file name er jaygay full path shoho deleo just extension ber kore dibe.
            if($extention == "jpg" || $extention == "jpeg" || $extention == "png" || $extention == "gif") {
                
                if ($_FILES["image"]["size"] < (1024*1024*4)) { //KB
                    $directory = "Uploaded19/" . $file_name; //kothay r ki name e save hobe seta.
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $directory)) { // first parameter ta only image, 2nd ta (name shoho directory) te save kore.
                        echo "The Photo has been uploaded"; 
                        echo "<br><img src=\"$directory\">";
                    }
                }
                else echo "<br>The Photo is not Uploaded for more than 4MB in Size";
            } 
            else echo "<br>Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    ?>
    </div>
</body>
</html>