<?php
include "connection.php";

$error = [];
if (isset($_POST['submit'])) {
   $fname = $_POST['fname'];
   
   if (empty($fname)) {
      $error['fname'] = " First Name is Required";
   }

   $lname = $_POST['lname'];
   if (empty($fname)) {
      $error['lname'] = " last Name is Required";
   }
   $email = $_POST['email'];
   if (empty($fname)) {
      $error['email'] = " email is Required";
   }
   $massage = $_POST['massage'];
   if (empty($fname)) {
      $error['massage'] = " massage is Required";
   }
   $password = $_POST['password'];
   if (empty($fname)) {
      $error['password'] = " password  is Required";
   }
   $caption = $_POST['caption'];
   if (empty($fname)) {
      $error['caption'] = " caption  is Required";
   }
   $file = $_FILES["profile"]["name"];
   
   // $file = isset($_FILES["profile"]["name"])?$_FILES["profile"]["name"]:'';
   $tempFile = isset($_FILES["profile"]["tmp_name"])?$_FILES["profile"]["tmp_name"]:'';
      $folder="image/".$file;

      move_uploaded_file($tempFile,$folder);
     
   if (empty($error)) {
      $sql = "INSERT INTO `post_table` (`fname`, `lname`, `email`,`file`, `massage`) VALUES ('$fname', '$lname', '$email', '$folder','$massage')";

      if ($result = mysqli_query($con, $sql)) {

         $last_id = mysqli_insert_id($con);


         $not_allowd_fields = array(
            'fname',
            'lname',
            'email',
            'massage',
            'profile',
            'submit'
         );
         foreach ($_POST as $key => $value) {

            if (in_array($key, $not_allowd_fields)) {
               continue;
            }

            $sqlMeta = "INSERT INTO `meta_post` (`post_id`, `key`, `value`) VALUES ('$last_id', '$key', '$value')";
            $resultMeta = mysqli_query($con, $sqlMeta);
            if ($resultMeta) {
               header("location:postView.php");
            }
         }
      } 
   }
}
?>