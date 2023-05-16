<?php 
include 'connection.php';
session_start();
// error_reporting(0);

if (!isset($_SESSION['uname'])) {
	header("Location: loginForm.php");
}


$searchErr = '';
$searchData='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $sqlSearch ="SELECT * FROM registerform WHERE uname like '%$search%' or fname like '%$search%'";
        $resultSearch = mysqli_query($con, $sqlSearch);
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
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
       <form class="form-horizontal" action="#" method="post">
       <div class="row">
       <div class="form-group">
            <label class="control-label col-sm-4" for="email"><b>Search  Record Information:</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search here">
            </div>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
      </div>
      </form>   

   </div>

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
               
                    $num=0;


                    while($searchRow = mysqli_fetch_assoc($resultSearch)){
                      
                     //foreach($searchData as $searchRow){
                        $num ++;
                        echo'<tr>
                             <th scope="row" >'.$num.' </th>
                            <th scope="row" >'.$searchRow["fname"].' </th>
                            <th scope="row" >'.$searchRow["uname"].' </th>
                            <th scope="row" >'.$searchRow["lname"].' </th>
                            <th scope="row" >'.$searchRow["email"].' </th>
                            <th scope="row" >'.$searchRow["password"].' </th>
                            <th scope="row" >'.isset($searchRow["cpassword"]).' </th>
                            <th scope="row" >'.$searchRow["dob"].' </th>
                            <th scope="row" >'.$searchRow["hobby"].' </th>
                            <th scope="row" >'.$searchRow["gender"].' </th>
                            <th scope="row" >'.$searchRow["country"].' </th>
                            <th scope="row" >'.$searchRow["massage"].' </th>
                            <th scope="row" >'.$searchRow["profile"].' </th>
                            <td>
                             <a class="btn btn-primary" href="Editphp.php?editid='.$id.'" class="text-light" >Edit</a>
                             <a class="btn btn-danger" href="Delete.php?deleteid='.$id.'" class="text-light" value="delete">Delete</a>
                            </td>

                        </tr>';
                        exit();

                     }

                
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
               </tr>
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