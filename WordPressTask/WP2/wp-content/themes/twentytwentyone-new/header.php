<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>home page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- favicon link -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.ico">

  <?php wp_head() ?>
</head>

<body>
    <div class="parent">
        <div class="container main-line">
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <!-- header start -->
    <header class="header">
        <!-- container start -->
        <div class="container">
            <!-- inner header start -->
            <div class="inner-header">
                <!-- logo -->
                <div class="logo">
                    <?php echo the_custom_logo() ?>
                </div>
                <!-- menu -->
                <nav>
                    <?php 
                    
                    wp_nav_menu(  array(
                        'menu_id' => 'mytopnav',
                        'menu_class' => 'menu',
                        'theme_location'	=> "header_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                        
                    ) );
                    ?>
                    <?php get_search_form()  ?>
                    <a href="#" class="toggle-menu" onclick="myFunction(this)">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </a>
                </nav>
            </div>
            <!-- inner header close -->
        </div>
        <!-- container close -->
    </header>
    <!-- header close -->