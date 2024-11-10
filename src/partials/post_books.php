<?php $books = get_post_books(); ?>

<?php if ($books && count($books)) : ?>
  <div class="lg:ml-7">
    <h2 class="text-xl text-color2 font-bold font-heading mb-3"><?php lang("Related Books") ?></h2>
    <div class="space-y-5">
      <?php foreach ($books as $book) : ?>
        <?php get_template_part('src/partials/book_box', null, ['book' => $book]); ?>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>