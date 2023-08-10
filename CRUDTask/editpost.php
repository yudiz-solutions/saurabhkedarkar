<?php
include 'connection.php';
$postid=$_GET['editpost'];
$id=$_GET['viewid'];

$sql="SELECT * FROM `post_data` WHERE post_id=$postid";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$fpost=$row['f_post'];

$caption=$row['caption'];


$hashtag=$row['hashtag'];

if(isset($_POST['submit'])){
    $fpost=$_FILES['f_post']["name"];
    $temp =$_FILES["f_post"]["tmp_name"];
    $folder ="./image/" .$fpost;
    $caption=$_POST['caption'];
    $hashtag=$_POST['hashtag'];
    
    
    if(move_uploaded_file($temp, $folder)){
      
        $sql="UPDATE `post_data` SET `f_post` = '$folder', `caption` = '$caption', `hashtag` = '$hashtag' WHERE `post_data`.`post_id` = $postid";

        $result=mysqli_query($con,$sql);
      
      if($result){
        header('location:view.php?viewid='.$id);
        
    }else{
       echo "Error:".mysqli_error($con);
    }
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Post Data</title>
</head>
<body>
<div  class="container my-5">
        
        <form method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label  class="col-md-2 col-form-label text-md-right">Post</label>
              <div class="custom-file col-md-3">
                <input type="file" class="form-control" name="f_post" ><?php echo $fpost?></span>
            
              </div>
            </div><br>
        <div class="form-group row">
              <label  class="col-md-2 col-form-label text-md-right">Caption</label>
              <div class="col-md-3">
                <textarea name ="caption" rows ="4" cols="50" ><?php echo $caption; ?></textarea>
                </div>
        </div></br>
        <div class="form-group row">
              <label  class="col-md-2 col-form-label text-md-right">Hashtag</label>
              <div class="col-md-3">
                <textarea name ="hashtag" rows ="4" cols="50"><?php echo $hashtag; ?></textarea>
                </div>
        </div></br>

        <div class="text-center">
                <button type="submit" class="btn btn-outline-success" name ="submit">Update</button>
        </div>
    </form>
</div>

    
</body>
</html>
