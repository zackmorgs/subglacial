<?php get_header(); ?>
<header id="hero_main" class="hero">
    <div class="hero-content">
        <h2>Discography</h2>
    </div>
</header>
<main class="main-content">
    <section id="subglacial">
        <div class="content">
            
        </div>
    </section>
    <section id="content_spotify">
        <div class="content text-center">
            <a href="https://open.spotify.com/artist/697R3cOlkWzOAkXztLzeg2?si=KjclXRwTTTOg53nKBpCcvw" target="_blank"
                class="btn btn-social">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/spotify-logo.svg" alt="Spotify"
                    class="icon" />
            </a>
            <br />
            <br />

            <iframe style="border-radius:12px; width: 100%;"
                src="https://open.spotify.com/embed/artist/697R3cOlkWzOAkXztLzeg2?utm_source=generator&theme=0"
                 height="352" frameBorder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"></iframe>
        </div>
    </section>
    <section id="content_bandcamp">
        <div class="content text-center">
            <a href="https://ashbringermusic.bandcamp.com" target="_blank" class="btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/bandcamp.svg" alt="Bandcamp"
                    class="icon" />
            </a>
            <br />
            <br />
            <iframe style="border: 0; width: 100%; height: 470px; margin:0 auto; display:block;"
                src="https://bandcamp.com/EmbeddedPlayer/album=3625968569/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/transparent=true/"
                seamless><a href="https://ashbringermusic.bandcamp.com/album/vacant-2025-remaster">Vacant (2025
                    Remaster) by
                    Ashbringer</a></iframe>
        </div>
    </section>
    <section id="apple_music">
        <div class="content text-center">
            <a href="https://music.apple.com/us/artist/ashbringer/697R3cOlkWzOAkXztLzeg2" target="_blank" class="btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-apple_music.svg" alt="Apple Music"
                    class="icon" />
            </a>
            <br />
            <br />
            <iframe class="hidden-sm" allow="autoplay *; encrypted-media *; fullscreen *; clipboard-write"
                frameborder="0" height="450" style="width:100%;max-width:660px;overflow:hidden;border-radius:10px;"
                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation"
                src="https://embed.music.apple.com/us/album/vacant-2025-remaster/1806321477"></iframe>
        </div>
    </section>
    <section id="content_deezer">
        <div class="content text-center">
            <a class="btn" href="https://www.deezer.com/us/artist/7830050">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/deezer.svg" alt="Deezer"
                    class="icon" />
            </a>

            <!-- <iframe title="deezer-widget" src="https://widget.deezer.com/widget/dark/artist/7830050/top_tracks" width="100%" height="300" frameborder="0" allowtransparency="true" allow="encrypted-media; clipboard-write"></iframe> -->
        </div>
    </section>
</main>
<?php get_footer(); ?>