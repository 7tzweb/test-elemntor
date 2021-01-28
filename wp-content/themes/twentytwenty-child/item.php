<div class="col-md-4">
             <div class="ibox">
                <div class="ibox-content product-box">
                    <div class="product-imitation">
                         <?php
if (get_field('is_on_sale') == 1) {
    echo '<div class="salec-hp" >Sale</div>';
}
?>
                      <img src="<?php echo get_field('main_image')['url']; ?>" />
                    </div>
                    <div class="product-desc">
                        <span class="product-price">
                           <?php echo get_field('sale_price'); ?>$
                        </span>
                        <a href="#" class="product-name"> <?php the_title();?></a>

                        <div class="small m-t-xs">
                        <?php
echo the_excerpt() ?>
                        </div>
                        <div class="m-t text-righ">

                            <a href="<?php the_permalink();?>" class="btn btn-md btn-outline btn-primary">More info <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
              </div>
          </div>