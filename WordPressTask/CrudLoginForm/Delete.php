<?php
include "connection.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM registerform WHERE `registerform`.`id` = $id";
    $result=mysqli_query($con,$sql);
    if($result){
        //  echo "Deleted successfully";
        header('location:UserViewForm.php');
    }else{
        die(mysqli_error($con));
    }
}
?>





<script>
        $(document).on('submit', '#RegisterForm', function (e) {
            e.preventDefault();
            $.ajax({
                metho: "POST", 
                url: "userphp.php", 
                data: $(this).serialize(), 
                success: function () {
                    $('#RegisterForm').find('input').val('')
                }
            })
        })
    </script>
   

    