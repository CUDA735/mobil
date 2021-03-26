<?php get_header(); ?>

<main class="main">
  <section class="content">
    <div class="container">
      <div class="order">
        <ul class="order__list">
          <li class="order__list-item anim-item">
            <h3 class="order__list-title">
              order
              <span>mobiles</span>
            </h3>
            <div class="order__list-text">
              shop our collection
            </div>
            <a class="order__list-link" href="#">
            </a>
          </li>
          <li class="order__list-item anim-item">
            <h3 class="order__list-title">
              order
              <span>mobiles</span>
            </h3>
            <div class="order__list-text">
              shop our collection
            </div>
            <a class="order__list-link" href="#"></a>
          </li>
          <li class="order__list-item anim-item">
            <h3 class="order__list-title">
              order
              <span>mobiles</span>
            </h3>
            <div class="order__list-text">
              shop our collection
            </div>
            <a class="order__list-link" href="#">
            </a>
          </li>
        </ul>
        <div class="order__slider">
          <div class="order__slider-item"
               style="background-image: url('<?php the_field('order__slider-item'); ?>');">
            <div class="order__slider-content">
              <h3 class="order__slider-title">
                Order<span> mobiles</span>
              </h3>
              <div class="order__slider-text">
                100% Moneyback Guarantee
              </div>
              <a  class="order__slider-link" href="#">Shop now ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="blog__sidebar">
    <?php  dynamic_sidebar('top_sidebar2')?>

  </div>

  <section class="products">
    <div class="container">
      <h3 class="products__title">
        Featured Products
      </h3>
      <ul class="products__list">
        <?php

        $args = array('post_type'=>array('posts', 'phones'));

        query_posts($args);

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


