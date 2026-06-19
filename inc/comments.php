<?php
if (!defined('ABSPATH')) exit;

function zen_comment_callback($comment, $args, $depth) {
    ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body flex gap-4 group relative animate-fade-in">
            <div class="shrink-0">
                <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size'], '', get_comment_author() . ' 的头像', array('class' => 'rounded-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all shadow-sm')); ?>
            </div>
            <div class="flex-grow min-w-0">
                <div class="flex items-center justify-between mb-2">
                    <h4 class="text-sm font-bold text-gray-900 dark:text-white"><?php echo esc_html(get_comment_author()); ?></h4>
                    <time class="text-xs text-gray-600 dark:text-gray-400 font-sans" datetime="<?php echo esc_attr(get_comment_time('c')); ?>"><?php printf(esc_html__('%1$s前', 'zen'), esc_html(human_time_diff(get_comment_time('U'), current_time('timestamp')))); ?></time>
                </div>
                <div class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed prose dark:prose-invert max-w-none break-words mb-2"><?php comment_text(); ?></div>
                <div class="text-xs mt-1">
                    <?php
                    $reply_args = array_merge($args, array(
                        'depth' => $depth,
                        'max_depth' => $args['max_depth'],
                        'reply_text' => '回复',
                        'add_below' => 'div-comment',
                        'aria_label' => '回复给 ' . get_comment_author(),
                    ));
                    $reply_link = get_comment_reply_link($reply_args);
                    echo zen_kses_link(str_replace("class='comment-reply-link'", "class='inline-flex items-center gap-1 text-gray-600 hover:text-gray-900 dark:hover:text-white transition-colors cursor-pointer font-medium'", $reply_link));
                    ?>
                </div>
            </div>
        </article>
    <?php
}
