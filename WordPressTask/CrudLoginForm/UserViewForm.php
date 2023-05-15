<?php 
include 'connection.php';
session_start();
// error_reporting(0);

if (!isset($_SESSION['uname'])) {
	header("Location: loginForm.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table {
           font-weight: bold;
           border: 1px solid black;
           padding: 10px;
           text-align: center;
           margin-top: 20px;
        }
        .container{
         margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table" id="TableForm">
            <thead>
                <tr class="alert alert-info">
                    <th scope="col">Sl no</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Country</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Opration</th>
                 </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM registerform";

                $result = mysqli_query($con, $sql);
                $num=0;
               if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $num++;
                $id=$row["id"];
                $fname = $row["fname"];
                $uname = $row["uname"];
                $lname = $row["lname"];
                $email = $row["email"];
                $password = $row["password"];
                $cpassword = $row["confpassword"];
                $DOB = $row["dob"];
                $hobby = $row["hobby"];
                $gender = $row["gender"];
                $country = $row["country"];
                $massage = $row["massage"];
                $profile = $row["profile"];
               echo '<tr>
               <th scope="row" >'.$num.' </th>
                
                <td>'.$fname.'</td>
                <td>'.$lname.'</td>
                <td>'.$uname.'</td>
                <td>'.$DOB.'</td>
                <td>'.$country.'</td>
                <td><img src="'.$profile.'"width=100 height=120></td>
                <td>
                <a class="btn btn-primary" href="Editphp.php?editid='.$id.'" class="text-light" >Edit</a>
                <a class="btn btn-danger" href="Delete.php?deleteid='.$id.'" class="text-light" value="delete">Delete</a>
               </td>
               ' ;
                }
            }
                ?>

            </tbody>

        </table>
     <a class="btn btn-danger" href="logout.php">LogOut</a>
    </div>

</body>

</html>