<?php get_header('category'); ?>

<main class="main">
  <section class="products">
    <div class="container">
      <h3 class="products__title">
        Featured Products
      </h3>
      <ul class="products__list">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>
          <li class="products__list-item">
            <h5 class="products__list-title">
              <?php the_title(); ?>
            </h5>
            <div class="products__item-wrapper">
              <a href="<?php the_permalink(); ?>"><img class="products__item-img" src="<?php the_post_thumbnail(); ?></a>
          </div>
          <div class="products__item-order">
                <div class="products__item-price">
                  <?php the_field('products__item-price'); ?>$
                </div>
                <a class="products__item-link" href="#">
                  order now
                </a>
            </div>
          </li>

        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>


