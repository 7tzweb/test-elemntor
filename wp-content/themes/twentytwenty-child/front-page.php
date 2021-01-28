<?php get_header();?>

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
    'post_type' => 'Products',
));

while ($homepageEvents->have_posts()) {
    $homepageEvents->the_post();
    ?>
            <?php
get_template_part('item');
    ?>
          <?php }
?>

        <div class="clearfix"></div>


      </div>
    </div>





</div>

  <?php get_footer();

?>
