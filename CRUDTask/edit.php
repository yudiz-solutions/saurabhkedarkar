<?php 
 include 'connection.php';
 $id=$_GET['updateid'];
 $sql="SELECT * FROM `user_add` WHERE id=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 
 $fname=$row['fname'];
 $lname=$row['lname'];
 $uname=$row['uname'];
 $email=$row['email'];
 $password=$row['password'];
 $gender=$row['gender'];
 $country=$row['country'];
 $state=$row['state'];
 $city=$row['city'];
 $bio=$row['bio'];
 $tempASM=$row['asm'];
 $asm=explode(",",$tempASM);


 if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $bio=$_POST['bio'];
    $temp=$_POST['asm'];
    $asm="";
    foreach($temp as $cur){
      $asm.=$cur.",";
    }

 $sql ="UPDATE `user_add` SET `fname` = '$fname', `lname` = '$lname', `uname` = '$uname',`email`='$email',`password`='$password',`gender`='$gender',`country`='$country',`state`='$state',`city`='$city',`bio`='$bio',`asm`='$asm' WHERE `user_add`.`id` = $id ";
  $result=mysqli_query($con,$sql);
  if($result){
   header('location:userDisplay.php');
   // header('location:display.php');
  }else{
    die(mysqli_error($con));
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
    <title>User</title>
</head>
<body>
<div  class="container my-5">
        <form method="post">
            <div class="form-group row">
              <label  class="col-md-2 col-form-label text-md-right">First Name</label>
              <div class="col-md-3">
                <input type="text" class="form-control" name="fname" value=<?php echo $fname; ?>>
              </div>
            </div><br>
            <div class="form-group row">
              <label  class="col-md-2 col-form-label text-md-right">Last Name</label>
                <div class="col-md-3">
                   <input type="text" class="form-control" name="lname" value=<?php echo $lname; ?>>
                </div>
            </div><br>

            <div class="form-group row">
              <label  class="col-md-2 col-form-label text-md-right">User Name</label>
                <div class="col-md-3">
                   <input type="text" class="form-control" name="uname" value=<?php echo $uname; ?>>
                </div>
            </div><br>


            <div class="form-group row">
              <label for="full_name" class="col-md-2 col-form-label text-md-right">Email</label>
                <div class="col-md-3">
                   <input type="email" class="form-control" name="email" value=<?php echo $email; ?>>
                </div>
            </div><br>

            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right">Password</label>
                <div class="col-md-3">
                   <input type="password" class="form-control" name="password" value=<?php echo $password; ?>>
                </div>
            </div><br>

            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Gender</label >
                <div class="col-md-3">
                   <input type="radio" name="gender" value ="male" <?php if ($gender == "Male"){ echo "checked";}?>>Male
                   <input type="radio" name="gender" value="female" <?php if ($gender == "Female"){ echo "checked";}?> >Female
                   <input type="radio" name="gender" value="other" <?php if ($gender == "Other"){ echo "checked";}?> >Other
                </div>
            </div></br>

            <div class="form-group row">
              <label for="full_name" class="col-md-2 col-form-label text-md-right">Country</label>
                <select name="country" class="col-md-3">
                  <option value="">Country</option>
                   <option value="Austalia" <?php if ($country == "Austalia") echo 'selected'; ?>>Austalia</option>
                   <option value="Canada" <?php if ($country == "Canada") echo 'selected'; ?>>Canada</option>
                   <option value="Argentina" <?php if ($country == "Argentina") echo 'selected'; ?>>Argentina</option>
                   <option value="France" <?php if ($country == "France") echo 'selected'; ?>>France</option>
                   <option value="India" <?php if ($country == "India") echo 'selected'; ?>>India</option>
                
                </select>
            </div><br>

            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right">State</label>
                <select name="state" class="col-md-3">
                  <option value="">State</option>
                  <option value="Maharashtra" <?php if ($state == "Maharashtra") echo 'selected'; ?>>Maharashtra</option>
                  <option value="Karnataka" <?php if ($state == "Karnataka") echo 'selected'; ?>>Karnataka</option>
                  <option value="Gujarat" <?php if ($state == "Gujarat") echo 'selected'; ?>>Gujarat</option>
                  <option value="Himachal Pradesh" <?php if ($state == "Himachal Pradesh") echo 'selected'; ?>>Himachal Pradesh</option>
                  <option value="Bihar" <?php if ($state == "Bihar") echo 'selected'; ?>>Bihar</option>
                </select>
            </div><br>

            <div class="form-group row">
              <label class="col-md-2 col-form-label text-md-right">City</label>
              <select  name="city" class="col-md-3">
                <option  value="">City</option>
                <option  value="Mumbai" <?php if ($city == "Mumbai") echo 'selected'; ?>>Mumbai</option>
                <option  value="Kolkata" <?php if ($city == "Kolkata") echo 'selected'; ?>>Kolkata</option>
                <option  value="Bengaluru" <?php if ($city == "Bengaluru") echo 'selected'; ?>>Bengaluru</option>
                <option  value="Ahmedabad" <?php if ($city == "Ahmedabad") echo 'selected'; ?>>Ahmedabad</option>
              </select>
                
                </div><br>

            <div class="form-group">
                <label class="col-md-2 col-form-label text-md-right">Bio</label>
                <textarea name ="bio" rows ="4" cols="50" <?php echo $bio; ?>><?php echo $bio; ?></textarea>
            </div></br>
            
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Active Social Media</label><br><br>
                <div class="col-md-3">
                  <input type="checkbox" name="asm[]" value="Instagram" <?php if(in_array("Instagram",$asm)){
                    echo "checked";
                  };?>>Instagram<br>
                  <input type="checkbox" name="asm[]" value="Twitter" <?php if(in_array("Twitter",$asm)){
                    echo "checked";
                  };?>>Twitter<br>
                  <input type="checkbox" name="asm[]" value="LinkedIN" <?php if(in_array("LinkedIN",$asm)){
                    echo "checked";
                  };?>>LinkedIN<br>
                  <input type="checkbox" name="asm[]" value="Facebook" <?php if(in_array("Facebook",$asm)){
                    echo "checked";
                  };?>>Facebook<br>
                  <input type="checkbox" name="asm[]" value="Whatsapp" <?php if(in_array("Whatsapp",$asm)){
                    echo "checked";
                  };?>>Whatsapp<br>
               </div>
            </div></br>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-success" name ="submit">Update</button>
            </div>

        </form>
    </div>
</body>
</html>