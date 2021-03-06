<?php
/**
 * @package Absolute
 */
?>
<?php global $absolute_options; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (!is_front_page()): ?> 
        <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php endif; ?>
    <div class="entry-meta">
        <?php absolute_posted_on(); ?>
        <?php if(comments_open() && ! post_password_required()) : ?>
        <?php comments_popup_link(__('Reply', 'absolute'), _x('1 Comment', 'comments number', 'absolute'), _x('% Comments', 'comments number', 'absolute'), 'entry-comments'); ?>
        <?php edit_post_link(__('Edit', 'absolute')); ?>
        <?php endif; ?>
    </div>
    <div class="entry-content">
        <?php the_content(__('Continue reading', 'absolute')); ?>
        <?php wp_link_pages(array('before' => '<div class="page-link clearfix"><span class="pages-title">'.__('Pages:','absolute').'</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
    </div>
    <?php absolute_utility(); ?>
    <?php absolute_post_author_info(); ?>
    <?php absolute_post_bookmark(); ?>
</article>