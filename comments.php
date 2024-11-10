<?php
require_once('src/partials/comment_walker.php');

if (post_password_required()) {
	return;
}
?>

<?php get_template_part('src/partials/comments'); ?>