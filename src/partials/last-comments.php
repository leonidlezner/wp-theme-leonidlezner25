<?php
$recent_comments = get_comments(array(
  'number'      => 5,
  'status'      => 'approve',
  'type'        => 'comment'
));

if ($recent_comments) : ?>
  <div class="lg:pl-7">
    <div>
      <h2 class="text-xl text-color2 font-bold font-heading mb-3"><?php lang("Last comments"); ?></h2>

      <ul class="space-y-5">


        <?php foreach ($recent_comments as $comment) : ?>
          <li>
            <div class="flex space-x-3">
              <div class="mt-1">
                <div class="rounded-full overflow-hidden">
                  <?php echo get_avatar($comment->comment_author_email, 40); ?>
                </div>
              </div>
              <div class="flex-1">
                <div class="text-sm text-color3"><?php echo sprintf(get_lang('%s on %s'), $comment->comment_author, '<a href="' . get_permalink($comment->comment_post_ID) . '" class="underline">' . get_the_title($comment->comment_post_ID) . '</a>'); ?></div>
                <p class="mt-1"><?php echo wp_trim_words($comment->comment_content, 15, '...'); ?></p>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
<?php endif; ?>