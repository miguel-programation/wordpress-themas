<?php
/*
 * Plugin Name:       Mi plugin Javascript
 * Plugin URI:        https://olamfx.com/public/
 * Description:       Este es un plugin Javascript.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Miguel Sanchez fulltimeforce
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 */

 function your_function() {
   echo 'This is inserted at the bottom';
}
add_action( 'wp_footer', 'your_function');



/*add_action('wp_footer', function (){?>

<script>
   alert('hola prueba');
</script>

<?php } , 9999); ?> */