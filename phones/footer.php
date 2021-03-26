<footer class="footer">
  <div class="container">
    <div class="footer__top anim-item">
      <ul class="footer__links">
        <li class="footer__links-title footer_title">
          <?php the_field('footer__links-title'); ?>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-1'); ?>
          </a>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-2'); ?>
          </a>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-3'); ?>
          </a>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-4'); ?>
          </a>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-5'); ?>
          </a>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-6'); ?>
          </a>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-7'); ?>
          </a>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-8'); ?>
          </a>
        </li>
        <li class="footer__links-item">
          <a class="footer__links-link" href="#">
            <?php the_field('footer__links-link-9'); ?>
          </a>
        </li>
      </ul>
      <ul class="footer__info">
        <li class="footer__info-title footer_title">
          <?php the_field('footer__info-title'); ?>
        </li>
        <li class="footer__info-item">
          <a class="footer__info-link" href="">
            <?php the_field('footer__info-link-1'); ?>
          </a>
        </li>
        <li class="footer__info-item">
          <a class="footer__info-link" href="">
            <?php the_field('footer__info-link-2'); ?>
          </a>
        </li>
        <li class="footer__info-item">
          <a class="footer__info-link" href="">
            <?php the_field('footer__info-link-3'); ?>
          </a>
        </li>
        <li class="footer__info-item">
          <a class="footer__info-link" href="">
            <?php the_field('footer__info-link-4'); ?>
          </a>
        </li>
        <li class="footer__info-item">
          <a class="footer__info-link" href="">
            <?php the_field('footer__info-link-5'); ?>
          </a>
        </li>
      </ul>
      <form class="footer__form" action="">
        <h3 class="footer__form-title footer_title">
          <?php the_field('footer__form-title'); ?>
        </h3>
        <div class="footer__form-text">
          <?php the_field('footer__form-text'); ?>
        </div>
        <input class="footer__form-input" type="text" placeholder="Enter your name" id="name">
        <input class="footer__form-input" type="email" placeholder="Enter your email address" id="email">
        <input class="footer__form-input green_btn" type="submit" value="Join now"/>
      </form>
      <div class="footer__testimonials">
        <h3 class="footer__testimonials-title footer_title">
          <?php the_field('footer__testimonials-title'); ?>
        </h3>
        <div class="footer__testimonials-text">
          <?php the_field('footer__testimonials-text-1'); ?>
        </div>
        <div class="footer__testimonials-text">
          <?php the_field('footer__testimonials-text-2'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="footer__bottom-inner">
        <div class="footer__bottom-images">
          <img src="<?php the_field('footer-bank-img'); ?>" alt="">
          <img src="<?php the_field('footer-norton-img'); ?>" alt="">
        </div>
        <div class="footer__bottom-text">
          <?php the_field('footer__bottom-text'); ?>
        </div>
        <div class="footer__bottom-media">
          <div class="footer__media-facebook"></div>
          <div class="footer__media-twitter"></div>
          <div class="footer__media-instagram"></div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php
wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js');
wp_footer();
?>
</body>
</html>
