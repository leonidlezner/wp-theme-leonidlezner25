<?php get_template_part('src/layout/page', 'begin'); ?>

<?php if (is_category()) : ?>
  <h1 class="text-3xl font-heading font-bold mb-12 text-color2"><?php echo single_cat_title('', false); ?></h1>
<?php endif; ?>

<?php if (is_search()) : ?>
  <h1 class="text-3xl font-heading font-bold mb-12 text-color2"><?php lang('Search results for'); ?> "<?php echo get_search_query(); ?>"</h1>
<?php endif; ?>


<?php if (have_posts()) : ?>
  <div class="grid grid-cols-7 gap-7">
    <div class="col-span-7 lg:col-span-5 grid grid-cols-subgrid space-y-12">
      <!-- Listing of posts -->
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <?php get_template_part('src/posts/card'); ?>
      <?php endwhile; ?>

      <!-- Pagination for posts -->
      <?php $pagination = get_the_posts_pagination(array(
        'mid_size' => 3,
        'prev_text' => get_lang('Previous'),
        'next_text' => get_lang('Next'),
      ));
      ?>

      <?php if ($pagination) : ?>
        <div class="col-span-full lg:col-span-5">
          <?php echo $pagination; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="col-span-7 lg:col-span-2 lg:border-l border-color5">


      <div class="lg:pl-7">
        <div>
          <h2 class="text-xl text-color2 font-bold font-heading mb-3"><?php lang("Categories"); ?></h2>

          <ul class="space-y-3">
            <?php foreach (get_categories() as $category) : ?>
              <li>
                <a class="text-color3 hover:text-color2 hover:underline flex items-center space-x-1" href="<?php echo get_category_link($category->term_id); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                  </svg>
                  <div>
                    <?php echo $category->cat_name; ?>
                  </div>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

    </div>
  </div>
<?php else : ?>
  <!-- Not found warning and search -->
  <div class="text-center mt-10 py-10 w-1/2 mx-auto border border-color4 rounded-md">
    <div class="text-color2">
      <div class="text-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 inline-block">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
        </svg>
        <div class="text-2xl font-semibold"><?php lang('No posts found'); ?></div>
      </div>
    </div>

    <div class="mt-5">
      <p class="mb-2"><?php lang('Try to search for some other keywords'); ?></p>
      <form action="<?php echo home_url('/'); ?>" method="get" class="space-y-3 px-10">
        <?php get_template_part('src/form/input', null, ['name' => 's', 'id' => 'content-s', 'value' => get_search_query(), 'placeholder' => get_lang('Search')]); ?>
        <?php get_template_part('src/form/button', null, ['caption' => get_lang('Search button')]); ?>
      </form>
    </div>
  </div>
<?php endif; ?>

<?php get_template_part('src/layout/page', 'end'); ?>