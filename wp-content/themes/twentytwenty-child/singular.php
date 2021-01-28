<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>

<main id="site-content" role="main">



<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<?php
if (get_field('is_on_sale') == 1) {
    echo '<div class="salec" >Sale</div>';
}
?>
						<?php $ig = get_field('image_gallery');?>

						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="<?php echo $ig['image_1']['url'] ?>" /></div>
						  <div class="tab-pane" id="pic-2"><img src="<?php echo $ig['image_2']['url'] ?>" /></div>
						  <div class="tab-pane" id="pic-3"><img src="<?php echo $ig['image_3']['url'] ?>" /></div>
						  <div class="tab-pane" id="pic-4"><img src="<?php echo $ig['image_4']['url'] ?>" /></div>
						  <div class="tab-pane" id="pic-5"><img src="<?php echo $ig['image_5']['url'] ?>" /></div>
						  <div class="tab-pane" id="pic-5"><img src="<?php echo $ig['image_6']['url'] ?>" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="<?php echo $ig['image_1']['sizes']['thumbnail'] ?>" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="<?php echo $ig['image_2']['sizes']['thumbnail'] ?>" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="<?php echo $ig['image_3']['sizes']['thumbnail'] ?>" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="<?php echo $ig['image_4']['sizes']['thumbnail'] ?>" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="<?php echo $ig['image_5']['sizes']['thumbnail'] ?>" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="<?php echo $ig['image_6']['sizes']['thumbnail'] ?>" /></a></li>
						</ul>

					</div>
					<div class="details col-md-6">
							<?php
if (is_singular()) {
    the_title('<h1 class="entry-title">', '</h1>');
} else {
    the_title('<h2 class="entry-title heading-size-1"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
}
?>

						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
						</div>
						<p class="product-description">
							<?php echo the_content(); ?>

							<?php echo get_field('youtube_video') ?>
						</p>
						<h4 class="price">current price: <span> <?php echo get_field('sale_price'); ?>$</span> <span class="pricebefore"> <?php echo get_field('price'); ?>$</span> </h4>

						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
   	 <div class="row">
        <h2 class="headline headline--small-plus center" >related products</h2>

<?php
$categories = get_the_category();
$slugcat = $categories[0]->slug;
if ($slugcat) {

    $args = [
        'post_type' => 'Products',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'terms' => $slugcat,
                'field' => 'slug',
                'include_children' => true,
                'operator' => 'IN',
            ),
        ),
        // Rest of your arguments
    ];

    $myposts = get_posts($args);
    foreach ($myposts as $post): setup_postdata($post);?>
					<?php
    get_template_part('item');
        ?>
				<?php endforeach;
    wp_reset_postdata();?>


			</div>
		</div>
		<?php
}

?>






</main><!-- #site-content -->


<?php get_footer();?>
