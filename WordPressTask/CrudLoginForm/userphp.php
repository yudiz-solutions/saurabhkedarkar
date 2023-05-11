<?php
include "connection.php";

if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $uname = $_POST["uname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $DOB = $_POST["DOB"];
    $hobby = implode(',',$_POST["hobby"]);
    $gender = $_POST["gender"];
    $country = $_POST["country"];
    $massage = $_POST["massage"];
    $profile = $_FILES["profile"]["name"];
    $imgTemp = $_FILES["profile"]["tmp_name"];
    $folder = "./image/" . $profile;

    $sql = "INSERT INTO `registerform` (`fname`, `uname`, `lname`, `email`, 
    `password`, `confpassword`, `dob`, `hobby`, `gender`, `country`, `massage`, `profile`) 
    VALUES ('$fname', '$uname', '$lname', '$email', '$password', 
    '$cpassword', '$DOB', '$hobby', '$gender', '$country', '$massage', '$folder')";

    $result=mysqli_query($con,$sql);
     move_uploaded_file($imgTemp, $folder);
    if($result){
        header('location:loginForm.php');
    }

}
?>