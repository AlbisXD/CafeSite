<!DOCTYPE html>

<head>
  <title>CafeSite</title>
  <meta charset="utf-8">
  <meta name="description" content="カフェサイト">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img\favicon.ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/main_style.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/movie.css">

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/slick_style.css" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/hamburger.css">

  <?php wp_head(); ?>
</head>

<body class="whole">
  <!-- ヘッダー -->
  <header>
    <nav>
      <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img\favicon.jpg" alt="home"></a>
      </div>
      <!-- ナビ -->
      <div class="navlist">
        <ul>
          <li>
            <a class="nav-link" href="#link-concept">
            CONCEPT
            </a>
          </li>
          <li><a class="nav-link" href="<?php echo home_url(); ?>/menu">MENU</a></li>
          <li><a class="nav-link" href="<?php echo home_url(); ?>/archive">NEWS</a></li>
          <li>
            <a class="nav-link"  href="#link-access">
            ACCESS
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- ハンバーガーメニュー -->
    <div class="ham-nav">
      <div class="openbtn1"><span></span><span></span><span></span></div>
    </div>
    <nav id="g-nav">
      <div id="g-nav-list">
        <ul>
          <li>
            <a class="nav-link" href="<?php echo home_url(); ?>/archive">
              LIST
            </a>
          </li>
          <li><a href="">xxxx</a></li>
          <li><a href="">xxxx</a></li>
          <li>
            <a class="nav-link" href="<?php echo home_url(); ?>/qa">
              Q&A
            </a>
          </li>
          <li>
            <a class="nav-link" href="<?php echo home_url(); ?>/contact">
              CONTACT
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>