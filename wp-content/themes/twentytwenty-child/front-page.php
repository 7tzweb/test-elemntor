<?php get_header(); ?>

  <div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>
    <div class="page-banner__content container center c-white">
      <h1 class="headline headline--large">Test Elementor</h1>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus center">Products</h2>

        <?php
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 6,
            'post_type' => 'Products'
          ));
          
          while($homepageEvents->have_posts()) {
            $homepageEvents->the_post();
          
            ?>


            <div class="col-md-4">
             <div class="ibox">
                <div class="ibox-content product-box">
                    <div class="product-imitation">
                      <img src="<?php echo get_field('main_image')['url']; ?>" />
                    </div>
                    <div class="product-desc">
                        <span class="product-price">
                           <?php echo get_field('sale_price'); ?>$
                        </span>
                        <a href="#" class="product-name"> <?php the_title(); ?></a>

                        <div class="small m-t-xs">
                        <?php  echo wp_trim_words(get_the_content(), 18);?>
                        </div>
                        <div class="m-t text-righ">

                            <a href="<?php the_permalink(); ?>" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
              </div>
          </div>
             
       


          <?php }
        ?>

        <div class="clearfix"></div>
        

      </div>
    </div>
    
    


 
</div>

  <?php get_footer();

?>
