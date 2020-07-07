<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 13</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        a{
            text-decoration: none;
        }
        h4,form,div{
            text-align: center;
        }
        img{
            width: 100%;
            height: 200px;
            padding: 2px;
            overflow: hidden;
        }
    </style>
    
</head>
<body>
    <a href="index.html">go to home</a><br>
    <a href="page13.php">Refresh</a>
    <h4>Question 13: Develop an image gallery which can show the image and also upload the image with the title</h4>
    <div class="container">
        <?php
            $directory = "Uploaded13/";
            $idx = 2;
            $str = 0;
            $photoes = scandir($directory);
            $len = count($photoes) - $idx;
            if($len!=0) echo "<br><h1>Gallery</h1><br>";
        ?>
        <div class="row">
            <?php
                for($i=0;$i<$len;$i++) echo "<div class=\"col-sm-4\"> <img src=\"Uploaded13/" . $photoes[$i+$idx] . "\"></div>";
            ?>
        </div>
    </div>
    <form action="page13.php" method="post" enctype="multipart/form-data">
        <br><br>
        <label>Upload Your Photo: </label>
        <input type="file" name="image" id="image"><br><br>
        <input type="submit" name="submit">
        <h5>After uploaded, refresh the page</h5>
    </form>    
    <div>
    <?php
        if(isset($_REQUEST["submit"])){
            $file_name = basename($_FILES["image"]["name"]); //just file name, no image
            $extention = strtolower(pathinfo($file_name,PATHINFO_EXTENSION)); // file name er jaygay full path shoho deleo just extension ber kore dibe.
            if($extention == "jpg" || $extention == "jpeg" || $extention == "png" || $extention == "gif") {
                //size checking niye kaj hote pare.
                //already exist niye kaj hote pare.
                //different photo, same name: eta niye kaj hote pare.

                $directory = "Uploaded13/" . $file_name; //kothay r ki name e save hobe seta.
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $directory)) { // first parameter ta only image, 2nd ta (name shoho directory) te save kore.
                    echo "The Photo has been uploaded"; //in " . $directory;
                }
            } 
            else echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    ?>
    </div>
</body>
</html>