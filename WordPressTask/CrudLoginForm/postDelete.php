<?php  
// echo "hello";
 include "connection.php";
if(isset($_GET['deleteid'])){
  

    $id = $_GET['deleteid'];
   
    // $sql = "DELETE * FROM post_table WHERE id = '$id'";
    // echo $sql;
     $sql ="DELETE FROM post_table WHERE `post_table`.`id` = $id";
    $result = mysqli_query($con, $sql);
    if($result){
         
         header("location:postView.php");
    }else{
        echo "hello";
    }


}

?>