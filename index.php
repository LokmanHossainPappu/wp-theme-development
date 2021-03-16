<?php get_header(); ?>
 <?php global $Timermaster; ?>
<?php 

$slider_title = get_post_meta(get_the_ID(), 'Slider_title', true);
$slider_item = get_post_meta(get_the_ID(), 'Slider_Item', true);
$slider_description = get_post_meta(get_the_ID(), 'Slider_description', true);
$slider_btn = get_post_meta(get_the_ID(), 'Slider_btn', true);


?>
<!--
==================================================
Slider Section Start
================================================== -->
<section id="hero-area" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/slider.jpg');" >
>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span><?php echo $slider_title ?> </span><br>
                    <span class="cd-words-wrapper">
                        <?php 
                        $x = 0;
                        if(is_array($slider_item)){
                            foreach($slider_item as $single_item){
                                $x++;
                              ?>
                              <b class="<?php if($x == 1) {echo "is-visible";}?>"<?php echo $single_item; ?>> </b>  
                           <?php }
                        }
                        
                        ?>
                   </span>
                    
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                       <?php echo $slider_description ?>
                    </h2>
                    <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works"><?php echo $slider_btn ?></a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                   <?php echo $Timermaster['aboutme_title'] ?>
                    </h2>
                    <p>
                        <?php echo $Timermaster['aboutme_desc']; ?>
                    </p>
                   
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="<?php echo $Timermaster['About_me_image']['url']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->


<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?php echo $Timermaster['work_title']; ?> </h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
               <?php echo $Timermaster['work_subtitle'] ?>
            </p>
        </div>
        
        
        <?php
  
      $query = new WP_Query(array(
            'post_type' => 'post'
      ));
        
             if( $query -> have_posts()){
                 while($query -> have_posts()) : $query -> the_post();
                 
                $more = get_post_meta(get_the_ID(), 'more', true );
                 
                 ?>
               
                   <div class="col-sm-4 col-xs-12">
                   <figure class="wow fadeInLeft animated portfolio-item"   data-wow-duration="500ms" data-wow-delay="0ms">
                       <div class="img-wrapper">
                         
                        <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('custom-thumb',  array('class' => 'img-responsive'));?></a>
                         <div class="overlay">
                             <div class="buttons">
                                 <a rel="gallery" class="fancybox" href="<?php echo get_template_directory_uri(); ?>/images/portfolio/item-1.jpg">Demo</a>
                                 <a target="_blank" href="single-portfolio.html">Details</a>
                             </div>
                         </div>
                     </div>
                     <figcaption>
                     <h4>
                     <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                     </a>
                     </h4> 
                     <p>
                         <?php the_excerpt();?>
                     </p>
                  <a href="<?php the_permalink();?>"><i class="fa fa-arrow-circle-o-right"></i> <?php echo $more ?> </a>   
                     </figcaption>
                 </figure>
             </div>
           <?php  endwhile;
             }
        ?>

         
</section> <!-- #works -->

<!-- latest news section -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?php echo $Timermaster['news_title']; ?></h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                
                <?php echo $Timermaster['news_subtitle']; ?>
            </p>
        </div>
        <div class="row">
        <!-- php code for dynamic contet  -->
        <?php 

     $query = new WP_Query(array(
          'post_type' => 'latest_News',
          'posts_per_page' => -1,
          'order' => 'DSC'

       ));
           if($query -> have_posts()){
               while($query -> have_posts()) : $query -> the_post();

             $post_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');

          $demo = get_post_meta(get_the_ID(), 'demo_label', true);
          $details = get_post_meta(get_the_ID(), 'Detail_label', true);
          $animate = get_post_meta(get_the_ID(), 'animate_class_name', true);
          $delay = get_post_meta(get_the_ID(), 'animate_animate_delay', true);   
              ?>
               <div class="col-sm-4 col-xs-12">
               <figure class="wow <?php echo $animate; ?> animated portfolio-item" data-wow-duration="500ms" data-wow-delay="<?php echo $delay; ?>">
                   <div class="img-wrapper">
                      
                   <?php the_post_thumbnail('custom-post-image',  array('class' => 'img-responsive')); 
                   ?>

                       <div class="overlay">
                           <div class="buttons">
                               <a rel="gallery" class="fancybox" href="<?php echo $post_thumb ?>"> <?php echo $demo; ?></a>
                               <a target="_blank" href="<?php the_permalink(); ?>"><?php echo $details; ?></a>
                           </div>
                       </div>
                   </div>
                   <figcaption>
                   <h4>
                   <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                   </a>
                   </h4>
                   <p>
                      <?php the_excerpt(); ?>
                   </p>
                   </figcaption>
               </figure>
               
           </div>

      <?php
           endwhile;
           }
        ?> 
           
           
    </div>
</section> <!-- #end of latest news section -->

<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?php echo $Timermaster['offer_me_title'] ?></h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                <?php echo $Timermaster['offer_me_subtitle']; ?>
            </p>
        </div>
        <div class="row">

        <?php 
        $query = new WP_Query(array(
            'post_type' => 'offer',
            'posts_per_page' => -1,
            'order' => 'DSC'
        ));
        
        if($query -> have_posts()){
            while($query -> have_posts()) : $query -> the_post(); 
          $ios_icon = get_post_meta(get_the_ID(),'icon_class',true); 
         $desc = get_post_meta(get_the_ID(), 'offer_desc', true);
          ?>
   <div class="col-md-4 col-lg-4 col-xs-12">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="ion-ios-flask-outline"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php the_title(); ?></h4>
                        <p> <?php echo $desc ?> </p>
                    </div>
                </div>
            </div>
      <?php  endwhile;
        }
        ?>
            
            
    </div>
</section> <!-- /#feature -->


            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $Timermaster['contact_me_title'] ?></h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo $Timermaster['contact_me_subtitle']; ?></p>
                                <a href="<?php echo esc_url($Timermaster['contact_me_url']) ?>" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms"><?php echo $Timermaster['contact_me_Btn'] ?></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
           <?php get_footer(); ?>
	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	
    <?php wp_footer(); ?>
 	</body>
</html>