<?php 
include "connection.php";


error_reporting(0);
    isset($_GET['editid']);
     $id=$_GET['editid'];
   
    $sql="SELECT * FROM `registerform` WHERE registerform.id=$id"; 
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
   
    $fname = $row["fname"];
    $uname = $row["uname"];
    $lname = $row["lname"];
    $email = $row["email"];
    $password = $row["password"];
    $cpassword = $row["confpassword"];
    $DOB = $row["dob"];
    $hobby = explode(',',$row["hobby"]);
    $gender = $row["gender"];
    $country = $row["country"];
    $massage = $row["massage"];
    $profile = $row["profile"];

   

    if(isset($_POST["update"])){
        $fname = $_POST["fname"];
        $uname = $_POST["uname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["confpassword"];
        $DOB = $_POST["dob"];
        $hobby = implode(",", $_POST["hobby"]);
        $gender = $_POST["gender"];
        $country = $_POST["country"];
        $massage = $_POST["massage"];
        // $folder = $_POST["profile"];

        $profile = isset($_FILES["profile"]["name"]) ? $_FILES["profile"]["name"] : '';
        $profile_tmp = isset($_FILES["profile"]["tmp_name"]) ? $_FILES["profile"]["tmp_name"] : '';
        $folder = "./image/" . $profile;



        if(!empty($_FILES["profile"]["tmp_name"])){
            move_uploaded_file($profile_tmp, $folder);
        }else{
            $folder = isset($_POST['hidden_file']) ? $_POST['hidden_file'] : '';
        }

       
        $sql="UPDATE `registerform` SET `fname` = '$fname', `uname` = '$uname ', `lname` = '$lname', `email` = '$email', `password` = '$password', `confpassword` = '$cpassword', `dob` = '$DOB', `hobby` = '$hobby ', `gender` = '$gender', `country` = '$country', `massage` = '$massage', `profile` = '$folder' WHERE `registerform`.`id` = $id";

        
        $result=mysqli_query($con,$sql);
        if($result){
            header('location:UserViewForm.php');
        }
    }

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
    <title>Edit Form</title>
    <style>
        .errorColor{
             color:#FF0000;
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
        <h2>Edit Form</h2>
        <form id="RegisterForm" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">First Name</label>
                 <div class="col-md-3">
                    <input type="text" class="form-control" name="fname" value=<?php echo $fname; ?>>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">User Name</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="uname" value=<?php echo $uname; ?>>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Last Name</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="lname" value=<?php echo $lname; ?>>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Email</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="email" value=<?php echo $email; ?>>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Password</label>
                <div class="col-md-3">
                    <input type="password" class="form-control" name="password" value=<?php echo $password; ?>>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Confirm Password</label>
                <div class="col-md-3">
                    <input type="password" class="form-control" name="cpassword" value=<?php echo $cpassword; ?>>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Date Of Birth</label>
                <div class="col-md-3">
                    <input type="date" class="form-control" name="DOB" value=<?php echo $DOB; ?>>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Hobby</label>
                <div class="col-md-3">
                    
                    <input type="checkbox" name="hobby[]" value="cricket"<?php echo in_array("cricket",$hobby) ?'checked="checked"':''?>>cricket <br>
                    <input type="checkbox" name="hobby[]" value="Gardening"<?php echo in_array("Gardening",$hobby) ?'checked="checked"':''?>>Gardening<br>
                    <input type="checkbox" name="hobby[]" value="Photography"<?php echo in_array("Photography",$hobby) ?'checked="checked"':''?>>Photography<br>
                    <input type="checkbox" name="hobby[]" value="Painting"<?php echo in_array("Painting",$hobby) ?'checked="checked"':''?>>Painting<br>
                    <input type="checkbox" name="hobby[]" value="Fishing"<?php echo in_array("Fishing",$hobby) ?'checked="checked"':''?>>Fishing<br>
                    <input type="checkbox" name="hobby[]" value="Dance"<?php echo in_array("Dance",$hobby) ?'checked="checked"':''?>>Dance<br>
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Gender</label>
                <div class="col-md-3">
                    <input type="radio" name="gender" value="male"<?php if ($gender == "male") {echo "checked"; } ?>>Male
                    <input type="radio" name="gender" value="female"<?php if ($gender == "female") {echo "checked"; } ?>>Female
                    <input type="radio" name="gender" value="other"<?php if ($gender == "other") {echo "checked"; } ?>>Other
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Country</label>
                <select class="col-md-3" name="country">
                    <option value="">Select Country</option>
                    <option value="india"<?php if($country=="india"){echo "selected";}?>>India</option>
                    <option value="united states"<?php if($country=="united states"){echo "selected";}?>>United States</option>
                    <option value="australia"<?php if($country=="australia"){echo "selected";}?>>Australia</option>
                    <option value="canada"<?php if($country=="canada"){echo "selected";}?>>Canada</option>
                </select>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Message</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="massage" value="<?php echo $massage;?>">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Profile</label>
                <div class="col-md-3">
                    <input type="file" class="form-control" name="profile" value="">
                    <input type="hidden" name="hidden_file" value="<?php echo $profile; ?>">
                    
                </div>

            </div><br>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-success" name="update">Update</button>
            </div>
        </form>
    </div>
    
</body>

</html>