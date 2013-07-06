<?php
/*
  Comments LAB
 */

 // Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
<div class="alert alert-info"><?php _e("This post is password protected. Enter the password to view comments.","lab"); ?></div>
<?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
<h3 id="comments"><?php comments_number('<span>' . __("No","lab") . '</span> ' . __("Responses","lab") . '', '<span>' . __("One","lab") . '</span> ' . __("Response","lab") . '', '<span></span> ' . __("Responses","lab") );?> <?php _e("to","lab"); ?> &#8220;<?php the_title(); ?>&#8221;</h3>

<ol class="commentlist unstyled">
<?php wp_list_comments( 'type=comment&callback=lab_comments' ); ?>
</ol>

<?php else : // this is displayed if there are no comments so far ?>

<?php if ( comments_open() ) : ?>
<!-- If comments are open, but there are no comments. -->

<?php else : // comments are closed
?>
<?php
$suppress_comments_message = of_get_option('suppress_comments_message');

if (is_page() && $suppress_comments_message) :
?>
<?php else : ?>
<!-- If comments are closed. -->
<p class="alert alert-info"><?php _e("Comments are closed","lab"); ?>.</p>
<?php endif; ?>

<?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond" class="respond-form">

<h3 id="comment-form-title"><?php comment_form_title( __("Leave a Reply","lab"), __("Leave a Reply to","lab") . ' %s' ); ?></h3>

<div id="cancel-comment-reply">
    
<p class="small"><?php cancel_comment_reply_link( __("Cancel","lab") ); ?></p>

</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<div class="help">
<p><?php _e("You must be","lab"); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e("logged in","lab"); ?></a> <?php _e("to post a comment","lab"); ?>.</p>
</div>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="form-horizontal" id="commentform">

<?php if ( is_user_logged_in() ) : ?>
<p class="comments-logged-in-as"><?php _e("Logged in as","lab"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account","lab"); ?>"><?php _e("Log out","lab"); ?> &raquo;</a></p>

<?php else : ?>
<div class="control-group">
<label class="control-label" for="author"><?php _e("Name","lab"); ?> <?php if ($req) echo "(required)"; ?></label>
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-user"></i></span>
<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e("Your Name","lab"); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
</div>
</div>
</div>

<div class="control-group">
<label class="control-label" for="email"><?php _e("Mail","lab"); ?> <?php if ($req) echo "(required)"; ?></label>
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-envelope"></i></span>
<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e("Your Email","lab"); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<span class="help-inline">(<?php _e("will not be published","lab"); ?>)</span>
</div>
</div>
</div>

<div class="control-group">
<label class="control-label" for="url"><?php _e("Website","lab"); ?></label>
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-home"></i></span>
<input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e("Your Website","lab"); ?>" tabindex="3" />
</div>
</div>
</div>


<?php endif; ?>
<div class="control-group">
<label class="control-label" for="comment"><?php _e("Comment","lab"); ?></label>
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-pencil"></i></span>
<textarea name="comment" id="comment" placeholder="<?php _e("Your Comment Here…","lab"); ?>" class="input-xxlarge"></textarea>
</div>
</div>
</div>
<div class="form-actions">
<input class="btn btn-primary" name="submit" type="submit" id="submit" tabindex="5" value="<?php _e("Submit Comment","lab"); ?>" />
<?php comment_id_fields(); ?>
</div>
<?php
//comment_form();
do_action('comment_form()', $post->ID);

?>
<input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" />
</form>
<?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>