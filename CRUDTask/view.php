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
  <title>view</title>
  <style>
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
      padding: 12px 18px;
    }

    .add {
      padding-left: 500px;
    }
  </style>

</head>

<body>
  <?php $id = isset($_GET['viewid']) ? $_GET['viewid'] : null;
  ?>

  <div class="container col-6">
    <div class="add">
      <a class="btn btn-primary my-5" href="post.php?postid=<?= $id ?>" class="text-light">Add Post</a>
    </div>
    <?php
    $sql = "SELECT *,fname FROM post_data INNER JOIN user_add ON user_add.id = post_data.user_id  WHERE user_add.id = $id";

    $result = mysqli_query($con, $sql);


    if ($result->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($result)) {

        $postid = $row['post_id'];
        $username = $row['fname'];
        $post = $row['f_post'];
        $caption = $row['caption'];
        $hashtag = $row['hashtag'];
        echo '
              
              <div class="card" style="width:40rem;">
              <img src="' . $post . '"class="card-img-top"  style:"width:100%"/>
              <div class="card-body">
              <h2 class="card-title"><b>' . $username . '</b></h2>
              <h5 class="card-text">' . $hashtag . '</h5>
              <p class="card-text">' . $caption . '</p>
              
              <a href="editpost.php?editpost=' . $postid . '&viewid=' . $id . '"class="btn btn-primary card-link"">Edit</a>
               
              <a href="deletepost.php?delpost=' . $postid . '&viewid=' . $id . '"class="btn btn-danger card-link">Delect</a>
              
              
              
              </div>
              </div><br><br>
              
              
              ';
      }
    } else {
      echo '<tr >
                <h2 >Post is Not Added</h2>
                </tr>';
    }

    ?>

  </div>
</body>

</html>