<?php
include "connection.php";
session_start();

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
        .errorColor {
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
        <form id="RegisterForm" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">First Name</label>
                <div class="col-md-3">
                    <span class="errorColor">*
                        <?php echo $error['fname'] ?? ''; ?>
                    </span>
                    <input type="text" class="form-control" name="fname" id="fname">
                    <span id="fname_error"></span>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">User Name</label>
                <div class="col-md-3">
                    <span class="errorColor">*
                        <?php echo $error['uname'] ?? ''; ?>
                    </span>
                    <input type="text" class="form-control" name="uname" id="uname">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Last Name</label>
                <div class="col-md-3">
                    <span class="errorColor">*
                        <?php echo $error['lname'] ?? ''; ?>
                    </span>
                    <input type="text" class="form-control" name="lname" id="lname">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Email</label>
                <div class="col-md-3">
                    <span class="text-danger">*
                        <?php
                            if(isset($_SESSION['email'])){
                                echo $_SESSION['email'];
                            }
                         ?>
                    </span>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Password</label>
                <div class="col-md-3">
                    <span class="errorColor">*
                        <?php echo $error['password'] ?? ''; ?>
                    </span>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Confirm Password</label>
                <div class="col-md-3">
                    <span class="errorColor">*
                        <?php echo $error['cpassword'] ?? ''; ?>
                    </span>
                    <input type="password" class="form-control" name="cpassword" id="cpassword">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Date Of Birth</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" name="DOB" id="DOB">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Hobby</label>
                <div class="col-md-3" id="hobby">
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
                <div class="col-md-3" id="gender">
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Country</label>
                <select class="col-md-3" name="country" id="country">
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
                    <input type="text" class="form-control" name="massage" id="massage">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Profile</label>
                <div class="col-md-3">
                    <input type="file" class="form-control" name="profile" id="profile">
                </div>
            </div><br>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-success" name="submit" value="submit">Submit</button>
            </div>
        </form>

    </div>
    <script type="text/javascript">

        $(document).ready(function () {
            $('#RegisterForm').submit(function (e) {
                e.preventDefault();
                // var fname = $("#fname").value;
                // if(fname=""){
                //     alert"name is require";
                // }

                $.ajax({
                    url: "userphp.php",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function (response) {
                        console.log(response);
                        if(response.email !== ''){
                            $('#fname_error').text(response.fname);
                        }
                         // $('#postData').html("You data will be saved");
                         
                         
                        //  $("#RegisterForm").trigger("reset");
                        },
                    error: function () {
                        alert("form submission failed !");
                    }
                });
            });
        });
    </script>
</body>

</html>