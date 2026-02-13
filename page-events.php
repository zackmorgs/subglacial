<?php get_header(); ?>
<header class="hero">
    <div class="hero-content">
        <h2>Events</h2>
    </div>
</header>

<main class="main-content">
    <section id="event_services">
        <div class="content">
            <a href="https://www.facebook.com/ashbringermusic/events" class="btn">
                Facebook Events
            </a>
            <br>
            <br>
            <a href="https://www.songkick.com/artists/8551684-ashbringer" class="btn target=" _blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/songkick-logo.svg" alt="Songkick"
                    class="icon invert" />
            </a>
            <br>
            <br>
            <a href="https://www.bandsintown.com/a/2002896-ashbringer" class="btn" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bandsintown-logo.png" alt="Bandsintown"
                    class="icon" />
            </a>
        </div>
    </section>
    <!-- <section id="bands_in_town">
        <div class="content content-white">
            <script charset="utf-8" src="https://widget.bandsintown.com/main.min.js"></script><a class="bit-widget-initializer" data-artist-name="ashbringer" data-display-local-dates="false" data-display-past-dates="false" data-auto-style="false" data-text-color="#000000" data-link-color="#00b4b3" data-background-color="rgba(0,0,0,0)" data-display-limit="15" data-display-start-time="false" data-link-text-color="#FFFFFF" data-display-lineup="false" data-display-play-my-city="true" data-separator-color="rgba(124,124,124,0.25)"></a>
        </div>
    </section> -->
    <section id="event_content">
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
    </section>
</main>
<?php get_footer(); ?>