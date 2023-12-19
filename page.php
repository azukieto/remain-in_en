<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="p-page">
    <div class="l-container">
        <div class="cm-entry">
            <div class="cm-entry__body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>