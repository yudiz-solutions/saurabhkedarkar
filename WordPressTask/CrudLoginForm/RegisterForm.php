<?php
include "connection.php";
// include "userphp.php"
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Registation Form</title>
    <style>
        .error {
            color: #FF0000;
        }

        form {
            border: 1px solid #009999;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 50px;
            padding-bottom: 20px;

        }
    </style>

</head>

<body>
    <div class="container my-5">
        <h2>Registation Form</h2>
        <form id="RegisterForm" method="post" enctype="multipart/form-data" data-toggle="validator">
        <div class="alert alert-danger display-error" style="display: none">
         </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">First Name</label>
                <div class="col-md-3">
                    <span class="error fname">*</span>
                    <input type="text" id="fname" class="form-control" name="fname">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">User Name</label>
                <div class="col-md-3">
                    <span class="error uname">*</span>
                    <input type="text" class="form-control" id="uname" name="uname">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Last Name</label>
                <div class="col-md-3">
                    <span class="error lname">*</span>
                    <input type="text" id="lname" class="form-control" name="lname">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Email</label>
                <div class="col-md-3">
                    <span class="error email">*</span>
                    <input type="text" id="email" class="form-control" name="email">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Password</label>
                <div class="col-md-3">
                    <span class="error password">*</span>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Confirm Password</label>
                <div class="col-md-3">
                   <span class="error cpassword">*</span>
                   <input type="password" class="form-control" name="cpassword">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Date Of Birth</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" name="DOB">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Hobby</label>
                <div class="col-md-3">
                    <input type="checkbox" name="hobby[]" value="cricket">cricket<br>
                    <input type="checkbox" name="hobby[]" value="Gardening">Gardening<br>
                    <input type="checkbox" name="hobby[]" value="Photography">Photography<br>
                    <input type="checkbox" name="hobby[]" value="Painting">Painting<br>
                    <input type="checkbox" name="hobby[]" value="Fishing">Fishing<br>
                    <input type="checkbox" name="hobby[]" value="Dance">Dance<br>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Gender</label>
                <div class="col-md-3">
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Country</label>
                <select class="col-md-3" name="country">
                    <option value="">Select Country</option>
                    <option value="india">India</option>
                    <option value="united states">United States</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                </select>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Message</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="massage">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Profile</label>
                <div class="col-md-3">
                    <input type="file" class="form-control" name="profile">
                </div>
            </div><br>
            <div class="text-center">
                <button type="submit" id="submit" class="btn btn-outline-success" name="submit"
                    value="submit">Submit</button>
            </div>
            <div id="msg">

            </div>

        </form>
    </div>

    <script type="text/javascript">

        $(document).ready(function () {
            $(document).on("submit",'#RegisterForm',function(e){
            //$('#RegisterForm').click(function (e) {
                e.preventDefault();
                
            //  var firstname = $("#fname").val();
                // var username = $("#uname").val();
                // var lastname = $("#lname").val();
                // var email = $("#email").val();
                // var password = $("#password").val();
                // var confirm_password = $("#cpassword").val();

                // if(firstname=""||username=""||lastname=""||email=""||password=""||confirm_password=""){
            //         if(firstname=""){
            //         alert("Please fill all the Field");
            //     }
            // })

                $.ajax({
                    method: "POST",
                    url: "userphp.php",
                    dataType:"json",
                    data: $(this).serialize(),
                    success: function (data) {
                        if (data.status == true){
                            // alert("Success: " +data);
                        } else {
                            console.log(data)
                            
                            $("span.fname").text(data.error.uname);
                            $("span.uname").html(data.error.uname);
                            $("span.lname").html(data.error.lname);
                            $("span.email").html(data.error.email);
                            $("span.password").html(data.error.password);
                            $("span.cpassword").html(data.error.cpassword);

                            // $(".display-error").html("<ul>"+data+"</ul>");
                            // $(".display-error").css("display","block");
                        }
            },
            });
            });
        });
    </script>

</body>


</html>