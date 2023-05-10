<?php
include 'connection.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `user_add` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$fname = $row['fname'];
$lname = $row['lname'];
$uname = $row['uname'];
$email = $row['email'];
$password = $row['password'];
$gender = $row['gender'];
$country = $row['country'];
$state = $row['state'];
$city = $row['city'];
$bio = $row['bio'];
$tempASM = $row['asm'];
$asm = explode(",", $tempASM);


if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $bio = $_POST['bio'];
  $temp = $_POST['asm'];
  $asm = "";
  foreach ($temp as $cur) {
    $asm .= $cur . ",";
  }

  $sql = "UPDATE `user_add` SET `fname` = '$fname', `lname` = '$lname', `uname` = '$uname',`email`='$email',`password`='$password',`gender`='$gender',`country`='$country',`state`='$state',`city`='$city',`bio`='$bio',`asm`='$asm' WHERE `user_add`.`id` = $id ";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:userDisplay.php');
    // header('location:display.php');
  } else {
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    h2 {
      text-align: center;

    }

    form {
      border: 1px solid #009999;
      background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);  
      padding-left: 50px;
      padding-right: 50px;
      padding-top: 30px;
      padding-bottom: 20px;

    }

    .form-group {
      margin-left: 50px;
    }
  </style>
</head>

<body>
  <div class="container my-5">
    <h2>Edit Data</h2>
    <form method="post">
      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">First Name</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="fname" value=<?php echo $fname; ?>>
        </div>
      </div><br>
      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Last Name</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="lname" value=<?php echo $lname; ?>>
        </div>
      </div><br>

      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">User Name</label>
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
        <label class="col-md-2 col-form-label text-md-right">Gender</label>
        <div class="col-md-3">
          <input type="radio" name="gender" value="male" <?php if ($gender == "Male") {
            echo "checked";
          } ?>>Male
          <input type="radio" name="gender" value="female" <?php if ($gender == "Female") {
            echo "checked";
          } ?>>Female
          <input type="radio" name="gender" value="other" <?php if ($gender == "Other") {
            echo "checked";
          } ?>>Other
        </div>
      </div></br>

      <div class="form-group row">
        <label for="full_name" class="col-md-2 col-form-label text-md-right">Country</label>
        <select name="country" id="country-dropdown" class="col-md-3">
          <option value="">Country</option>
          <?php

          $result = mysqli_query($con, "SELECT * FROM countries");
          while ($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
          <?php }
          ?>

        </select>
      </div><br>

      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">State</label>
        <select name="state" id="state-dropdown" class="col-md-3">

        </select>
      </div><br>

      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">City</label>
        <select name="city" id="city-dropdown" class="col-md-3">

        </select>
      </div><br>

      <div class="form-group">
        <label class="col-md-2 col-form-label text-md-right">Bio</label>
        <textarea name="bio" rows="4" cols="50" <?php echo $bio; ?>><?php echo $bio; ?></textarea>
      </div></br>

      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Active Social Media</label><br><br>
        <div class="col-md-3">
          <input type="checkbox" name="asm[]" value="Instagram" <?php if (in_array("Instagram", $asm)) {
            echo "checked";
          }
          ; ?>>Instagram<br>
          <input type="checkbox" name="asm[]" value="Twitter" <?php if (in_array("Twitter", $asm)) {
            echo "checked";
          }
          ; ?>>Twitter<br>
          <input type="checkbox" name="asm[]" value="LinkedIN" <?php if (in_array("LinkedIN", $asm)) {
            echo "checked";
          }
          ; ?>>LinkedIN<br>
          <input type="checkbox" name="asm[]" value="Facebook" <?php if (in_array("Facebook", $asm)) {
            echo "checked";
          }
          ; ?>>Facebook<br>
          <input type="checkbox" name="asm[]" value="Whatsapp" <?php if (in_array("Whatsapp", $asm)) {
            echo "checked";
          }
          ; ?>>Whatsapp<br>
        </div>
      </div></br>
      <div class="text-center">
        <button type="submit" class="btn btn-outline-success" name="submit">Update</button>
      </div>

    </form>
  </div>

  <script>

    $(document).ready(function () {
      $('#country-dropdown').on('change', function () {
        var country_id = this.value;
        $.ajax({
          url: "states-by-country.php",
          type: "POST",
          data: {
            country_id: country_id
          },
         
          success: function (result) {
            $("#state-dropdown").html(result);
            $('#city-dropdown').html('<option value="">Select State First</option>');
          }
        });
      });
      $('#state-dropdown').on('change', function () {
        var state_id = this.value;
        $.ajax({
          url: "cities-by-state.php",
          type: "POST",
          data: {
            state_id: state_id
          },
          success: function (result) {
            $("#city-dropdown").html(result);
          }
        });
      });
    });

  </script>
</body>

</html>