			
var user = document.getElementById("userlogin");
var psw = document.getElementById("passlogin");
var loginbtn= document.getElementById("loginbtn");
var user_error = document.getElementById("user_error_div");
var psw_error = document.getElementById("psw_error_div");

    user_error.style.display = "none";
    psw_error.style.display = "none";

loginbtn.onclick = function(){
    if (user.value.length===0)
        user_error.style.display = "block";
        else
        user_error.style.display = "none";
        
    if (psw.value.length===0)
        psw_error.style.display = "block";
        else
        psw_error.style.display = "none";
        
    if (psw.value.length>0 && user.value.length>0){
        loginbtn.type="submit";
        user_error.style.display = "none";
        psw_error.style.display = "none";
    }
}

user.onblur = function() {
    user_error.style.display = "none";
};

psw.onblur = function() {
    psw_error.style.display = "none";
};

