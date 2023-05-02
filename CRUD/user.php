<?php  
$name=$email=$mobile=$password="";
// $errorName=$errorEmail=$errorMobile=$errorPassword="";
$error = [];
// $my = [];
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];

    if (empty($name)) {
        $error['name'] = "Name is required";
        // $error=$errorName;
        $error['name'] = "Name is required";
    } else {
        
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $error['name'] = "Only letters and white space allowed";
            // $error['name']='jjj';
        }
    }
     
    $email=$_POST['email'];
    if (empty($email)) {
        $error['email'] = "email is required";
        // $error=$errorEmail;
    }
    // else{
    //     if(!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/",$email)){
    //         $errorEmail = "please enter proper email";
    //         $error=$errorEmail; 
    //     }
    // }
    
    $mobile=$_POST['mobile'];
    if (empty($mobile)) {
        $error['mobile'] = "mobile is required";
        // $error=$errorMobile;
     }
    else{
        if(!preg_match("/^(0|91)?[6-9][0-9]{9}$/",$mobile)){
            $error['mobile'] = "Invalid Mobile Number";
            // $error=$errorMobile; 
        }
    }

    $password=$_POST['password'];
    if (empty($password)) {
        $error['password'] = "password is required";
        // $error=$errorPassword;
    }

    if(empty($error)){
     $sql ="INSERT INTO `stud_crud` (`id`, `name`, `email`, `mobile`, `password`) VALUES (NULL, '$name', '$email', '$mobile', '$password')";

      $result=mysqli_query($con,$sql);
      if($result){
          //echo "Data inserted successfully";
          header('location:display.php');
      }else{
          die(mysqli_error($con));
      }
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
  <style>
    .errorColor{
        color:#FF0000;
    }
    .container{
        padding-left:400px;
        padding-top:70px;
    }
    button{background-color:red;}
    form{
        height: 500px;
        width: 500px;
        border: 1px solid #009999;
        background-color:#b3ffff;
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 30px;
        padding-bottom: 20px;
    }
  </style>
    
  </head>
  <body> 
    <div  class="container my-5">
        <form method="post">
            <p><span class="errorColor">* All Fields required</span></p>
            <div class="form-group">
                <label>Name</label>
                <span class ="errorColor">*<?php  echo $error['name'] ?? ''; ?></span>
                <input type="text" class="form-control" placeholder ="Enter your name" name="name" autocomplete="off">
            </div></br>
            <div class="form-group">
                <label>Email</label>
                <span class ="errorColor">*<?php echo $error['email'] ?? ''; ?></span>
                <input type="email" class="form-control" placeholder ="Enter your email" name="email">
            </div></br>
            <div class="form-group">
                <label>mobile</label>
                <span class ="errorColor">*<?php echo $error['mobile'] ?? ''; ?></span>
                <input type="text" class="form-control" placeholder ="Enter your mobile no." name="mobile">
            </div></br>
            <div class="form-group">
                
                <label>Password</label>
                <span class ="errorColor">*<?php echo $error['password'] ?? ''; ?></span>
                <input type="password" class="form-control" placeholder ="Enter your Password" name="password">
            
            </div></br></br>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-success" name ="submit">Submit</button>
            </div>
        </form>
    </div>
  </body>
</html>