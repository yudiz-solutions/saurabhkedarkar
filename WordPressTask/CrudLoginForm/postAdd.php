<?php 
include "connection.php";
include "postAddPhp.php";

?>

<?php include "header.php"?>


    <div class="container my-5">
        <h2 style="text-align:center;">Post Register Form</h2>
        <form  method="post" style="border: solid;
    margin: 5px; padding-top: 10px;" enctype="multipart/form-data">
           
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">First Name</label>
                <div class="col-md-3">
                    <span class="error">*<?php echo $error['fname']??''; ?></span>
                    <input type="text" id="fname" class="form-control fname" name="fname" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Last Name</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['lname']??''; ?></span>
                    <input type="text" id="lname" class="form-control lname" name="lname" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" >Email</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['email']??''; ?></span>
                    <input type="text" id="email" class="form-control email" name="email" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Massage</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['massage']??''; ?></span>
                    <input type="text" id="massage" class="form-control massage" name="massage" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Profile</label>
                <div class="col-md-3">
                    <input type="file" class="form-control" id="profile" name="profile">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Password</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['password']??''; ?></span>
                    <input type="password" id="password" class="form-control" name="password" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Caption</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['caption']??''; ?></span>
                    <input type="text" id="caption" class="form-control" name="caption" >
                </div>
            </div><br>
            <div class="text-center" style="padding-bottom: 10px;">
                <button type="submit" id="submit" class="btn     btn-outline-success" name="submit"
                    value="submit">Submit</button>
            </div>
        </form>

    </div>


<?php include "footer.php"?>