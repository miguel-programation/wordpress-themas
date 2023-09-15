<?php

//aqui estamos creando un nuevo tipo de post llamado peliculas

add_action('init', 'codigo_vivo_register_post_type_peliculas');

function codigo_vivo_register_post_type_peliculas(){

  
  $labels = array(
      'name' => __('Peliculas', 'codigo_vivo'),
      'singular_name' => __('Pelicula', 'codigo_vivo'),
      'menu_name' => __('Peliculas', 'codigo_vivo'),
      'name_admin_bar' => __('Pelicula', 'codigo_vivo'),
      'add_new_item' => __('Añadir Nueva Pelicula', 'codigo_vivo'),

  );
  
  $argumentos = array(
       'labels'             => $labels,
       'public'             => true,
       'publicly_queryable' => true,
       'show_ui'            => true,
       'show_in_menu'       => true,
       'query_var'          => true,
       'capability_type'    => 'post',
       'has_archive'        => true,
       'hierarchical'       => false,
       'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
  );

  register_post_type('peliculas', $argumentos);

}

