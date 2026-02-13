<?php get_header(); ?>
<main class="main-content">
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            the_content(); // This is the important line!
        endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>