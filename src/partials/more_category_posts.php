  <?php
  $current_post_categories = get_the_category();

  $category_ids = array_map(
      fn($category): int => $category->term_id,
      $current_post_categories
  );

  $query_args = [
      "category__in" => $category_ids,
      "post__not_in" => [get_the_ID()],
      "posts_per_page" => $args["max_count"],
  ];

  $related_posts_query = new WP_Query($query_args);
  ?>

  <?php if ($related_posts_query->have_posts()): ?>
    <h2 class="text-3xl font-bold text-center mb-10 text-middlebrown"><?php lang(
        "Related posts"
    ); ?></h2>

    <div class="space-y-5 md:space-y-10">
      <?php
      while ($related_posts_query->have_posts()) {
          $related_posts_query->the_post();
          get_template_part("src/posts/card");
      }
      wp_reset_postdata();
      ?>
    </div>
  <?php endif; ?>
