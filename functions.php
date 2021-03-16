<?php
      function theme_support(){
          add_theme_support('title-tag');
          add_theme_support('post-thumbnails');
          add_image_size('custom-thumb', 305, 255, false );
          
      }
    add_action('after_setup_theme', 'theme_support');



 // register appearnce menu for dynamic menu bar

   register_nav_menus(array(
     'primary_menu' => 'primary menu'
   ));

   


//include file for custom post

   include_once('Inc/custom-post.php');

//include file for wp_enqueqe css & js 
    include_once('Inc/cs-js.php');

    include_once('Inc/Widgets.php');

//cmb2 require file

     require_once('Inc/cmb2-custom-fields.php');

//redux framework require file

     require_once('Inc/redux-framework/redux-framework.php');
    require_once('Inc/timermaster_theme_option.php');


   


?>
