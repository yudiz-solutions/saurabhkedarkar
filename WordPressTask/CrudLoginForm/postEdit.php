<?php
include "connection.php";

$id=$_GET['editid'];
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];
    $password = $_POST['password'];
    $profile = $_FILES['profile']['name'];
    $temp_Profile = $_FILES['profile']['tmp_name'];
    $file ="./image/".$profile;
    
    if(!empty($temp_Profile)){
        move_uploaded_file($profile,$file);
    }else{
    //    $file="./image/".$profile;
    $file=isset($_POST['hidden_file'])?$_POST['hidden_file']:'';
    }

    $massage =$_POST['massage'];

    $sql="UPDATE `post_table` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `file` = '$file', `massage` = '$massage' WHERE `post_table`.`id` = $id";
    $result = mysqli_query($con,$sql);
    
    if($result){
        header("location: postView.php");
        
    }
}

    $sql2 = "SELECT *,meta_post.value,meta_post.key FROM `post_table` INNER JOIN `meta_post` ON post_table.id = meta_post.Post_id WHERE post_table.id = $id";

    $result2=mysqli_query($con,$sql2);
    $row=mysqli_fetch_array($result2);
    $fName=isset($row['fname'])?$row['fname']:'';
   
    $lName=$row['lname'];
    $Email=$row['email'];
    $File=$row['file'];
    $Massage=$row['massage'];
    $Password=isset($row['password'])?$row['password']:'';
    $Profile=$row['file'];
    $Caption=isset($row['caption'])?$row['caption']:'';

?>
<?php include "header.php"?>


    <div class="container my-5">
        <h2 style="text-align:center;">Post Register Form</h2>
        <form  method="post" style="border: solid;
    margin: 5px; padding-top: 10px;" enctype="multipart/form-data">
           
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">First Name</label>
                <div class="col-md-3">
                    <span class="error">*<?php echo $error['fname']??''; ?></span>
                    <input type="text" id="fname" class="form-control fname" name="fname" value="<?php echo $fName;?>">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Last Name</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['lname']??''; ?></span>
                    <input type="text" id="lname" class="form-control lname" name="lname" value="<?php echo $lName;?>" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right" >Email</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['email']??''; ?></span>
                    <input type="text" id="email" class="form-control email" name="email" value="<?php echo $Email;?>">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Massage</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['massage']??''; ?></span>
                    <input type="text" id="massage" class="form-control massage" name="massage" value="<?php echo $Massage;?>">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Profile</label>
                <div class="col-md-3">
                    <input type="file" class="form-control" id="profile" name="profile" value="">
                    <input type="hidden" name="hidden_file"
                    value="<?php echo $Profile ?>">
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Password</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['password']??''; ?></span>
                    <input type="password" id="password" class="form-control" name="password" value="<?php echo $Password ?>" >
                </div>
            </div><br>
            <div class="form-group row">
                <label class="col-md-2 col-form-label text-md-right">Caption</label>
                <div class="col-md-3">
                <span class="error">*<?php echo $error['caption']??''; ?></span>
                    <input type="text" id="caption" class="form-control" name="caption" value="<?php echo $Caption?>">
                </div>
            </div><br>
            <div class="text-center" style="padding-bottom: 10px;">
                <button type="submit" id="submit" class="btn btn-outline-success" name="submit"
                    value="submit">Update</button>
            </div>
        </form>

    </div>


<?php include "footer.php"?>

