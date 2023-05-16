jQuery(document).on("submit","form#loginform", function(e){
    e.preventDefault();
    // var form = $(this);
    // console.log(form)

    var errors = false;
    var userName = $("#userName").val();
    if (userName == undefined || userName == "") {
        console.log("kjkjll")
        $("span.userName").text("Please enter name.");
        errors = true;
    }

    // if (userName == undefined || userName == "") {
    //     $("span.userName").text("Please enter name.");
    //     errors = true;
    // }

    // if (userName == undefined || userName == "") {
    //     $("span.userName").text("Please enter name.");
    //     errors = true;
    // }


    if (errors == false) {
    //   $(this).submit(); 
      $('#loginform')[0].submit();
 
    }

    console.log(userName);
})