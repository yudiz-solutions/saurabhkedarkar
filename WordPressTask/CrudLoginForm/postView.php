

<?php
include "connection.php";
 
  $sql="SELECT *,meta_post.key,meta_post.value FROM `post_table` INNER JOIN `meta_post` ON post_table.id = meta_post.Post_id";
  $result=mysqli_query($con,$sql);
?>

<?php include "header.php"?>

  
    <div class="container my-5">
        <div Style="padding-bottom: 10px;" >
            <a href="postAdd.php"><button class="btn btn-primary">Add Post</button></a>
        </div>

    <table class="table" id="TableForm">
            <thead>
                <tr class="alert alert-info">
                    <th scope="col">Sl no</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Massage</th>
                    <th scope="col">Caption</th>
                </tr>   
            </thead>  
            <tbody>
                <?php 
                $num=0;
                while($row=mysqli_fetch_array($result)){
                  $num++;
                 $fname = $row['fname'];
                
                 $lname = $row['lname'];
                 $email = $row['email'];
                 $massage = $row['massage'];
                 $file=$row['file'];
                //  $password = $row['key'];
                 
                 
                 $value = $row['value'];

                 ?>
                 <tr >
                            <th scope="row" ><?php echo $num ;?></th>
                            <td scope="row" ><?php echo $fname ;?> </td>
                            <td scope="row" ><?php echo $lname ;?> </td>
                            <td scope="row" ><?php echo $email ;?> </td>
                            <th scoe="row" img='<?php echo $file ;?>'></th>
                            <td scope="row" ><?php echo $massage ;?> </td>
                            <!-- <td scope="row" ><?php //echo $password ;?> </td> -->
                            <td scope="row" ><?php echo $value ;?> </td>
                </tr>           
                 <?php
                }
                ?>
                
            </tbody>
    </div>


<?php include "footer.php"?>