<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Project Webpage</title>


<?php wp_head() ?>

</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <?php  $logo = get_header_image() ;
        
        ?>
      <a class="navbar-brand" href="#"><img src="<?php echo $logo;?>"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul id="menu-top" class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item">
            <?php wp_nav_menu(array('theme_location'=>'primary-menu','class'=>'nav',))?> 
          </li>  
        </ul>
        <div class="rightnav">
            <ul >
                <li>
                    <a href="#">Log In</a>
                </li>
                <li>
                    <a href="#" class="btn">Start For Free</a>
                </li>
            </ul>
        </div>
      </div>
    </div>
  </nav>