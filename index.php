<?php
/* Plugin Name: Om Change Login Design
 * Plugin URI: http://sanditsolution.com/
 * Description: Change Login Design
 * Version: 1.0.08
 * Author:Siddharth Singh
 * Author URI:http://sanditsolution.com/about
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */
 

include_once dirname( __FILE__ ) . '/including_js_css.php';  
  
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo plugins_url( 'images/logo.png', __FILE__); ?>);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Please enter your Username and Password.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>
