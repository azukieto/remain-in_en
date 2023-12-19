<?php require_once ('header.php'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_title(); ?>
<?php endwhile; endif; ?>
<?php require_once ('footer.php'); ?>