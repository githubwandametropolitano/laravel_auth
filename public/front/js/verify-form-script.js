$("#verifyForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        
        verifysubmitMSG(false, "Please enter your email.");
    } else {
        // everything looks good!
        // event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    $("#verifyForm").submit();
    


}

function verifyformSuccess(){
    $("#verifyForm")[0].reset();
    verifysubmitMSG(true, "Email sent! Please check your email.")
}



function verifysubmitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#emailSubmit").removeClass().addClass(msgClasses).text(msg);
}