<?php
    
    //Aqui creamos el menu wordpress
    if(function_exists('register_nav_menus')){
           register_nav_menus(array('superior' => 'Menu Principal Superior'));     

    }

    //Aqui creo una clase para el ancla <a>

    add_filter('nav_menu_link_attributes', 'clase_menu_invento', 10 , 3);

    function clase_menu_invento($atts,$item,$args){
            $class = 'nav-link';
            $atts['class'] = $class;
            return $atts; 
    }

    //agregar imagenes destacadas
    if( function_exists('add_theme_support')){
          add_theme_support('post-thumbnails'); 
     }

     //agregamos sidebar widgets
     add_action('widgets_init', 'my_register_sidebars');
     function my_register_sidebars(){
         
            register_sidebar(
                array(
                    'name'          => __( 'Primary Sidebar'),
	                'id'            => "primary",
	                'description'   => 'Este es mi widget Sidebar',
	                'class'         => '',
	                'before_widget' => '<li id="%1$s" class="widget %2$s" my-3>',
	                'after_widget'  => "</li>\n",
	                'before_title'  => '<h2 class="widgettitle">',
	                'after_title'   => "</h2>\n",

              )
            );

     }





?>