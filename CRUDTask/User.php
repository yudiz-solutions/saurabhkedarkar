<?php
include 'connection.php';
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

  $profile = $_FILES["profile"]["name"];
  $tempname = $_FILES["profile"]["tmp_name"];
  $folder = "./image/" . $profile;

  $ch = $_POST['asm'];
  $asm = "";
  foreach ($ch as $asm1) {
    $asm .= $asm1 . ",";
  }

  $sql = "INSERT INTO `user_add` (`fname`, `lname`, `uname`, `email`, `password`, `gender`, `country`, `state`, `city`, `bio`, `profile`, `asm`) VALUES ('$fname', '$lname', '$uname', '$email', '$password', '$gender', '$country', '$state', '$city', '$bio', '$folder', '$asm')";

  $result = mysqli_query($con, $sql);

  if (move_uploaded_file($tempname, $folder)) {
    // echo "hello";
    header('location:UserDisplay.php');
  }

  // if($result){
  //   }else{
  //       die(mysqli_error($con));
  //   }
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
      color: blue;
      text-align: center;
    }

    form {
      border: 1px solid #009999;
      background-color: #91ddea;
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
    <h2>Register Form</h2>
    <form method="post" enctype="multipart/form-data">
      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">First Name</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="fname">
        </div>
      </div><br>
      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Last Name</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="lname">
        </div>
      </div><br>

      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">User Name</label>
        <div class="col-md-3">
          <input type="text" class="form-control" name="uname">
        </div>
      </div><br>


      <div class="form-group row">
        <label for="full_name" class="col-md-2 col-form-label text-md-right">Email</label>
        <div class="col-md-3">
          <input type="email" class="form-control" name="email">
        </div>
      </div><br>

      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Password</label>
        <div class="col-md-3">
          <input type="password" class="form-control" name="password">
        </div>
      </div><br>

      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Gender</label>
        <div class="col-md-3">
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="other">Other
        </div>
      </div></br>

      <div class="form-group row">
        <label for="country" class="col-md-2 col-form-label text-md-right">Country</label>
        <select name="country" id="country-dropdown" class="col-md-3">
          <option value="">Select Country</option>
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

      </div>
      <br>

      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Bio</label>
        <div class="col-md-3">
          <textarea name="bio" rows="4" cols="50"></textarea>
        </div>
      </div></br>
      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Profile</label>
        <div class="col-md-3">
          <input type="file" name="profile" value="">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">Active Social Media</label>
        <div class="col-md-3">
          <input type="checkbox" name="asm[]" value="Instagram">Instagram<br>
          <input type="checkbox" name="asm[]" value="Twitter">Twitter<br>
          <input type="checkbox" name="asm[]" value="LinkedIN">LinkedIN<br>
          <input type="checkbox" name="asm[]" value="Facebook">Facebook<br>
          <input type="checkbox" name="asm[]" value="Whatsapp">Whatsapp<br>
        </div>
      </div></br>
      <div class="text-center">
        <button type="submit" class="btn btn-outline-success" name="submit">Submit</button>
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
          cache: false,
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
          cache: false,
          success: function (result) {
            $("#city-dropdown").html(result);
          }
        });
      });
    });

  </script>

</body>

</html>