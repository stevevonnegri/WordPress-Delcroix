<?php
get_header(); 
?>

<div class="container">
<?php the_content() ?>
<?= next_posts_link() ?>
<?= previous_posts_link() ?>
</div>

<?php get_footer() ?>