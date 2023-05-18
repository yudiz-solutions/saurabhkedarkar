<?php
include "connection.php";
 
  $sql="SELECT * FROM `post_table`";
  $result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <div>
          <a class="btn btn-primary" href="postAdd.php">Add Post</a>
        </div>

    <table class="table" id="TableForm">
            <thead>
                <tr class="alert alert-info">
                    <th scope="col">Sl no</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Massage</th>
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
                 ?>
                 <tr >
                            <th scope="row" ><?php echo $num ;?></th>
                            <td scope="row" ><?php echo $fname ;?> </td>
                            <td scope="row" ><?php echo $lname ;?> </td>
                            <td scope="row" ><?php echo $email ;?> </td>
                            <td scope="row" ><?php echo $massage ;?> </td>
                </tr>           
                 <?php
                }
                ?>
                
            </tbody>
    </div>


</body>    
</html>