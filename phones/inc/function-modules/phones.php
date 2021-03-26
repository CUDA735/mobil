<?php

add_action( 'init', function(){
  register_post_type( 'phones', [
    'label'  => null,
    'labels' => [
      'name'               => 'phones', // основное название для типа записи
      'singular_name'      => 'phones', // название для одной записи этого типа
      'add_new'            => 'Добавить phones', // для добавления новой записи
      'add_new_item'       => 'Добавление phones', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование phones', // для редактирования типа записи
      'new_item'           => 'Новое phones', // текст новой записи
      'view_item'          => 'Смотреть phones', // для просмотра записи этого типа.
      'search_items'       => 'Искать phones', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'phones', // название меню
    ],
    'taxonomies'          => array( 'category' ),
    'public'             => true,
    'has_archive'        => true,
    'rewrite' => [
      'with_front' => false
    ],
    'supports' => ['title', 'excerpt', 'thumbnail', 'editor']
  ] );
});
add_action('after_setup_theme', function(){
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('post-formats', ['aside', 'video']);
});

function caphub_get_phones($amount = 8){
  $phones = get_posts([
    'numberposts' => $amount,
    'post_type' => 'phones',
    'order' =>  'ASC'
  ]);
  $res = [];
  foreach ($phones as $phone){
    $res[] = [
      'id' => $phone->ID,
      'title' => get_the_title($phone),
      'content' => get_the_content('', '', $phone),
      'excerpt' => get_the_excerpt($phone),
      'link' => get_permalink($phone),
      'processor' => get_field('products__item-processor', $phone),
      'ram' => get_field('products__item-ram', $phone),
      'resolution' => get_field('products__item-resolution', $phone),
      'memory' => get_field('products__item-memory', $phone),
      'avg_price' => get_field('products__item-price', $phone),
      'thumbnail' => get_the_post_thumbnail_url( $phone)
    ];
  }
  return $res;
}
