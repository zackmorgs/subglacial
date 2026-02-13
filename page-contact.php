<?php get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <h2>Contact</h2>
    </div>
</header>
<main id="content_contact" class="main-content text-center">
    <div class="content">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content(); // This is the important line!
            endwhile;
        endif;
        ?>
    </div>
</main>
<?php get_footer(); ?>