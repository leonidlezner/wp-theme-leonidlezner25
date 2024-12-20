<div class="post-card sm:flex">
  <div class="sm:w-40 sm:mr-6 mb-3 sm:mb-0">
    <a href="<?php echo get_permalink(get_the_ID()); ?>" class="sm:aspect-1 h-24 sm:h-auto bg-color5 rounded-md overflow-hidden block">
      <?php echo the_post_thumbnail('post-thumbnail', ['class' => 'object-cover w-full h-full']); ?>
    </a>
  </div>

  <div class="space-y-3 sm:flex-1">
    <?php the_title('<h2 class="font-heading font-bold text-3xl"><a href="' . esc_url(get_permalink()) . '" class="text-color3 hover:text-color2 hover:underline" rel="bookmark">', '</a></h2>'); ?>

    <?php get_template_part('src/posts/meta'); ?>

    <div class="prose prose-leonidlezner">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>