<?php get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <h2>Digital Press Kit</h2>
    </div>
</header>
<main class="main-content">
    <section id="press_kit_content">
        <div class="content text-center">
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
                    the_content(); // This is the important line!
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>