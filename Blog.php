<?php get_header(); ?>
        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2><?php wp_title(''); ?></h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">Blog</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=============================================
=            Blog With Right Sidebar            =
==============================================-->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <?php 
        
             if( have_posts()){
                 while( have_posts()) :  the_post(); ?>
                <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                    <div class="blog-post-image">
                        <a href="post-fullwidth.html">
                        <?php the_post_thumbnail(full, array('class' => 'img-responsive'));  ?>
                        
                    </div>
                    <div class="blog-content">
                        <h2 class="blogpost-title">
                        <a href="post-fullwidth.html"><?php the_title(); ?></a>
                        </h2>
                        <div class="blog-meta">
                            <span><?php the_time('d','M','Y'); ?></span>
                            <span>by <a href=""><?php the_author_post_link(); ?></a></span>
                            <?php
                              if(!empty(get_the_tags())){ ?>

                              <span><?php the_tags(''); ?></span>
                              <?php
                              }
                            ?>
                           
                        </div>
                        <p>
                        <?php cExcerpt(50); ?>
                        </p>
                        <a href="<?php the_permanlink(); ?>" class="btn btn-dafault btn-details">Continue Reading</a>
                    </div>

             <?php   
             endwhile;
             };
  
        ?>
                
                
                    
                </article>
            </div>
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar">
                    <div class="search widget">
                        <form action="" method="get" class="searchform" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <i class="ion-search"></i> </button>
                                </span>
                                </div><!-- /input-group -->
                            </form>
                        </div>
                        <div class="author widget">
                            <img class="img-responsive" src="images/author/author-bg.jpg">
                            <div class="author-body text-center">
                                <div class="author-img">
                                    <img src="images/author/author.jpg">
                                </div>
                                <div class="author-bio">
                                    <h3>Jonathon Andrew</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt magnam asperiores consectetur, corporis ullam impedit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="categories widget">
                            <h3 class="widget-head">Categories</h3>
                            <ul>
                                <li>
                                    <a href="">Audio</a> <span class="badge">1</span>
                                </li>
                                <li>
                                    <a href="">Gallery</a> <span class="badge">2</span>
                                </li>
                                <li>
                                    <a href="">Image</a> <span class="badge">4</span>
                                </li>
                                <li>
                                    <a href="">Standard</a> <span class="badge">2</span>
                                </li>
                                <li>
                                    <a href="">Status</a> <span class="badge">3</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="recent-post widget">
                            <h3>Recent Posts</h3>
                            
                            <ul>
                                <li>
                                    <a href="#">Corporate meeting turns into a photoshooting.</a><br>
                                    <time>16 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Statistics,analysis. The key to succes.</a><br>
                                    <time>15 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post without image, only text.</a><br>
                                    <time>14 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post with audio player. Share your creations.</a><br>
                                    <time>14 May, 2015</time>
                                </li>
                                <li>
                                    <a href="#">Blog post with classic Youtbube player.</a><br>
                                    <time>12 May, 2015</time>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</section>    




            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

           
<?php get_footer(); ?>