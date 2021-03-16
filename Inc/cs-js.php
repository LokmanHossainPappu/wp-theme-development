<?php 

// wp enqueqe file 

function cs_js(){
    //    css file

      wp_enqueue_style('bootstrap', get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.css');
      wp_enqueue_style('ionicons', get_template_directory_uri().'/plugins/ionicons/ionicons.min.css'); 
      wp_enqueue_style('slider', get_template_directory_uri().'/plugins/slider/slider.css');
      wp_enqueue_style('animate-css', get_template_directory_uri().'/plugins/animate-css/animate.css');
      wp_enqueue_style('owl-carousel', get_template_directory_uri().'/plugins/owl-carousel/owl.carousel.css');
      wp_enqueue_style('owl-carousel-theme', get_template_directory_uri().'/plugins/owl-carousel/owl.theme.css');
      wp_enqueue_style('fancycbox', get_template_directory_uri().'/plugins/facncybox/jquery.fancybox.css');
      wp_enqueue_style('main-css', get_template_directory_uri().'/css/style.css');
      wp_enqueue_style('css', get_stylesheet_uri());

    //   js file
    

     wp_enqueue_script('jquery');
     wp_enqueue_script('from-jq', get_template_directory_uri().'/plugins/form-validation/jquery.form.js', 'jquery','v1.o', true);
     wp_enqueue_script('from-val', get_template_directory_uri().'/plugins/form-validation/jquery.validate.min.js', 'jquery','v1.o', true);
     wp_enqueue_script('owl-carousel', get_template_directory_uri().'/plugins/owl-carousel/owl.carousel.min.js', 'jquery','v1.o', true);
     wp_enqueue_script('bootstrap', get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.js', 'jquery','v1.o', true);
     wp_enqueue_script('wow-js', get_template_directory_uri().'/plugins/wow-js/wow.min.js', 'jquery','v1.o', true);
     wp_enqueue_script('slider', get_template_directory_uri().'/plugins/slider/slider.js', 'jquery','v1.o', true);
     wp_enqueue_script('facncybox', get_template_directory_uri().'/plugins/facncybox/jquery.fancybox.js', 'jquery','v1.o', true);
     wp_enqueue_script('main', get_template_directory_uri().'js/main.js', 'jquery','v1.o', true);

   }
   add_action('wp_enqueue_scripts', 'cs_js');

   ?>