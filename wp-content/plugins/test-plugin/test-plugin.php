<?php
/*
 * Plugin Name:       Test Plugin
 * Plugin URI:        https://olamfx.com/public/
 * Description:       Plugin de encuestas
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Miguel Sanchez
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

 function activar(){
    
       global $wpdb;

       $sql = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas(
          `EncuestaId` INT NOT NULL AUTO_INCREMENT,
          `Nombre` VARCHAR(45) NULL,
          `ShortCode` VARCHAR(45) NULL,
          PRIMARY KEY (`EncuestaId`));";

          $wpdb->query($sql);

          $sql2 = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas_detalle(
            `DetalleId` INT NOT NULL AUTO_INCREMENT,
            `EncuestaId` INT NULL,
            `Pregunta` VARCHAR(150) NULL,
            `Tipo` VARCHAR(45) NULL,
            PRIMARY KEY (`DetalleId`));";
  
            $wpdb->query($sql2);

           $sql3 = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas_respuesta(
            `RespuestaId` INT NOT NULL AUTO_INCREMENT,
            `DetalleId` INT NULL,
            `Respuesta` VARCHAR(45) NULL,
             PRIMARY KEY (`RespuestaId`));";
      
             $wpdb->query($sql3);

 }

 add_action('admin_menu', 'crearmenu');

 function crearmenu(){
     
    add_menu_page(
        'Super Encuestas Titulo', //titulo de la pagina
        'Super encuestas menu',  //titulo del menu
        'manage_options', // capability
         plugin_dir_path(__FILE__). 'admin/lista-encuestas.php',  //slug se muestra como url
         null,  //funcion del contenido
        plugin_dir_url(__FILE__). 'admin/img/mi-icono.png',
        '1'
    );

    /*add_submenu_page(
        'sp_menu',
        'Ajustes',
        'Ajustes',
        'manage_options',
        'sp_menu_ajustes', 
        'submenu' 
    );*/
       
}

function mostrarcontenido(){

    echo "<h1>Contenido de la Pagina</h1>";
}

/*function submenu(){
   
    echo "<h1>Submenu</h1>";

}*/

register_activation_hook(__FILE__, 'activar');

//encolar bootstrap

function EncolarBootstrapJS(){
     
    wp_enqueue_script('bootstrapjs' ,plugins_url('admin/bootstrap/js/bootstrap.min.js',__FILE__),array('jquery'));

}

add_action('admin_enqueue_scripts', 'EncolarBootstrapJS');

function EncolarBootstrapCSS(){
     
    wp_enqueue_style('bootstrapcss' ,plugins_url('admin/bootstrap/css/bootstrap.min.css',__FILE__));

}

add_action('admin_enqueue_scripts', 'EncolarBootstrapCSS');

function EncolarJS(){
     
    wp_enqueue_script('JsExterno' ,plugins_url('admin/js/lista_encuestas.js',__FILE__),array('jquery'));

}

add_action('admin_enqueue_scripts', 'EncolarJS');