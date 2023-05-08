<?php 
 include 'connection.php';
 $v_id = $_GET['viewid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>User</title>
</head>
<body>
  <?php $id = isset($_GET['viewid']) ? $_GET['viewid'] : null;
  ?>
     <div class="container">
         <a class="btn btn-primary my-5" href="post.php?postid=<?= $id?>"  class="text-light">Add Post</a>


          <table class="table">
      <thead >
            <tr class="alert alert-info">
              <th scope="col">Sl no</th>
              <th scope="col">User Name</th>
              <th scope="col">Post</th>
              <th scope="col">Caption</th>
              <th scope="col">Hashtag</th>
              <th scope="col">Action</th>

       </thead>
       <tbody>
         <?php 
          $sql="SELECT *,fname FROM post_data INNER JOIN ueser_add ON ueser_add.id = post_data.ueser_id  WHERE ueser_add.id = $id";


         
        $result=mysqli_query($con,$sql);
        $count =0;
         
         if($result->num_rows>0){
            while($row=mysqli_fetch_assoc($result)){
                $count++;
                $postid=$row['post_id'];
                $username=$row['fname'];
                $post=$row['f_post'];
                $caption=$row['caption'];
                $hashtag=$row['hashtag'];
                echo '<tr >
                <th >'.$count.'</th>
                <td>'.$username.'</td>
                <td><img src="'.$post.'"width=100 height=120></td>
                <td>'.$caption.'</td>
                <td>'.$hashtag.'</td>
                <td>
                
                
                <a href="editpost.php?editpost='.$postid.'&viewid='.$id.'"class="btn btn-primary">Edit</a>
                
                <a href="deletepost.php?delpost='.$postid.'&viewid='.$id.'"class="btn btn-danger">Delect</a>

                
                </td>
                <tr>';
              }
            }else{
              echo '<tr >
                <h2 >Post is Not Added</h2>
               </tr>';
            }
            
         ?>
       </tbody>
     </div>
</body>
</html>
