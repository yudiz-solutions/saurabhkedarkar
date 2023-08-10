<?php 
 include "connection.php";

 $id=$_GET['postid'];
//  echo $id; exit;
 if(isset($_POST['submit'])){
    
    $fpost = $_FILES["f_post"]["name"];
    $temp =$_FILES["f_post"]["tmp_name"];
    $folder ="./image/" .$fpost;

    $caption = $_POST['caption'];
    $hashtag = $_POST['hashtag'];
    
    if(move_uploaded_file($temp, $folder)){
    $sql = "INSERT INTO `post_data` (`user_id`,`f_post`, `caption`, `hashtag`) VALUES ('$id','$folder', '$caption', '$hashtag')";

    // var_dump("INSERT INTO `post_data` (`post_id`,`ueser_id`,`f_post`, `caption`, `hashtag`) VALUES ( NULL,'$id','$folder', '$caption', '$hashtag')");


    $result =mysqli_query($con,$sql);
      if($result){
        header('location:view.php?viewid='.$id);
        // echo "hello";
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
                <input type="file" class="form-control" name="f_post" value="">
            
              </div>
            </div><br>
        <div class="form-group row">
              <label  class="col-md-2 col-form-label text-md-right">Caption</label>
              <div class="col-md-3">
                <textarea name ="caption" rows ="4" cols="50"></textarea>
                </div>
        </div></br>
        <div class="form-group row">
              <label  class="col-md-2 col-form-label text-md-right">Hashtag</label>
              <div class="col-md-3">
                <textarea name ="hashtag" rows ="4" cols="50"></textarea>
                </div>
        </div></br>

        <div class="text-center">
                <button type="submit" class="btn btn-outline-success" name ="submit">Submit</button>
        </div>
    </form>
</div>

    
</body>
</html>