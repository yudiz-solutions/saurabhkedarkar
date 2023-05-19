<?php
include "connection.php";
if(isset($_POST['submit'])){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $massage = $_POST['massage'];
   $password = $_POST['password'];
   $caption = $_POST['caption'];

   $sql = "INSERT INTO `post_table` (`fname`, `lname`, `email`, `massage`) VALUES ('$fname', '$lname', '$email', '$massage')";

  if($result = mysqli_query($con,$sql)){
    $last_id = mysqli_insert_id($con);


   $not_allowd_fields = array(
      'fname',
      'lname',
      'email',
      'massage',
      'submit'
   );
   foreach($_POST as $key => $value){

      if( in_array($key,$not_allowd_fields)){
         continue;
      }

      $sqlMeta ="INSERT INTO `meta_post` (`post_id`, `key`, `value`) VALUES ('$last_id', '$key', '$value')";
      $resultMeta = mysqli_query($con,$sqlMeta);
      if($resultMeta){
         header("location:postView.php");
      }
   }
   

    

  }
}
?>