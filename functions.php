<?php
require_once('wp_bootstrap_navwalker.php');

function wpbootstrap_scripts_with_jquery() {

    // Register the script like this for a theme:

    wp_register_script('custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array('jquery'));
    wp_register_script('carousel-script', get_template_directory_uri() . '/bootstrap/js/bootstrap-carousel.js', array('jquery'));
    wp_register_script('dropdown-script', get_template_directory_uri() . '/bootstrap/js/bootstrap-dropdown.js', array('jquery'));
    wp_register_script('theme-js', get_template_directory_uri() . '/js/theme-js.js', array('jquery'));
    // For either a plugin or a theme, you can then enqueue the script:

    wp_enqueue_script('custom-script');
    wp_enqueue_script('carousel-script');
    wp_enqueue_script('dropdown-script');
    wp_enqueue_script('theme-js');
}

add_action('wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery');


if (function_exists('register_sidebar'))
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

function register_my_menus() {
    register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'extra-menu' => __('Footer Menu')
            )
    );
}

add_action('init', 'register_my_menus');

//Modify the length of the_excerpt
function new_excerpt_length($length) {
    return 40;
}

add_filter('excerpt_length', 'new_excerpt_length');

/* * *********** COMMENT LAYOUT ******************** */

// Comment Layout
function lab_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?>>
        <article id="comment-<?php comment_ID(); ?>" class="clearfix">
            <div class="comment-author vcard row-fluid clearfix">
                <div class="avatar span2">
                    <?php echo get_avatar($comment, '60'); ?>
                </div>
                <div class="span10 comment-text">
                    <?php printf(__('<h4></h4>', 'lab'), get_comment_author_link()) ?>
                    <?php edit_comment_link(__('Edit', 'lab'), '<span class="edit-comment btn btn-small"><i class="icon-black icon-pencil"></i> ', '</span>') ?>
                    <?php if ($comment->comment_approved == '0') : ?>
                        <div class="alert-message success">
                            <p><?php _e('Your comment is awaiting moderation.', 'lab') ?></p>
                        </div>
                    <?php endif; ?>
                    <?php comment_text() ?>

                    <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php comment_time('F jS, Y'); ?> </a></time>
                    <div class="reply">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    </div>
                    <hr/>
                    <!-- removing reply link on each comment since we're not nesting them -->
                    <?php //comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])))  ?>
                </div>
            </div>
        </article>
        <!-- </li> is added by wordpress automatically -->
        <?php
    }

// don't remove this bracket!
    ?>
