$("#resetForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        resetformError();
        resetsubmitMSG(false, "Please type your email.");
    } else {
        // everything looks good!
        //event.preventDefault();
        submitForm();
    }
});


function submitForm(){

    $("#resetForm").submit();


}

function resetformSuccess(){
    $("#resetForm")[0].reset();
    submitMSG(true, "New password created!")
}

function resetformError(){
    $("#linkForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function resetsubmitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#resetSubmit").removeClass().addClass(msgClasses).text(msg);
}