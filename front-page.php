<?php get_header (); ?>

<div class="container">
    <div class="row-fluid">

            <!-------->
            <div class="span12 centered-pills">
                <ul class="nav nav-pills pagination-centered">
                    <!--<ul id="tabs" class="nav nav-pills" data-tabs="tabs">-->
                    <li class="active"><a href="#domains" data-toggle="tab">Domains Names</a></li>
                    <li><a href="#hosting" data-toggle="tab">Web Site Hosting</a></li>
                    <li><a href="#development" data-toggle="tab">Web Site Development</a></li>
                    <li><a href="#wordpress" data-toggle="tab">Wordpress</a></li>
                    <li><a href="#blog" data-toggle="tab">Tips & Tricks</a></li>
                </ul>
                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="domains">
                        <h1>Domain Names</h1>
                        <p>Domain Names</p>

                        <div class="span10 container pagination-centered">
                            <div class="row-fluid ">
                                <div class="span2"></div>
                                <div class="span6">
                                    <div class="domain_select pagination-centered">
                                        <form action="https://www.labwebdesigns.com/billing/order.php?step=2&amp;product=ID&amp;domain=1" method="get" name="search_domains" class="form-horizontal">
                                            <input type="hidden" name="domain" value="1" />
                                            <input type="hidden" name="step" value="2" />
                                            <input type="hidden" name="product" value="25" />
                                            <fieldset>

                                                <div class="control-group">

                                                    <div class="controls span12">
                                                        <h2>Start Your WordPress Web Site Today!</h2>
                                                        <input id="domain_name" name="domainName" placeholder="Domain Name" class="input-xlarge" type="text">
                                                        <select id="tld" name="tld" class="input-small">
                                                            <option>com</option>
                                                            <option>net</option>
                                                            <option>org</option>
                                                            <option>biz</option>
                                                            <option>info</option>
                                                            <option>me</option>
                                                            <option>us</option>
                                                            <option>mobi</option>
                                                        </select>
                                                        <input type="submit" id="singlebutton" name="domain_search" value="GO" class="btn btn-warning">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane" id="hosting">
                        <h1>Web Site Hosting</h1>
                        <p>Web Site </p>
                    </div>
                    <div class="tab-pane" id="development">
                        <h1>Web Site Development</h1>
                        <p>Web Site Development</p>
                    </div>
                    <div class="tab-pane" id="wordpress">
                        <h1>Wordpress</h1>
                        <p>Wordpress</p>
                    </div>
                    <div class="tab-pane" id="blog">
                        <h1>Tips &amp; Tricks</h1>
                        <p>Tips & Tricks</p>
                    </div>
                </div>
            </div>
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>Web Site Hosting</h2>
            <h4>Reliable, Affordable web hosting that is super fast!</h4>
            <p>Are you interested in starting your own WordPress web site? Look no further! We are currently offering
                a WordPress hosting package for an introductory rate of just <b>1.95 a month</b> for the first year, then
                just </b>4.95 a month</b> each year after. It's the perfect price for someone just starting thier first
                web site or for someone that just want's transfer and save a few dollars.</p>
            <p><a class="btn btn-primary btn-med" href="https://www.labwebdesigns.com/web-hosting.html">Get Started &raquo;</a></p>
            <br />
            <br />
            <a href="https://www.labwebdesigns.com/blog/what-is-web-hosting.html">What is Web Site Hosting?</a>
        </div>
        <div class="span4">
            <h2>Whats New</h2>
            <?php

            $postslist = get_posts ( 'category=0&numberposts=2&order=DESC&orderby=post_date' );
            foreach ( $postslist as $post ) :
                setup_postdata ( $post );

                ?>
                <div class="post_item">
                    <a href="<?php the_permalink () ?>" rel="bookmark"><?php the_title (); ?></a> - <span class='side_date'><?php the_time ( 'F j, Y' ); ?></span><br />
                    <p class="labExcerptClass">
                        <?php

                        $labexcerpt = get_the_excerpt ();
                        $labexcerpt = '"' . $labexcerpt . '"';
                        $labexcerpt = apply_filters ( 'get_the_excerpt', $labexcerpt );
                        $labexcerpt = str_replace ( ']]>', ']]>', $labexcerpt );
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
            <p>Are you in need of a shopping cart? Was your web site hacked? Or are you in need of friendly, straight forward and competent <img src="./wp-content/uploads/2013/07/php-image-brn.jpg" class="img-polaroid lab_img_right"> web developer to help make your web site come alive or back to life? Experienced in PHP,  WordPress ,  MVC Architecture, , MYSQL, jQuery, AJAX, HTML5, CSS, CSS3 & responsive design, we can help you take your web site’s functionality to the next level.</p>
            <p><a class="btn btn-primary btn-med" href="https://www.labwebdesigns.com/web-developement.html">Learn More &raquo;</a></p>
        </div>
    </div>

    <?php get_footer (); ?>

</div>