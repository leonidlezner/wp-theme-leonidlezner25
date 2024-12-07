<?php

class Custom_Comment_Walker extends Walker_Comment
{
    protected function html5_comment($comment, $depth, $args)
    {
?>
        <div id="comment-<?php comment_ID(); ?>" <?php comment_class("flex"); ?>>
            <div class="flex-shrink-0 mr-5">
                <div class="rounded-full overflow-hidden">
                    <?php echo get_avatar($comment, $args["avatar_size"]); ?>
                </div>
            </div>

            <div class="flex-1 space-y-4" id="div-comment-<?php comment_ID(); ?>">
                <div>
                    <div class="mb-2 text-color2 font-bold"><?php printf(
                                                                get_lang("%s at %s"),
                                                                get_comment_author_link(),
                                                                get_comment_date()
                                                            ); ?></div>

                    <div id="div-comment-mc-<?php comment_ID(); ?>">
                        <?php if ("0" == $comment->comment_approved) : ?>
                            <p class="text-xs text-red-500"><?php lang(
                                                                "Your comment is awaiting moderation."
                                                            ); ?></p>
                        <?php endif; ?>

                        <div class="prose prose-leonidlezner mb-2">
                            <?php comment_text(); ?>
                        </div>

                        <div class="flex items-center space-x-2">
                            <?php comment_reply_link(
                                array_merge($args, [
                                    "add_below" => "div-comment-mc",
                                    "depth" => $depth,
                                    "max_depth" => $args["max_depth"],
                                ])
                            ); ?>

                            <?php edit_comment_link(__("Edit")); ?>
                        </div>
                    </div>
                </div>
            <?php
        }

        public static function end_parent_html5_comment($comment, $depth, $args)
        {
            ?>
            </div> <!-- end of media-body -->
        </div><!-- end of comment -->
<?php
        }
    }
