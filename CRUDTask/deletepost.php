<?php
include 'connection.php';
// echo "hello";
    
     
     $postid=$_GET['delpost'];
     $id=$_GET['viewid'];

    
    $sql="DELETE FROM post_data WHERE `post_data`.`post_id` = $postid";
     
    $result=mysqli_query($con,$sql);
    if($result){
       
         header('location:view.php?viewid='.$id);
    }else{
        die(mysqli_error($con));
    }


?>