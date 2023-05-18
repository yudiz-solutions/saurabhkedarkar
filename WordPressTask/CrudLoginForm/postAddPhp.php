<?php
include "connection.php";
if(isset($_POST['submit'])){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $massage = $_POST['massage'];

   $sql = "INSERT INTO `post_table` (`fname`, `lname`, `email`, `massage`) VALUES ('$fname', '$lname', '$email', '$massage')";

   $result = mysqli_query($con,$sql);
   if($result){
      echo "hello";
   }


}
?>