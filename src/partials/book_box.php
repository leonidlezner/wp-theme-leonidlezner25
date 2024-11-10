<?php
$book = $args['book'];

$url = get_post_meta($book->ID, 'url');

if ($url && count($url)) {
  $url = $url[0];
} else {
  $url = "https://google.de/search?q=" . $book->post_title;
}

?>

<a href="<?php echo $url ?>" target="_blank" rel="nofollow" class="group flex items-center flex-col justify-between overflow-hidden border border-color5 hover:border-color4 rounded-md">
  <div class="p-3">
    <?php echo get_the_post_thumbnail($book, 'post-thumbnail', ['class' => 'object-cover w-40']); ?>
  </div>
  <h3 class="text-color3 bg-color5 w-full text-center p-1 group-hover:text-color2"><?php echo $book->post_title; ?></h3>
</a>