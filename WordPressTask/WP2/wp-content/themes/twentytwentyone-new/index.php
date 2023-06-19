<?php 
get_header();

$imageNew = get_field('banner_image', get_the_ID());

$banner_heading = get_field('banner_heading');
$banner_content = get_field('banner_content');
$get_started = get_field('get_started');

$work_text_1 = get_field('work_text_1');
$work_text_1_button = get_field('work_text_1_button');
$work_text_2 = get_field('work_text_2');
$work_text_2_button = get_field('work_text_2_button');

// echo "<pre>";
// var_dump($get_started);
// echo "</pre>";


?>

<?php
if ($banner_heading || $banner_content || $get_started) { ?>
    <!-- banner start -->
    <section class="banner">
        <?php
        if (isset($imageNew)) { ?>
            <div class="banner-image">
                <img src="<?php echo $imageNew["url"]; ?>" alt="">
            </div>
        <?php }
        ?>
        <!-- container start -->
        <div class="container">
            <div class="banner-intro">
                <?php
                if (isset($banner_heading)) {
                ?>
                    <h1><?php echo $banner_heading; ?></h1>
                <?php
                }
                ?>
                <?php
                if (isset($banner_content)) {
                ?>
                    <p><?php echo $banner_content; ?></p>
                <?php
                }
                ?>
                <?php
                if (!empty($get_started)) {
                ?>
                    <a href="<?php echo $get_started["url"] ?>" class="btn" target="<?php echo $get_started["target"] ?>">
                        <span class="btn-text"><?php echo $get_started["title"]; ?></span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- container close -->
    </section>
<?php } ?>

<!-- section work start -->
<section class="work">
    <!-- conatiner start -->
    <div class="container">
        <!-- outer div -->
        <ul>
            <li>
                <div class="work-content">
                    <?php
                    echo $work_text_1;
                    ?>
                </div>

                <?php
                if (!empty($work_text_1_button)) {
                ?>
                    <a href="<?php echo $work_text_1_button["url"] ?>" class="btn" target="<?php echo $work_text_1_button["target"] ?>">
                        <span class="btn-text"><?php echo $work_text_1_button["title"]; ?></span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                <?php
                }
                ?>
            </li>
            <li>
                <div class="work-content">
                    <?php
                    echo $work_text_2;
                    ?>
                </div>
                <?php
                if (!empty($work_text_2_button)) {
                ?>
                    <a href="<?php echo $work_text_2_button["url"] ?>" class="btn" target="<?php echo $work_text_2_button["target"] ?>">
                        <span class="btn-text"><?php echo $work_text_2_button["title"]; ?></span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                <?php
                }
                ?>
            </li>
            
            
        </ul>
    </div>
    <!-- container close -->
</section>
<!-- section work close -->

<!-- section about us start -->
<section class="about">
    <!-- container start -->
    <div class="container">
        <!-- inner-about start-->
        <div class="inner-about">
            <!-- content -->
            <div class="about-content">
                <h2>We Create The Art Of Stylish Living Stylishly</h2>
                <p>It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using that it has a more-or-less normal.</p>
                <a href="tel:012345678" class="call-click">
                    <div class="about-call">
                        <div class="call-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="call-content">
                            <div class="call-number">012345678</div>
                            <div class="call-us">Call Us Anytime</div>
                        </div>
                    </div>
                </a>
                <a href="#" class="btn">
                    <span class="btn-text">Get Free Estimate</span>
                    <i class="fas fa-arrow-right"></i>
                </a>

            </div>
            <!-- image -->
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri() ?>/images/about-us-kitchen.jpg">
            </div>
        </div>
        <!-- inner-about close -->
    </div>
    <!-- container close -->
</section>
<!-- section about us close -->

<!-- section feedback start -->
<section class="feedback">
    <!-- container start -->
    <div class="container">
        <div class="main-feedback">
            <h2>What the People Thinks About Us</h2>
            <ul>
                <li>
                    <div class="person">
                        <div class="person-image">
                            <img src="<?php echo get_template_directory_uri() ?>/images/person-1.jpg">
                        </div>
                        <div class="person-detail">
                            <h3>Nattasha Mith</h3>
                            <p>Sydney, USA</p>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                </li>
                <li>
                    <div class="person">
                        <div class="person-image">
                            <img src="<?php echo get_template_directory_uri() ?>/images/person-2.jpg">
                        </div>
                        <div class="person-detail">
                            <h3>Raymond Galario</h3>
                            <p>Sydney, Australia</p>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been scrambled it to make a type book.</p>
                </li>
                <li>
                    <div class="person">
                        <div class="person-image">
                            <img src="<?php echo get_template_directory_uri() ?>/images/person-3.jpg">
                        </div>
                        <div class="person-detail">
                            <h3>Benny Roll</h3>
                            <p>Sydney, New York</p>
                        </div>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been scrambled.</p>
                </li>
            </ul>
        </div>
    </div>
    <!-- container close -->
</section>
<!-- section feedback close -->

<!-- section client logo start -->
<section class="client-logo">
    <!-- container start -->
    <div class="container">
        <!-- main div start -->
        <div class="outer-client-logo">
            <!-- first logo -->
            <div class="inner-logo">
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/images/client-logo-1.png">
                </a>
            </div>
            <!-- second logo -->
            <div class="inner-logo">
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/images/client-logo-2.png">
                </a>
            </div>
            <!-- third logo -->
            <div class="inner-logo">
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/images/client-logo-3.png">
                </a>
            </div>
            <!-- forth logo -->
            <div class="inner-logo">
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/images/client-logo-4.png">
                </a>
            </div>
            <!-- fifth logo -->
            <div class="inner-logo">
                <a href="#" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/images/client-logo-5.png">
                </a>
            </div>
        </div>
        <!-- main div close -->
    </div>
    <!-- container close -->
</section>
<!-- section client logo close -->

<!-- section projects start -->
<section class="project">
    <!-- conatainer start -->
    <div class="container">
        <!-- main project card start -->
        <div class="main-project">
            <div class="project-content">
                <h2>Follow Our Projects</h2>
                <p>It is a long established fact that a reader will be distracted by the of readable content of page lookings at its layouts points.</p>
            </div>
            <ul>
                <li>
                    <div class="inner-project-image inner-project-image-1">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/project-2.png"></a>
                    </div>
                    <div class="inner-project-content">
                        <div class="sub-content">
                            <h3>Modern Kitchan</h3>
                            <p>Decor / Artchitecture</p>
                        </div>
                        <div class="project-icon">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-project-image inner-project-image-2">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/project-1.png"></a>
                    </div>
                    <div class="inner-project-content">
                        <div class="sub-content">
                            <h3>Modern Kitchan</h3>
                            <p>Decor / Artchitecture</p>
                        </div>
                        <div class="project-icon">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-project-image inner-project-image-3">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/project-3.png"></a>
                    </div>
                    <div class="inner-project-content">
                        <div class="sub-content">
                            <h3>Modern Kitchan</h3>
                            <p>Decor / Artchitecture</p>
                        </div>
                        <div class="project-icon">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="inner-project-image inner-project-image-4">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/project-4.png"></a>
                    </div>
                    <div class="inner-project-content">
                        <div class="sub-content">
                            <h3>Modern Kitchan</h3>
                            <p>Decor / Artchitecture</p>
                        </div>
                        <div class="project-icon">
                            <a href="#"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- main project card clsoe -->
    </div>
    <!-- conatiner close -->
</section>
<!-- section projects close -->

<!-- section counter start -->
<section class="section-counter">
    <!-- container start -->
    <div class="container">
        <div id="counters_1">
            <div class="inner-counter">
                <div class="counter" data-TargetNum="12" data-Speed="2000">0</div>
                <p>Years Of Experiance</p>
            </div>
            <div class="inner-counter">
                <div class="counter" data-TargetNum="85" data-Speed="2000">0</div>
                <p>Success Project</p>
            </div>
            <div class="inner-counter">
                <div class="counter" data-TargetNum="15" data-Speed="2000">0</div>
                <p>Active Project</p>
            </div>
            <div class="inner-counter">
                <div class="counter" data-TargetNum="95" data-Speed="2000">0</div>
                <p>Happy CUstomers</p>
            </div>
        </div>
    </div>
    <!-- container close -->
</section>
<!-- section counter close -->

<!-- section blog start -->
<section class="blog">
    <!-- container start -->
    <div class="container">
        <!-- main blog div start -->
        <div class="main-blog">
            <div class="blog-content">
                <h2>Articles & News</h2>
                <p>It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using.</p>
            </div>
            <ul>
                <li>
                    <div class="inner-blog-image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/images/blog-1.png">
                        </a>
                        <div class="blog-tag">
                            Kitchan Design
                        </div>
                    </div>
                    <a href="#">
                        <h3>Let’s Get Solution For Building Construction Work</h3>
                    </a>
                    <div class="blog-date">
                        <div class="date">26 December,2022</div>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </li>
                <li>
                    <div class="inner-blog-image">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/blog-2.png"></a>
                        <div class="blog-tag">
                            Living Design
                        </div>
                    </div>
                    <a href="#">
                        <h3>Low Cost Latest Invented Interior Designing Ideas.</h3>
                    </a>
                    <div class="blog-date">
                        <div class="date">22 December,2022</div>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </li>
                <li>
                    <div class="inner-blog-image">
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/blog-3.png"></a>
                        <div class="blog-tag">
                            Interior Design
                        </div>
                    </div>
                    <a href="#">
                        <h3>Best For Any Office & Business Interior Solution</h3>
                    </a>
                    <div class="blog-date">
                        <div class="date">25 December,2022</div>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- main blog div close -->
    </div>
    <!-- container close -->
</section>
<!-- section blog close -->

<!-- section contact start -->
<section class="contact">
    <!-- container start -->
    <div class="container">
        <div class="outer-contact">
            <!-- inner div start -->
            <div class="inner-contact">
                <h2 class="white-text">Wanna join the interno?</h2>
                <p class="white-text">It is a long established fact will be distracted.</p>
                <a href="#" class="btn">
                    <span class="btn-text white-text">Contact With Us</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <!-- inner div close -->
        </div>
    </div>
    <!-- container close -->
</section>
<!-- section contact close -->

<?php get_footer() ?>