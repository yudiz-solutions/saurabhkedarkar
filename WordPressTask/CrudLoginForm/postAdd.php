<?php 
include "connection.php";
include "postAddPhp.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <form  method="post" >
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">First Name</label>
                <div class="col-md-3">
                    <input type="text" id="fname" class="form-control firstname" name="fname" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">First Name</label>
                <div class="col-md-3">
                    <input type="text" id="fname" class="form-control fname" name="fname" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Last Name</label>
                <div class="col-md-3">
                    <input type="text" id="lname" class="form-control lname" name="lname" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Email</label>
                <div class="col-md-3">
                    <input type="text" id="email" class="form-control email" name="email" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Massage</label>
                <div class="col-md-3">
                    <input type="text" id="massage" class="form-control massage" name="massage" >
                </div>
            </div><br>
            <div class="text-center">
                <button type="submit" id="submit" class="btn btn-outline-success" name="submit"
                    value="submit">Submit</button>
            </div>
        </form>

    </div>


</body>    