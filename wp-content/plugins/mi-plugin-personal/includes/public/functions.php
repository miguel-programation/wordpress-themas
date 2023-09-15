<?php

//mostrar en el titulo del single hola plugin

add_filter('the_title', 'codigo_ejemplo', 10, 2 );
 
function codigo_ejemplo($title, $id){
    
    if( is_single()){
       $title = $title . ' Hola Plugin ';
    }    
    return $title;
}
