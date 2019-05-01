$("#linkForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        emailformError();
        emailsubmitMSG(false, "Please enter your email.");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var email = $("#email").val();
    


}

function emailformSuccess(){
    $("#linkForm")[0].reset();
    submitMSG(true, "We've emailed your password reset link!")
}

function emailformError(){
    $("#linkForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function emailsubmitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#linkSubmit").removeClass().addClass(msgClasses).text(msg);
}