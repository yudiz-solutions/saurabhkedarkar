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





<script type="text/javascript">
        $(document).on('submit','#RegisterForm'.function(e){
            
                e.preventDefault();
            $.ajax({
                method:"POST",
                url:"userphp.php",
                data:$('this').serialize(),
                success:function(data){
                    $('#RegisterForm').find('input').val('');
                },
                error:function(){
                    alert('error');
                }
            });
        });
    
    </script>

<script type="text/javascript">

$(document).ready(function(){
  $('#RegisterForm').submit(function(e){
   e.preventDefault();
   $.ajax({
       type:"POST",
       url:"userphp.php",
       data:$(this).serialize(),
       success:function(data){
           $('#postData').html("You data will be saved");
           

       },
       error:function(){
           alert("form submission failed !");
       }
   });
  });
});
</script>
   

    