<?php
// call header
get_header();
?>

<?php
while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php the_title(); ?>
<?php endwhile; ?>

<?php
// call footer
get_footer();
?>