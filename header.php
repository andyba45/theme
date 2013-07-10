<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo ( 'site_name' ) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->

        <link href="<?php bloginfo ( 'stylesheet_url' ); ?>" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
        <?php wp_enqueue_script ( "jquery" ); ?>
        <?php wp_head (); ?>

        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-9931717-3']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>         
                    <a class="brand" href="<?php echo site_url (); ?>"><img src="<?php bloginfo ( 'template_directory' ); ?>/img/logo2.jpg" alt="LAB Web Logo" class="logo"  /><?php bloginfo ( 'name' ); ?></a>
                    <div class="navbar-search pull-right"><span style="color: #f7f7f9;">Have an Account?</span>
                        <form action="/billing/index.php?fuse=admin&amp;action=Login" method="post" >
                            <input type="text" class="span2" placeholder="Login" id="email" name="email" value="" onfocus="if (this.value == 'E-Mail')
                    this.value = '';" type="text" >
                            <input type="password" class="span2" placeholder="Password" id="passed_password" name="passed_password" value="" onfocus="if (this.value == 'password')
                    this.value = '';" type="password" > 
                            <input type="submit" value="Login" class="btn"/>
                        </form>
                    </div>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <?php

                            wp_nav_menu ( array(
                                'menu' => 'header-menu',
                                'depth' => 3,
                                'container' => false,
                                'menu_class' => 'nav',
                                'fallback_cb' => 'wp_page_menu',
                                //Process nav menu using our custom nav walker
                                'walker' => new wp_bootstrap_navwalker() )
                            );

                            ?>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="header_vertical_space"></div>
        <div class="container">
