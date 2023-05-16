<?php
session_start();

$firstnameErr = $usernameErr = $lastnameErr = $passwordErr = $confirm_passwordErr = $emailErr = "";
$firstname = $username = $lastname = $password = $confirm_password = $email = $dob = $hobby_temp = $gender = $country = $message = $file = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $firstnameErr = "Firstname is required";
      }
}
$_SESSION['fname'] = $firstnameErr ?? '';

// if (empty($fname)) {
//     $error['fname'] = "Name is Required";
// } else {
//     if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
//         $error['fname'] = "Only letters and white space allowed";
//     }
// }
// if (empty($uname)) {
//     $error['uname'] = "Name is Required";
// }

// if (empty($lname)) {
//     $error['lname'] = "Name is Required";
// }


// if (empty($password)) {
//     $error['password'] = "Name is Required";
// } else {
//     // /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{5,}$/
//     if (!preg_match(" /^[A-Za-z]\w{7,14}$/", $password)) {
//         $error['password'] = "minimum 5 characters,At least one uppercase and lowercase,At least one digit,At least one special character";

//     }
// }

// if (empty($cpassword)) {
//     $error['cpassword'] = "Name is Required";
// }

// $sql_match = "SELECT * FROM `registerform` WHERE `email`= '$email'";
// $sqlQueryMatch = mysqli_query($con, $sql_match);
// $row = mysqli_num_rows($sqlQueryMatch);

// if ($row > 0) {
//     $error['email'] = "mail is already exist";
//     // $error['uname']="user is already exist";
// }
// if ($password !== $cpassword) {
//     $error['cpassword'] = "password is not match";

// }

?>