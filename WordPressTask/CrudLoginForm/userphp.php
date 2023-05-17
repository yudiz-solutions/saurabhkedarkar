<?php
include "connection.php";
error_reporting(0);
$errorMSG = [];

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fname = isset($_POST["fname"]) ? test_input($_POST["fname"]) : '';
  if (empty($fname)) {
       $errorMSG["fname"] = "Name is required";
  }

//   if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
//        $error['fname'] = "Only letters and white space allowed";
//   }

$uname = isset($_POST["uname"]) ? test_input($_POST["uname"]) : '';
  if (empty($uname)) {
      $errorMSG["uname"] = "User Name is Required";
  }
$lname = isset($_POST["lname"]) ? test_input($_POST["lname"]) : '';
  if (empty($lname)) {
      $errorMSG["lname"] = "Last Name is Required";
  }
$email = isset($_POST["email"]) ? test_input($_POST["email"]) : '';
  if (empty($email)) {
      $errorMSG["email"] = "Email is Required";
  }  

$sql_match = "SELECT * FROM `registerform` WHERE `email`= '$email'";
  $sqlQueryMatch = mysqli_query($con, $sql_match);
  $row = mysqli_num_rows($sqlQueryMatch);

  if ($row > 0) {
     $errorMSG['email'] = "email is already exist";
  }

$password = $_POST["password"];
  if (empty($password)) {
     $errorMSG["password"] = "Password is Required";
  }

$cpassword = $_POST["cpassword"];
  if (empty($cpassword)) {
     $errorMSG['cpassword'] = "confirm password is Required";
  }
  if ($password !== $cpassword) {
     $errorMSG['cpassword'] = "password is not match";
  }

$DOB = $_POST["DOB"];
$tempHobby = $_POST["hobby"];
$hobby = "";
  foreach ($tempHobby as $curr) {
      $hobby .= $curr . ",";
  }
$gender = isset($_POST["gender"]);
$country = $_POST["country"];
$massage = isset($_POST["massage"]) ? test_input($_POST["massage"]) : '';

$profile = $_FILES["profile"]["name"];

$imgTemp = $_FILES["profile"]["tmp_name"];

$folder = '';

   if (!empty($imgTemp)) {
      $folder = "image/" . $profile;
      move_uploaded_file($imgTemp, $folder);

   }

   if (empty($errorMSG)) {
      $sql = "INSERT INTO `registerform` (`fname`, `uname`, `lname`, `email`, 
      `password`, `confpassword`, `dob`, `hobby`, `gender`, `country`,   `massage`, `profile`) 
      VALUES ('$fname', '$uname', '$lname', '$email', '$password', 
      '$cpassword', '$DOB', '$hobby', '$gender', '$country', '$massage',   '$folder')";

      $result = mysqli_query($con, $sql);
        if ($result) {
            echo json_encode(['message' => 'Success message', 'status' => true]);
        }
    } else {
        $newArr = array('error' => $errorMSG, 'status' => false);
        echo json_encode($newArr);

    }

?>