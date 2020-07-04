<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2 Output</title>
    <style>
        div{
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <?php
            $one = 0;
            $file = fopen("testfile.txt", "r");
            while(!feof($file)) {
                $one++;
                if($one==1) echo "ProductName ProductCost SellingPrice<br>";
                echo fgets($file) . "<br>";
            }
            fclose($file);
        ?>
    </div>
</body>
</html>