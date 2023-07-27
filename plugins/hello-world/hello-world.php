<?php
/**
 * Hello World
 *
 * @package     HelloWorld
 * @author      Siddarthan Sarumathi Pandian
 * @copyright   2023 Siddarthan Sarumathi Pandian
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Hello World
 * Plugin URI:  SomeUri
 * Description: This is a test plugin to be used at WordCamp Bengaluru.
 * Version:     1.0.0
 * Author:      Siddarthan Sarumathi Pandian
 * Author URI:  
 * Text Domain: hello-world
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

function display_current_time() {

    echo "<html>
    <head>
    <title>(Type a title for your page here)</title>
    <script type='text/javascript'> 
    function display_c(){
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct()',refresh)
    }
    
    function display_ct() {
    var x = new Date()
    document.getElementById('ct').innerHTML = x;
    display_c();
     }
    </script>
    </head>
    
    <body onload=display_ct();>
    <div>
        <span id='ct' ></span>
    </div>
    
    </body>
    </html>";
}


function hello_world_admin_menu() {
  add_menu_page(
        'Hello World',// page title
        'Hello World',// menu title
        'manage_options',// capability
        'hello-world',// menu slug
        'display_current_time' // callback function
    );
}
add_action('admin_menu', 'hello_world_admin_menu');
