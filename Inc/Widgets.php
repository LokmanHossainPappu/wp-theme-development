<?php 
     function timermaster_sidebar()
     {
         register_sidebar( array(
           'name' => 'Footer one',
           'description' => 'This is footer one sidebar',
           'id'  => 'footer_one',
           'before_title' => '<h4 class="heading">',
           'after_title' => '</h4>'
         ));
     }

     add_action('widgets_init', 'timermaster_sidebar');