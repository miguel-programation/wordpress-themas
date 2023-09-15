<?php
/*
 * Plugin Name:       Cambio Logo Login
 * Plugin URI:        https://olamfx.com/public/
 * Description:       Plugin para cambiar imagen Logo
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

 //Logo y formulario personalizado en login
function my_custom_login_logo() {
    echo '<style type="text/css">
    body {
        background: url(http://localhost/wordpress-themas/wp-content/uploads/2023/08/fondo-login.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    h1 a { 
        background-image:url(http://localhost/wordpress-themas/wp-content/uploads/2023/08/pizza1.png) !important;
        background-size:200px !important;
        width: auto !important;
        height: 102px !important;
    }
        </style>';
}

function my_script_personal(){

   echo "
       <html>
         <head>
           <link rel='stylesheet' href='estilo.css'>
         </head> 
         <body>
            <div class='modal-container'>
              <div class='modal'>
                <h1>hola</h1>
              </div>
            </div>   
         </body>
       </html>   
         
      <script>
         let mundo = 'wordl';
         alert('Hola Prueba mundo');
      </script>
   
   
   ";


}


add_action('wp_footer', 'my_script_personal');
add_action('login_head', 'my_custom_login_logo');
add_action( 'password_protected_login_head', 'my_custom_login_logo');



   
