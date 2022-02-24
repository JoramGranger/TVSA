function settingsValidator() {
    var alerter = document.getElementById("alert");
           // USERNAME NAME VALIDATION
    var box = document.getElementById("password");
    if(box.value == "")
    {
        box.focus();
        box.style.border = "solid 2px red";
        //alerter.innerHTML = "<br>" + "User Id missing" + "<br>" + "<br>";
        alerter.innerHTML = "old password is missing";
        return false;
    }
    // Password VALIDATION
    var box2 = document.getElementById("repeatpassword");
    if(box2.value == "")
    {
        box2.focus();
        box2.style.border = "solid 3px red";
        //alerter.innerHTML = "<br>" + "Password missing" + "<br>" + "<br>";
        alerter.innerHTML ="new password is Missing";
        return false;
    }
    
    if(box.value != box2.value)
    {
        alerter.innerHTML ="password mismatch";
        return false;
    }
}