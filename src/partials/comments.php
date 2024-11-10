<div id="comments" class="space-y-10">
    <?php if (have_comments()) : ?>
        <div class="space-y-10">
            <?php wp_list_comments([
                "style" => "div",
                "type" => "comment",
                "max_depth" => 4,
                "short_ping" => true,
                "avatar_size" => "50",
                "end-callback" =>
                "Custom_Comment_Walker::end_parent_html5_comment",
                "walker" => new Custom_Comment_Walker(),
            ]); ?>
        </div>
    <?php endif; ?>

    <?php if (
        !comments_open() &&
        get_comments_number() &&
        post_type_supports(get_post_type(), "comments")
    ) : ?>
        <p class="mt-5 text-center text-gray-500"><?php lang(
                                                        "Comments are closed."
                                                    ); ?></p>
    <?php endif; ?>

    <?php comment_form(["format" => "html5"]); ?>
</div>