<?php
/* Template Name: Blog Page */
get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <h2>Blog</h2>
    </div>
</header>
<main class="main-content">
    <section class="blog-posts">
        <div class="post-list">
            <?php
            // Query the last 3 posts
            $latest_posts = new WP_Query(query: [
                'posts_per_page' => 6
            ]);

            if ($latest_posts->have_posts()):
                while ($latest_posts->have_posts()):
                    $latest_posts->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <article class="post content">
                            <h2><?php the_title(); ?></h2>
                            <div class="meta"><?php the_time(format: 'F j, Y'); ?> by <?php the_author(); ?></div>
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                        </article>
                    </a>
                <?php endwhile; wp_reset_postdata(); else: ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>