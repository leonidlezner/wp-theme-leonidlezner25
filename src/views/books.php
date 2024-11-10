<?php get_template_part('src/layout/page', 'begin'); ?>

<div class="space-y-10">
  <div class="space-y-2 lg:space-y-5">
    <?php get_template_part('src/partials/page_headline'); ?>
  </div>

  <div class="grid grid-cols-7 gap-7">
    <article class="col-span-7 lg:col-span-5">
      <?php the_post(); ?>

      <div class="prose prose-lg prose-leonidlezner">
        <?php the_content(); ?>
      </div>

      <div class="pt-10">
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-5">
          <?php foreach (get_all_books() as $book) : ?>
            <?php get_template_part('src/partials/book_box', null, ['book' => $book]); ?>
          <?php endforeach; ?>
        </div>
      </div>

      <?php if (comments_open() || get_comments_number()) : ?>
        <div class="pt-10">
          <div class="">
            <h2 class="text-3xl font-bold font-heading mb-10 text-color2"><?php lang('Comments'); ?></h2>

            <div class="post-comments">
              <?php comments_template(); ?>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </article>
  </div>

</div>
<?php get_template_part('src/layout/page', 'end'); ?>