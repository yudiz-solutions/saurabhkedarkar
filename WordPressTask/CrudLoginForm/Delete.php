<?php
include "connection.php";
if(isset($_GET['id'])){
    
    $id=$_GET['id'];
    
    $sql="DELETE FROM registerform WHERE `registerform`.`id` = $id";
    $result=mysqli_query($con,$sql);
    if($result){
        //  echo "Deleted successfully";
        // header('location:UserViewForm.php');
        echo 'Deleted successfully';
    }else{
        echo"hello";
    }
}
?>







    