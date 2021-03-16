
<?php

// custom post for latest news section ...

  function custom_post(){
      register_post_type('latest_News', array(
         'labels' => array(
           'menu_name' => 'Latest News Menu',
           'name' => 'Latest News',
           'add_new' => 'Add new',
           'all_items' => 'All latest News',
           'add_new_item' => 'Add New'
         ),
         'public' => true,
         'supports' => array('thumbnail', 'custom-fields','title','editor')
      ));

      // custom post for offer section...

      register_post_type('offer', array(
        'labels' => array(
          'menu_name' => ' Offer Menu',
          'name' => 'offer',
          'add_new' => 'Add New offer',
          'all_items' => 'All offer',
          'add_new_item' => 'Add New offer Item',
          'menu-icon' => 'dashicons-hammer',
        ),
        'public' => true,
        'supports' => array('title'),
      ));
  }
 add_action('init', 'custom_post' );


 ?>