function validateForm() {
    //Own Name.
    if(isName(document.forms["myForm"]["name"].value,"'Your Full Name'")==false) return false;

    //birth Date.
    if(isValidBirthDate(document.forms["myForm"]["birthDate"].value)==false) return false;

    //gender checking.
    if(isValidGender(document.forms["myForm"]["gender"].value)==false) return false;

    //father name.
    if(isName(document.forms["myForm"]["father"].value,"'Your Father's name'")==false) return false;

    //mother name.
    if(isName(document.forms["myForm"]["mother"].value,"'Your Mother's name'")==false) return false;

    //email validation check
    if(isValidEmail(document.forms["myForm"]["email"].value)==false) return false;

    //phone number
    if(isCorrectPhoneNumber(document.forms["myForm"]["phoneNumber"].value)==false) return false;

    //Uni name.
    if(isName(document.forms["myForm"]["Uni"].value,"'Your Institution Name'")==false) return false;

    //roll check
    if(isRollValid(document.forms["myForm"]["roll"].value)==false) return false;
    return true;
}

function isName(name,place){
    var len = name.length;
    //pore comment remove kore dibo.
    if(len==0){
        alert("You need to insert data in "+ place+" section");
        return false;
    }
    for(var i=0;i<len;i++){
        if((name[i]>='A' && name[i]<='Z') ||  (name[i]>='a' && name[i]<='z') || (name[i]=='.') || name[i]==' ') continue;
        else
        {
            //any type of worng
            alert(name[i]+" is not a valid character in "+name+" at "+place+" section");
            return false;
        }
    }
}

function isValidBirthDate(birthDate){
    if(birthDate=="") 
    {
        //return true; //for a part time.
        alert("You must insert your birth date");
        return false;
    }
    var bDate = Number(birthDate.slice(8,10)), bMonth  = Number(birthDate.slice(5,7)), bYear = Number(birthDate.slice(0,4));

    var current_time = new Date();
    var cDate = current_time.getDate(), cMonth = current_time.getMonth() + 1, cYear = current_time.getFullYear();
    //future check.
    if(bYear>cYear || (bYear==cYear && bMonth>cMonth) || (bYear==cYear && bMonth==cMonth && bDate>cDate)){
        alert("Hey, its future time in your birthday section");
        return false;
    }
    //min 10 year.
    if(bYear>cYear-10 || (bYear==cYear-10 && bMonth>cMonth) || (bYear==cYear-10 && bMonth==cMonth && bDate>cDate)){
        alert("You are less than 10 years old.");
        return false;
    }
    //200 year check.
    if(bYear<cYear-200 || (bYear==cYear-200 && bMonth<cMonth) || (bYear==cYear-200 && bMonth==cMonth && bDate<cDate)){
        alert("More than 200 years old is not acceptable");
        return false;
    }
    return true;
}
function isValidGender(gender){
    if(gender!="Male" && gender!="Female" && gender!="Other"){
        alert("You Must inset Your gender");
        return false;
    }
    return true;
}
function isValidEmail(email){
    var cnt = 0, i=0, len = email.length, atGot = 0, dotGot = 0, Alert = false;
    if(len==0){
        //return true; //for part time.
        alert("You Must include your email");
        return false;
    }
    while(i<len){
        if(email[i]=='@')
        {
            if(cnt==0 || atGot==1){
                Alert = true;
                alert("You must use @ sign in one time");
                return false;
            }
            cnt = -1;
            atGot = 1;
        }
        else if(atGot==1){
            if(email[i]=='.')
            {
                if(cnt==0 || dotGot==1)
                {
                    Alert = true;
                    alert("You must use '.' (dot) sign in one time after the '@' sign");
                    return false;
                }
                cnt = -1;
                dotGot = 1;
            }
        }
        if((email[i]>='A' && email[i]<='Z') ||  (email[i]>='a' && email[i]<='z') || ('0' <= email[i] && email[i] <= '9') || email[i]=='.' || email[i]=='@' || email[i]=='_') {
            //nothing.
            //console.log(email[i]); //why space is working here.
        }
        else{
            var char = email[i];
            if(char==' ') char = "Space";
            alert(char+" is not allowed in 'Your Email' Section\nYou must use only this character: Capital latter, Small latters, digit, dot(.), @ and underscore(_).");
            return false;
        }
        i++;
        cnt++;
    }
    if(Alert==true || atGot==0 || dotGot==0 || cnt==0){
        //alert("Email type is Invalid");
        return false;
    }
    return true;
}
function isCorrectPhoneNumber(phoneNumber){
    var len = phoneNumber.length;
    var i = 0;
    if(len==0){
        //return true; //for part time.
        alert("You Must include your phone number");
        return false;
    }
    if(len!=11 && len!=14) {
        alert("Incorrect Number of digit of Your Phone number");
        return false;
    }
    if(len==11){
        if(phoneNumber[0]!='0' || phoneNumber[1]!='1'){
            alert("You must start by 01 of your Phone Number");
            return false;
        }
    }
    if(len==14){
        if(phoneNumber[0]!='+' || phoneNumber[1]!='8' || phoneNumber[2]!='8' || phoneNumber[3]!='0' || phoneNumber[4]!='1'){
            alert("You must start by +8801 of your Phone Number");
            return false;
        }
    }
    while(i<len){
        if((i==0 && phoneNumber[i]=='+') || (0<=phoneNumber[i] && phoneNumber[i]<=9)){
            i++;
            continue;
        }
        else{
            alert("Invalid Phone Number, all character must be digit.");
            return false;
        }
    }
}
function isRollValid(roll){
    var i = 0, len = roll.length;
    var num;
    if(len==0){
        //return true; //for a part time.
        alert("Your must input your roll number");
        return false;
    }
    while(i<len){
        num = roll[i];
        if(0<=num && num<=9){
            i++;
            continue;
        }
        else{
            alert("Invalid Roll number");
            return false;
        }
    }
}