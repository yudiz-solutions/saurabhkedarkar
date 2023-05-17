jQuery(document).on("submit","form#RegisterForm", function(e){
    e.preventDefault();

    var errors=false;
    var fName = $("#fname").val();
    if(fName == undefined || fName ==""){
        console.log("fnkdnk");
        $("span.firstname").html("please enter First name.");
        errors = true;
    }else{
            if (!preg_match("/^[a-zA-Z-' ]*$/",fName)){
                $("span.firstname").html("Only letters and white space allowed");
            }   
        }
     
    var uName = $("#uname").val();
    if(uName == undefined || uName ==""){
        $("span.username").html("please enter User name.");
        errors = true;
    }
    var lName = $("#lname").val();
    if(lName == undefined || lName ==""){
        $("span.lastname").html("please enter last name.");
        errors = true;
    }
    var email = $("#email").val();
    if(email == undefined || email ==""){
        $("span.useremail").html("please enter email.");
        errors = true;
    }
    

})