
<?php
// Template Name:Home
get_header();

// -----------------------section 1
$afternav_section = get_field('afternav-section');

$src = $afternav_section['src'];
$scr1 = $afternav_section['src1'];
// -----------------------section 2 
$section2 = get_field('section2');
// -----------------------section 3
$section3 = get_field('section3');

$section3_repeater = $section3['brain-img'];
// -----------------------section 4
$section4 = get_field('section4');
// -----------------------section 5
$section5 = get_field('section5');
// -----------------------section 6
$section6 = get_field('section6');

// echo "<pre>";
// print_r($section6 );
// echo "</pre>";





// echo'<pre>';
// print_r($section5);
// echo'</pre>';
?>
<!-- Navbar ends -->
<!-- After nav section -->

 <!-- -----------------------section 1 -->
<section class="afternav-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>
                    <?php echo $afternav_section['text-center']; ?>
                </h1>
                <p>
                    <?php echo $afternav_section['text-center-p']; ?>
                </p>
                <a href="#" class="btn">
                    <?php echo $afternav_section['text-center-btn']['title']; ?>
                </a>
            </div>
        </div>
        <div class="watch-demo text-center">
            <figure>
                <img src="<?php echo $afternav_section['watch-demo']['url']; ?>" alt="watch demo">
            </figure>
            <a href="<?php echo $src;?>" data-src="<?php echo $scr1; ?>"
                data-fancybox>
                <img src="<?php echo $afternav_section['watch-demo-icon']['url']; ?>" alt="icon">
                <?php echo $afternav_section['watch-video-text']; ?>
            </a>
        </div>
    </div>
</section>
<!-- After nav section ends-->
<!-- content-box section -->

 <!-- -----------------------section 2 -->
<section class="content-box">
    <div class="container">
        <div class="innercontainer">
            <div class="row">
                <?php $innercontainer = $section2['innercontainer'];
                // echo'<pre>';
                // print_r($innercontainer);
                // echo'</pre>';
                foreach ($innercontainer as $innetRepeater) {
                    // echo'<pre>';
                    // print_r($innetRepeater);
                    // echo'</pre>';
                    $img = $innetRepeater['figure']['url'];
                    $h3 = $innetRepeater['content-h3'];
                    $p = $innetRepeater['content-p'];

                    ?>
                    <div class="col-md-6 col-sm-12 col-lg-3">
                        <div class="content-1">
                            <figure>
                                <img src="<?php echo $img; ?>" alt="image">
                            </figure>
                            <h3>
                                <?php echo $h3; ?>
                            </h3>
                            <p>
                                <?php echo $p; ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>

                <!-- Cols ends -->
            </div>
        </div>
    </div>
</section>
<!-- content-box section ends-->
<!-- brainstorm section-->

 <!-- -----------------------section 3 -->
<section class="brainstorm">
    <div class="brainstorm-wrapper">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6 brain-img">
                <figure>
                    <img src="<?php echo $section3['brainstorm-img']['url']; ?>" alt="brainstorm-img">
                </figure>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6 brain-text">
                <div class="brainright">
                    <h4>
                        <?php echo $section3['brainstorm-h4']; ?>
                    </h4>
                    <h2>
                        <?php echo $section3['brainstorm-h2']; ?>
                    </h2>
                    <p>
                        <?php echo $section3['brainstorm-p']; ?>
                    </p>
                    <a href="<?php echo $section3['brainright-btn']['url']; ?>" class="btn"><?php echo $section3['brainright-btn']['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row bottompart">
        <div class="col-md-12">
            <div class="row">
                <?php
                $count = 0;
                foreach ($section3_repeater as $cur_repeater) {
                    $img = $cur_repeater['url'];
                    // echo '<pre>';
                    // print_r($img);
                    // echo '</pre>';
                    if ($count % 2 == 0) {
                        ?>
                        <div class="col-md-4 col-sm-12 col-12">
                            <img src="<?php echo $img; ?>" alt="brainstorm-img">
                        </div>

                        <?php
                    } else {
                        ?>
                        <div class="col-md-2 col-sm-12 col-12">
                            <img src="<?php echo $img?>"
                                alt="brainstorm-img">
                        </div>
                        <?php
                    }
                    $count++;
                }
                ?>




            </div>
        </div>
    </div>
</section>
<!-- brainstorm section ends-->
<!-- find similar section starts-->

 <!-- -----------------------section 4 -->
<section class="find-similar">
    <div class="container">
        <div class="find-top text-center common-padding">
            <h2><?php echo $section4['find-similarh2']; ?></h2>
            <p><?php echo $section4['find-similar-p']; ?></p>
        </div>
        <div class="find-similar-parent single-item">

           <?php  
           $args=array(
            'post_type' => array('storage'),


           );

           
           $storage = new WP_Query($args);
        //    echo"<pre>";
        //    print_r($storage);
        //    echo"</pre>";
           if($storage->have_posts()):
            while($storage->have_posts()):
                $storage->the_post();
                
           ?>
            <div class="inner-find-similar ">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                        <figure>
                            <!-- <img src="<?php //echo get_template_directory_uri() ?>./images/slider-1.svg"
                                alt="slider-image"> -->
                                <?php the_post_thumbnail() ?>
                        </figure>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex">
                        <div class="text-content">
                            <?php $news_cate = get_the_terms(get_the_ID(),'news-category');
                            foreach($news_cate as $new){
                                
                               echo "<h4>".$new->name."</h4>";
                                
                            } ?>
                            <p>
                              <?php the_content(); ?>
                           </p>
                            <a href="<?php  the_permalink(); ?>">Read Full Story</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
            endif;
             ?>

            <!-- <div class="inner-find-similar">
                <div class="row">
                    
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex">
                        <div class="text-content">
                            <h4>Artist & Investor</h4>
                            <p>
                                Enim sagittis, sit porttitor morbi lobortis amet, libero adipiscing auctor. Malesuada
                                tristique libero, id netus tincidunt. Egestas ac arcu amet nisl quis est ...
                            </p>
                            <a href="#">Read Full Story</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inner-find-similar">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                        <figure>
                            <img src="<?php //echo get_template_directory_uri() ?>./images/slider-1.svg"
                                alt="slider-image">
                        </figure>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex">
                        <div class="text-content">
                            <h4>Artist & Investor</h4>
                            <p>
                                Enim sagittis, sit porttitor morbi lobortis amet, libero adipiscing auctor. Malesuada
                                tristique libero, id netus tincidunt. Egestas ac arcu amet nisl quis est ...
                            </p>
                            <a href="#">Read Full Story</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inner-find-similar">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                        <figure>
                            <img src="<?php //echo get_template_directory_uri() ?>./images/slider-1.svg"
                                alt="slider-image">
                        </figure>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex">
                        <div class="text-content">
                            <h4>Artist & Investor</h4>
                            <p>
                                Enim sagittis, sit porttitor morbi lobortis amet, libero adipiscing auctor. Malesuada
                                tristique libero, id netus tincidunt. Egestas ac arcu amet nisl quis est ...
                            </p>
                            <a href="#">Read Full Story</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inner-find-similar"> -->
                <!-- <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                        <figure>
                            <img src="<?php //echo get_template_directory_uri() ?>./images/slider-1.svg"
                                alt="slider-image">
                        </figure>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex">
                        <div class="text-content">
                            <h4>Artist & Investor</h4>
                            <p>
                                Enim sagittis, sit porttitor morbi lobortis amet, libero adipiscing auctor. Malesuada
                                tristique libero, id netus tincidunt. Egestas ac arcu amet nisl quis est ...
                            </p>
                            <a href="#">Read Full Story</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- find similar section ends-->
<!-- get your business section -->

 <!-- -----------------------section 5 -->
<section class="growfast">
    <div class="container">
        <div class="grow-wrapper">
            <div class="grow-top text-center common-padding">
                <h2><?php echo $section5['growfast-h2']?></h2>
                <p><?php echo $section5['growfast-p']?></p>
                <a href="#" class="btn"><?php echo $section5['growfast-btn']['title']?></a>
            </div>
            <div class="row right-grow-side">
                <div class="col-md-12 col-lg-12 col-12 col-xl-6 only-for-position">
                    <img src="<?php echo $section5['img1']['url'] ?>" alt="desktop">
                    <img src="<?php echo $section5['img2']['url'] ?> " alt="image">
                    <img src="<?php echo $section5['img3']['url'] ?>"
                        alt="mobile-image" class="onlyfor-smallscreen">
                    <img src="<?php echo $section5['img4']['url'] ?>" alt="image">
                </div>
                <div class="col-md-12 col-lg-12 col-12 col-xl-6 align-self-center">
                    <h4><?php echo $section5['growfast-h4'] ?></h4>
                    <h2><?php echo $section5['growfast-text-h2'] ?></h2>
                    <p><?php echo $section5['growfast-text-p'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- get your business section ends-->
<!-- <section class="multi-images">
        <div class="container">
            <div class="inner-multi-images">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-12 col-xl-12 no-limits-parent">
                        <div class="row">
                            <div class="col-lg-12 multi-img-text-content">
                                <h4>NO LIMITS</h4>
                                <h2>Unlimited ideas for your projects</h2>
                                <p>Scelerisque auctor dolor diam tortor, fames faucibus non interdum nunc. Ultrices nibh sapien elit gravida ac, rutrum molestie adipiscing lacinia.</p>
                                <a href="#" class="btn">Start For First</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <img src="./images/multiple-images.svg" alt="multiple images" class="hidden">
    </section> -->
<!-- Above code is main -->

<!-- Demo code here starts -->
<!-- <section class="multi-images-2">
        <div class="container">
            <div class="inner-multi-images-2">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-6 multiimgs-left-content">
                        
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-9">
                                <div class="multi-img-text-content-2">
                                    <h4>NO LIMITS</h4>
                                    <h2>Unlimited ideas for your projects</h2>
                                    <p>Scelerisque auctor dolor diam tortor, fames faucibus non interdum nunc. Ultrices nibh sapien elit gravida ac, rutrum molestie adipiscing lacinia.</p>
                                    <a href="#" class="btn">Start For Free</a>
                                </div>
                            </div>
                            <div class="col-3 col-md-3 col-lg-3">
                                <div><img src="<?php //echo get_template_directory_uri()?>./images/picture-1.svg" alt="image"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div><img src="<?php //echo get_template_directory_uri()?>./images/picture-3.svg" alt=""></div>
                            </div>
                            <div class="col-9">
                                <div><img src="<?php //echo get_template_directory_uri()?>./images/picture-2.svg" alt="image"></div>

                            </div>
                        </div>
                    
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6 multiimgs-right-content">
                        <div class="row">
                            <div class="col-3">
                                <div>
                                    <img src="<?php //echo get_template_directory_uri()?>./images/right-side-img-1.svg" alt="image">
                                </div>
                            </div>
                            <div class="col-9">
                                <div>
                                    <img src="<?php //echo get_template_directory_uri()?>./images/right-side-img-2.svg" alt="image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div>
                                    <img src="<?php //echo get_template_directory_uri()?>./images/right-side-img-3.svg" alt="image">
                                </div>
                            </div>
                            <div class="col-3">
                                <div>
                                    <img src="<?php //echo get_template_directory_uri()?>./images/right-side-img-4.svg" alt="image">
                                </div>
                            </div>
                            <div class="col-9">
                                <div>
                                    <img src="<?php //echo get_template_directory_uri()?>./images/right-side-img-5.svg" alt="image">
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<!-- Demo code here ends -->
<!-- Get your business ends -->

 <!-- -----------------------section 6 -->

<section class="brainstorm-now common-padding">
    <div class="container">
        <div class="row">
            <div class="co-md-12 text-center">
                <h4><?php echo $section6['brainstorm-now-h4']; ?></h4>
                <h2><?php echo $section6['brainstorm-now-h2']; ?></h2>
                <p><?php echo $section6['brainstorm-now-p']; ?></p>
                <a href="#" class="btn"><?php echo $section6['brainstorm-now-btn']['title']; ?></a>

            </div>
        </div>

    </div>
</section>
<!-- Footer starts -->
<?php get_footer(); ?>