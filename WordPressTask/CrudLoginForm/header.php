<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
 <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
  <link rel="stylesheet" href="main.css"/>
   <style>
    .error{
        color: red;
    }
    </style>

</head>

<body>
  <div class="main">
    <div class="navbar-side">
      <h6>
        <span class="icon"><i class="fas fa-code"></i></span>
        <span class="link-text">Admin Panel</span>
      </h6>
      <ul>
        <li><a href="dashboard.php" class="link-active" title="Dashboard">
            <span class="icon"><i class="fas fa-chart-bar"></i></span>
            <span class="link-text">Dashboard</span>
          </a></li>
        <li>
          <a href="#" class="myBtn" data-toggle="collapse" data-target="#my-sub" title="Post" aria-expanded="false">
            <span class="icon"><i class="fas fa-list"></i></span>
            <span class="link-text">Post</span>
            <span class="ml-auto myCaret"></span>
          </a>
          <div id="my-sub" class="collapse bg-secondary">
            <a href="postView.php" title="View Post">
              <span class="icon"><i class="fas fa-copy"></i></span>
              <span class="link-text">View Post</span>
            </a>
            <a href="postAdd.php" title="Add Post">
              <span class="icon"><i class="fas fa-pen-fancy"></i></span>
              <span class="link-text">Add Post</span>
            </a>
          </div>
        </li>
        <li><a href="UserViewForm.php" title="Profile">
            <span class="icon"><i class="fas fa-user-circle"></i></span>
            <span class="link-text">User View</span>
          </a></li>
        
        <li><a href="logout.php" title="Sign Out">
            <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
            <span class="link-text">Sign Out</span>
          </a></li>
      </ul>
    </div>
    <div class="content">
      <nav class="navbar navbar-dark bg-dark py-1">

        <a href="#" id="navBtn">
          <span id="changeIcon" class="fa fa-bars text-light"></span>
        </a>

        <div class="d-flex">
          <a class="nav-link text-light px-2" href="#"><i class="fas fa-search"></i></a>
          <a class="nav-link text-light px-2" href="#"><i class="fas fa-bell"></i></a>
          <a class="nav-link text-light px-2" href="#"><i class="fas fa-sign-out-alt"></i></a>
        </div>

      </nav>