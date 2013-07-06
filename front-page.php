<?php get_header(); ?>

<!-- Main hero unit for a primary marketing message or call to action -->

<div class="hero-unit">
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item"><a href="test.com"><img src="<?php bloginfo('template_directory'); ?>/img/panel-wordpress.jpg" alt="Wordpress Develeopement" /></a>
                <div class="carousel-caption"><div class="slider_button"><a class="btn btn-primary btn-large">Learn more &raquo;</a></div>
                    <h4>Wordpress Developement</h4>
                    <p>At LAB Web Designs we specilaize in all things Wordpress. From Plugin and Theme Developement to web site recovery, we can help.</p>
                </div>
            </div>
            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/panel-hosting.jpg" alt="" />
                <div class="carousel-caption">
                    <h4>Dependable &amp; Affordable Web Site Hosting</h4>
                    <p>Ensure that your web site is up and running 24/7. With our 99.8% uptime rate you can be sure that your customers can always get to your web site.</p>
                </div>
            </div>
<!--            <div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/bootstrap-mdo-sfmoma-03.jpg" alt="" />
                <div class="carousel-caption">
                    <h4>Third Thumbnail label</h4>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
            </div>-->
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>

<!-- Example row of columns -->
<div class="row">
    <div class="span4">
        <h2>Hosting</h2>
        <h4>Reliable web site hosting that is super fast!</h4>
        <img src="http://127.0.0.1/plugin/wp-content/uploads/2013/07/hosting-front-page.jpg" alt="Web site hosting" class="fp_hosting" >
        <p><a class="btn btn-primary btn-med" href="https://www.labwebdesigns.com/web-hosting.html">Get Started &raquo;</a></p>
        <br />
        <br />
        <a href="https://www.labwebdesigns.com/blog/what-is-web-hosting.html">What is Web Site Hosting?</a>
    </div>
    <div class="span4">
        <h2>Whats New</h2>
        <?php
        $postslist = get_posts('category=0&numberposts=3&order=DESC&orderby=post_date');
        foreach ($postslist as $post) :
            setup_postdata($post);
            ?>
            <div class="post_item">
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> - <span class='side_date'><?php the_time('F j, Y'); ?></span><br />
                <p class="labExcerptClass">
                    <?php
                    $labexcerpt = get_the_excerpt();
                    $labexcerpt = '"' . $labexcerpt . '"';
                    $labexcerpt = apply_filters('get_the_excerpt', $labexcerpt);
                    $labexcerpt = str_replace(']]>', ']]>', $labexcerpt);
                    echo $labexcerpt;
                    ?></p>
                
       </div>
            <?php endforeach; ?>
 
        <p><a class="btn btn-primary btn-med" href="http://www.labwebdesigns.com/lab-web-design-wordpress-blog.html">See More &raquo;</a></p>
        <br />
        <br />
    </div>
    <div class="span4">
        <h2>Web Developement</h2>
        <p>Are you in need of a shopping cart? Was your web site hacked? Or are you in need of friendly, straight forward and competent <img src="http://127.0.0.1/plugin/wp-content/uploads/2013/07/php-image.jpg" class="php_image"> web developer to help make your web site come alive or back to life? Experienced in PHP,  WordPress ,  MVC Architecture, , MYSQL, jQuery, AJAX, HTML5, CSS, CSS3 & responsive design, we can help you take your web site’s functionality to the next level.</p>
        <p><a class="btn btn-primary btn-med" href="https://www.labwebdesigns.com/web-developement.html">Learn More &raquo;</a></p>
    </div>
</div>

<?php get_footer(); ?>