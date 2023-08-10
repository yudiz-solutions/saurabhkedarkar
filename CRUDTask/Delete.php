<?php 
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `user_add` WHERE `user_add`.`id`=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        
        header('location:UserDisplay.php');
    }else{
        die(mysqli_error($con));
    }

}
?>