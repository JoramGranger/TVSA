function validator() {
    var alerter = document.getElementById("alert");
           // USERNAME NAME VALIDATION
    var box = document.getElementById("name");
    if(box.value == "")
    {
        box.focus();
        box.style.border = "solid 2px red";
        //alerter.innerHTML = "<br>" + "User Id missing" + "<br>" + "<br>";
        alerter.innerHTML = "Name is missing";
        return false;
    }
    // Password VALIDATION
    var box2 = document.getElementById("login-password");
    if(box2.value == "")
    {
        box2.focus();
        box2.style.border = "solid 3px red";
        //alerter.innerHTML = "<br>" + "Password missing" + "<br>" + "<br>";
        alerter.innerHTML ="Password Missing";
        return false;
    }  
}


