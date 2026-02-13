<?php get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <h2>About</h2>
    </div>
</header>
<main id="page_about" class="main-content">
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