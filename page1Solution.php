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
    
        <h2>Welcome To Output Page<br>I got your data and you need to Check it</h2><br>
        <div class="row">
            <div class="col-xs-6">Your Name</div>
            <div class="col-xs-6">
                <?php 
                    function isName($nm){
                        $name = $nm;
                        if (!preg_match("/^[a-zA-Z .]*$/",$name)) {
                            return "Only letters, white space and dot are allowed";
                        }
                        return $nm;
                    }
                    $name = isName($_POST["name"]);
                    if($name=="") $name = "Invalid";
                    echo $name; 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Birth Date</div>
            <div class="col-xs-6">
                <?php 
                    // function isValidBirthDate($birthDate){
                    //     if($birthDate=="")  return false;

                    //     $bDate = Number(birthDate.slice(8,10));
                    //     $bMonth  = Number(birthDate.slice(5,7)); 
                    //     $bYear = Number(birthDate.slice(0,4));

                    //     $current_time = new Date();
                    //     $cDate = current_time.getDate();
                    //     $cMonth = current_time.getMonth() + 1;
                    //     $cYear = current_time.getFullYear();

                    //     if($bYear>$cYear || ($bYear==$cYear && $bMonth>$cMonth) || ($bYear==$cYear && $bMonth==$cMonth && $bDate>$cDate)) return false;
                    //     if($bYear>$cYear-10 || ($bYear==$cYear-10 && $bMonth>$cMonth) || ($bYear==$cYear-10 && $bMonth==$cMonth && $bDate>$cDate)) return false;
                    //     if($bYear<$cYear-200 || ($bYear==$cYear-200 && $bMonth<$cMonth) || ($bYear==$cYear-200 && $bMonth==$cMonth && $bDate<$cDate)) return false;
                    //     return true;
                    // }
                    // if(isValidBirthDate($_POST["birthDate"])) echo $_POST["birthDate"]; 
                    // else echo "Invalid";
                    echo $_POST["birthDate"]; 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Gender</div>
            <div class="col-xs-6">
                <?php 
                    function isValidGender($gender){
                        if($gender=="Male" || $gender=="Female" || $gender=="Other") return true;
                        return false;
                    }
                    if(isValidGender($_POST["gender"])) echo $_POST["gender"];
                    else echo "Invalid";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Father's Name</div>
            <div class="col-xs-6">
                <?php 
                    $name = isName($_POST["father"]);
                    if($name=="") $name = "Invalid";
                    echo $name;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Mother's Name</div>
            <div class="col-xs-6">
                <?php 
                    $name = isName($_POST["mother"]);
                    if($name=="") $name = "Invalid";
                    echo $name;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Email</div>
            <div class="col-xs-6">
                <?php 
                    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                        echo "Invalid email format";
                    }
                    else echo $_POST["email"];
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Phone Number</div>
            <div class="col-xs-6">
                <?php 
                    function isCorrectPhoneNumber($phoneNumber){
                        $len = strlen($phoneNumber);
                        $i = 0;
                        if($len==0) return false;
                        if($len!=11 && $len!=14)  return false;
                        if($len==11 && ($phoneNumber[0]!='0' || $phoneNumber[1]!='1'))return false;
                        if($len==14 && ($phoneNumber[0]!='+' || $phoneNumber[1]!='8' || $phoneNumber[2]!='8' || $phoneNumber[3]!='0' || $phoneNumber[4]!='1')) return false;
                        while($i<$len){
                            if(($i==0 && $phoneNumber[0]=='+') || ('0'<=$phoneNumber[$i] && $phoneNumber[$i]<='9')) {$i++; continue;}
                            else return false;
                        }
                        return true;
                    }
                    if(isCorrectPhoneNumber($_POST["phoneNumber"])) echo $_POST["phoneNumber"];
                    else echo "Invalid";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Current Institution Name</div>
            <div class="col-xs-6">
                <?php 
                    $name = isName($_POST["Uni"]);
                    if($name=="") $name = "Invalid";
                    echo $name; 
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Department Name</div>
            <div class="col-xs-6">
                <?php 
                    echo $_POST["dept"]; 

                    //I am Coming Soon.
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Session</div>
            <div class="col-xs-6">
                <?php 
                    echo $_POST["session"]; 
                    //I am Coming Soon.
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Roll</div>
            <div class="col-xs-6">
                <?php 
                    function isRollValid($roll){
                        $i = 0;
                        $len = strlen(roll);
                        if($len==0)  return false;
                        while($i<$len){
                            $num = $roll[$i];
                            if('0'<=$num && $num<='9'){ $i++; continue;}
                            else return false;
                        }
                        return true;
                    }
                    if(isRollValid($_POST["roll"])) echo $_POST["roll"];
                    else echo "Invalid";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your current year</div>
            <div class="col-xs-6">
                <?php 
                    echo $_POST["year"]; 
                    //I am Coming Soon.
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">Your Current Semester</div>
            <div class="col-xs-6">
                <?php 
                    echo $_POST["semester"]; 
                    //I am Coming Soon.
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>