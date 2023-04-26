<?php  
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `crud` WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql ="UPDATE `crud` SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";

    $result=mysqli_query($con,$sql);
    if($result){
       header('location:display.php');
        // header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>
  <body>
    <div class="container my-5">
        <form method="post" >
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder ="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder ="Enter your email" name="email" value=<?php echo $email; ?>>
            </div>
            <div class="form-group">
                <label>mobile</label>
                <input type="text" class="form-control" placeholder ="Enter your mobile no." name="mobile" value=<?php echo $mobile; ?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder ="Enter your Password" name="password" value=<?php echo $password; ?>>
            </div>
            
            <button type="submit" class="btn btn-primary" name ="submit">Update</button>
        </form>
    </div>
  </body>
</html>