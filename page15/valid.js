function validlogin(){
    var username = document.forms["myForm"]["username"].value;
    console.log(username);
    for(var i=0; i < username.length; i++) {
        if(username[i]==' '){ 
            alert("Space is not alowed in the username section"); 
            return false;
        }
    }
    return true;
}
function validCreateAccount(){
    var name = document.forms["myForm2"]["name"].value;
    var phone = document.forms["myForm2"]["phone"].value;
    var email = document.forms["myForm2"]["email"].value;
    var username = document.forms["myForm2"]["username"].value;
    if(!isName(name)) return false;
    if(!isCorrectPhoneNumber(phone)) return false;
    if(!isValidEmail(email)) return false;
    if(!isValidUserName(username)) return false;
    return true;
}


//all helper function are here:

function isName(name){
    var place = "NAME";
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
        alert("Email type is Invalid");
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
    return true;
}
function isValidUserName(username){
    for(var i=0; i<username.length; i++) {
        console.log(username[i]);
        if(username[i]==' '){
            alert("Space character is not alowed in USERNAME Section");
            return false;
        } 
    }
    return true;
}
