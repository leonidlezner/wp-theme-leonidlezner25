<div class="post-card col-span-full lg:col-span-5 grid grid-cols-subgrid">

  <div class="col-span-full md:col-span-2 lg:col-span-1 max-md:h-20 max-md:mb-5 md:aspect-1 bg-color5 rounded-md overflow-hidden">
    <a href="<?php echo get_permalink(get_the_ID()); ?>">
      <?php echo the_post_thumbnail('post-thumbnail', ['class' => 'object-cover w-full h-full']); ?>
    </a>
  </div>

  <div class="space-y-3 col-span-full md:col-span-5 lg:col-span-4">
    <?php the_title('<h2 class="font-heading font-bold text-4xl"><a href="' . esc_url(get_permalink()) . '" class="text-color3 hover:text-color2 hover:underline" rel="bookmark">', '</a></h2>'); ?>

    <?php get_template_part('src/posts/meta'); ?>

    <div class="prose prose-leonidlezner">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>