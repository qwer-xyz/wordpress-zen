<?php
if (!defined('ABSPATH')) exit;

function zen_comment_callback($comment, $args, $depth) {
    $comment_card_classes = 'zen-comment-card comment-body group animate-pop-in p-5 sm:p-6';
    if ((int) $depth > 1) {
        $comment_card_classes .= ' is-child-comment';
    }
    ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="<?php echo esc_attr($comment_card_classes); ?>">
            <div class="flex gap-4">
                <div class="shrink-0">
                    <?php
                    if ($args['avatar_size'] != 0) {
                        echo get_avatar(
                            $comment,
                            $args['avatar_size'],
                            '',
                            get_comment_author() . ' 的头像',
                            array(
                                'class' => 'rounded-full object-cover ring-2 ring-white dark:ring-zinc-900 shadow-sm grayscale opacity-80 transition-all duration-300 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105',
                            )
                        );
                    }
                    ?>
                </div>
                <div class="min-w-0 flex-1">
                    <header class="mb-3 flex flex-col gap-1 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h4 class="text-sm font-bold text-gray-900 dark:text-white"><?php echo esc_html(get_comment_author()); ?></h4>
                            <?php if ('0' === $comment->comment_approved) : ?>
                                <p class="mt-1 text-xs text-amber-600 dark:text-amber-400">评论正在等待审核。</p>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url(get_comment_link($comment)); ?>" class="zen-ui-link text-xs text-gray-500 dark:text-gray-400">
                            <time datetime="<?php echo esc_attr(get_comment_time('c')); ?>">
                                <?php printf(esc_html__('%1$s前', 'zen'), esc_html(human_time_diff(get_comment_time('U'), current_time('timestamp')))); ?>
                            </time>
                        </a>
                    </header>

                    <div class="prose prose-sm prose-zinc dark:prose-invert max-w-none break-words leading-relaxed text-gray-700 dark:text-gray-300">
                        <?php comment_text(); ?>
                    </div>

                    <footer class="mt-4 flex items-center gap-3 text-xs font-medium">
                        <?php
                        $reply_args = array_merge($args, array(
                            'depth' => $depth,
                            'max_depth' => $args['max_depth'],
                            'reply_text' => '回复 <i class="ph ph-arrow-bend-up-left" aria-hidden="true"></i>',
                            'add_below' => 'div-comment',
                            'aria_label' => '回复给 ' . get_comment_author(),
                        ));
                        $reply_link = get_comment_reply_link($reply_args);
                        echo zen_kses_link($reply_link);
                        ?>
                    </footer>
                </div>
            </div>
        </article>
    <?php
}
