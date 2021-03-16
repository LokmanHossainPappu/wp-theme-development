<?php global $Timermaster; ?>

<footer id="footer">
       <div class="container">
         <div class="row">
             <div class="col-md-4">
             <?php dynamic_sidebar('footer_one'); ?>
             </div>
             <div class="col-md-4"></div>
             <div class="col-md-4"></div>
          </div>
       </div>
                < class="container">
                    <div class="col-md-8">
                        <p class="copyright"> <?php echo $Timermaster['copy-right'];?> <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br> 
                            Get More 
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                                Free Bootstrap Templates
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                           
                        <?php 
                          
                          $values= $Timermaster['social icon'];
                          if(is_array($values) || is_object($values)){
                              foreach($values as $value){ ?>
                              <li>
                                <a href="<?php echo $value['url']; ?>" class="Facebook">
                                <i class="<?php echo $value['title'];?>"></i>
                            </a>
                        </li>

                            <?php  }
                          }

                            ?>
                                
                           
                        </ul>
                    </div>
                </>
            </footer> <!-- /#footer -->
