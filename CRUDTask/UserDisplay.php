<?php 
  include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       table {
           font-weight: bold;
           border: 1px solid black;
           padding: 10px;
           text-align: center;
        }
    </style>
</head>
<body>
 <div class="container">
        <a class="btn btn-primary my-5" href="User.php" class="text-light">Add User</a>
   <table class="table">
      <thead >
            <tr class="alert alert-info">
              <th scope="col">Sl no</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">User Name</th>
              <th scope="col">Password</th>
              <th scope="col">Profile</th>
              <th scope="col">ASM</th>
              <th scope="col">Opration</th>
            </tr>
      </thead>
      <tbody >

         <?php 
            $sql="SELECT * FROM `user_add` ";
            $result=mysqli_query($con,$sql);
            $count =0;
            $num = 0;
            // $num=$id+$count;
        
          if($result){
             while($row=mysqli_fetch_assoc($result))
             {
                $num++;
                $id=$row['id'];
                $fname=$row['fname'];
                $lname=$row['lname'];
                $uname=$row['uname'];
                $password=$row ['password'];
                $profile=$row['profile'];
                $asm=$row['asm'];
                echo '<tr >
                <th scope="row" >'.$num.' </th>
                
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$uname.'</td>
                <td>'.$password.'</td>
                <td><img src="'.$profile.'"width=100 height=120></td>
                <td>'.$asm.'</td>
                <td>
                <a class="btn btn-primary" href="edit.php?updateid='.$id.'" class="text-light" >Edit</a>
                <a class="btn btn-danger" href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
                <a class="btn btn-success" href="view.php?viewid='.$id.'"  class="text-light">View</a>
                </td>
                </tr>';
              }
            }
          ?>
        </tbody>
  </table>
  </div>
    
</body>
</html>