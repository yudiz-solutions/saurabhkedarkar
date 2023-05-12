<?php
include "connection.php";
$fname=$uname=$lname=$email=$password=$cpassword="";
$error=[];

    $fname = $_POST["fname"];

    if(empty($fname)){
        $error['fname']="Name is Required";
    }else{
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
            $error['fname']="Only letters and white space allowed";
        }   
    }
    $uname = $_POST["uname"];
    if(empty($uname)){
        $error['uname']="Name is Required";
    }
    $lname = $_POST["lname"];
    if(empty($lname)){
        $error['lname']="Name is Required";
    }
    $email = $_POST["email"];
    if(empty($email)){
        $error['email']="Name is Required";
    }
    // else{
    //     /^[A-Za-z]\w{7,14}$/
    //     if(!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$email)){
    //         $error['email']= "please enter proper email";
    //     }
    // }
    $password = $_POST["password"];
    if(empty($password)){
        $error['password']="Name is Required";
    }
    else{
        // /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{5,}$/
           if(!preg_match(" /^[A-Za-z]\w{7,14}$/",$password)){
                $error['password']="minimum 5 characters,At least one uppercase and lowercase,At least one digit,At least one special character";
            }
    }
    
    $cpassword = $_POST["cpassword"];
    if(empty($cpassword)){
        $error['cpassword']="Name is Required";
    }
    $DOB = $_POST["DOB"];
    $tempHobby =$_POST["hobby"];
    $hobby="";
    foreach($tempHobby as $curr){
        $hobby.=$curr.",";
    }
    $gender = isset($_POST["gender"]);
    $country = $_POST["country"];
    $massage = $_POST["massage"];
    $profile = $_FILES["profile"]["name"];
    $imgTemp = $_FILES["profile"]["tmp_name"];
    $folder = "./image/" . $profile;
   if(empty($error)){
    $sql = "INSERT INTO `registerform` (`fname`, `uname`, `lname`, `email`, 
    `password`, `confpassword`, `dob`, `hobby`, `gender`, `country`, `massage`, `profile`) 
    VALUES ('$fname', '$uname', '$lname', '$email', '$password', 
    '$cpassword', '$DOB', '$hobby', '$gender', '$country', '$massage', '$folder')";

    $result=mysqli_query($con,$sql);
     move_uploaded_file($imgTemp, $folder);
    if($result){
        // header('location:loginForm.php');
    }
}


?>