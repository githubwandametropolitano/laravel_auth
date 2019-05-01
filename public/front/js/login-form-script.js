$("#loginForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        loginformError();
        loginsubmitMSG(false, "Please enter your credential to log in.");
    } else {
        // everything looks good!
        // event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    $("#loginForm").submit();


    
}

function loginformSuccess(){
    $("#loginForm")[0].reset();
    loginsubmitMSG(true, "Login successfully!")
}

function loginformError(){
    $("#loginForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function loginsubmitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#loginSubmit").removeClass().addClass(msgClasses).text(msg);
}