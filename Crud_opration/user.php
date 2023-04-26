<?php  
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    if(!preg_match("/^[a-zA-Z' ]*$/",$name)){

    }
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql ="INSERT INTO `crud` (`id`, `name`, `email`, `mobile`, `password`) VALUES (NULL, '$name', '$email', '$mobile', '$password')";

    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:display.php');
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
    <title>user page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
  </head>
  <body>
    <div  class="container h-100 my-5">
        <form method="post" class="vh-100">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder ="Enter your name" name="name" autocomplete="off">
                <span class ="errorColor">*<?php echo $nameError ?></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder ="Enter your email" name="email">
                <span class ="errorColor">*<?php echo $emailError ?></span>
            </div>
            <div class="form-group">
                <label>mobile</label>
                <input type="text" class="form-control" placeholder ="Enter your mobile no." name="mobile">
                <span class ="errorColor">*<?php echo $mobileError ?></span>
            </div>
            <div class="form-group">
                
                <label>Password</label>
                <input type="password" class="form-control" placeholder ="Enter your Password" name="password">
                <span class ="errorColor">*<?php echo $mobileError ?></span>
            </div>
            
            <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
        </form>
    </div>
  </body>
</html>