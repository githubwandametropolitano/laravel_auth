$("#signupForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        console.log("aaaa");
        // handle the invalid form...
        regFormError();
        regsubmitMSG(false, "Please fill all fields to sign up.");
    } else {
        // everything looks good!
        // event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    $("#signupForm").submit();


    
}

function regformSuccess(){
    $("#signupForm")[0].reset();
    regsubmitMSG(true, "Sign up successfully!")
}

function regFormError(){
    $("#signupForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function regsubmitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#sigSubmit").removeClass().addClass(msgClasses).text(msg);
}