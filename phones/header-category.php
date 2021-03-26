<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <title>Mobile list</title>
</head>
<body>
<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="header__top-wrapper">
        <div class="header__phone">
          <div class="header__phone-text"><?php the_field('header__phone-text'); ?>
            <span><?php the_field('header__phone-text_span'); ?></span>
          </div>
        </div>
        <h1 class="header__title anim-item">
          <?php the_field('header__title'); ?>
        </h1>
        <form action="">
          <div class="blog__sidebar">
            <?php  dynamic_sidebar('top_sidebar')?>

          </div>
        </form>
      </div>
    </div>
  </div>



  <div class="header__menu">
    <div class="container">
      <nav class="menu">
        <div class="blog__sidebar">
          <?php  dynamic_sidebar('top_sidebar2')?>

        </div>
      </nav>
    </div>
  </div>

  <div class="header__benefits">
    <div class="container">
      <div class="header__benefits-inner">
        <div class="header__benefits-secure">
          <?php the_field('header__benefits-secure'); ?>
        </div>
        <div class="header__benefits-order">
          <?php the_field('header__benefits-order'); ?>
        </div>
        <div class="header__benefits-satisfaction">
          <?php the_field('header__benefits-satisfaction'); ?>
        </div>
      </div>
    </div>
  </div>
</header>
