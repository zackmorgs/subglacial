<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
</head>

<body <?php body_class(); ?>>
  <div class="frame">
    <div class="body-bg">
    </div>
    <nav id="nav_main">
      <div class="nav-container">
        <div class="nav-bar">
          <a id="logo" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo_spawn.svg" alt="Ashbringer Logo" />
          </a>
          <div id="nav_toggle" class="hamburger hamburger--stand js-hamburger">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
        </div>
        <div id="nav_links">
          <ul class="nav-list">
            <li>
              <a href="/about/" class="nav-link">
                About
              </a>
            </li>
            <li>
              <a href="/discography/" class="nav-link">
                Discography
              </a>
            </li>
            <li>
              <a href="/watch/" class="nav-link">
                Watch
              </a>
            </li>
            <!-- <li>
              <a href="/blog/" class="nav-link">
                Blog
              </a>
            </li> -->
            <li>
              <a href="/events/" class="nav-link">
                Events
              </a>
            </li>
            <li>
              <a href="/contact/" class="nav-link">
                Contact
              </a>
            </li>
            <!-- <li>
              <a href="/digital-press-kit/" class="nav-link">
                Digital Press Kit
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>