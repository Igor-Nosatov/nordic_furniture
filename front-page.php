<?php
/**
 * Template name:Front page
 *
 */
get_header();
?>


<section class="banner">
  <div class="row">
    <div class="col-12 col-sm-12 col-lg-5 banner__part-one">
      <img src="<?php the_field('banner_header'); ?>" alt="banner-image" class="img-fluid w-100">
    </div>
    <div class="col-12 col-sm-12 col-lg-7 banner__part-two">
      <h4 class="banner__sub-header ">Shop is fun</h4>
      <h1 class="banner__header">BROWSE OUR <br> PREMIUM PRODUCT</h1>
      <p class="banner__text">Us which over of signs divide dominion deep fill bring they're meat
        beho<br>upon own earth without morning over third.
        Their male dry. They are great<br> appear whose land fly grass.</p>
        <p class="banner__text">
        <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"><button class="shop-button">Buy Now</button></a>
        </p>
    </div>
  </div>
</section>
<section class="trending-products">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <small class="trending-products__sub-header">Popular Item in the market</small>
        <h2 class="trending-products__header">Trending <span class="blue-line">Product</span></h2>
      </div>
    </div>
<?php echo do_shortcode('[products limit="3" ]'); ?>
  </div>
</section>
<section class="shop-offer mt-3" style="background-image: url('<?php the_field('banner_header1'); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-4">
        <h2 class="shop-offer__header">Up To 50% Off</h2>
        <h4 class="shop-offer__sub-header">Winter Sale</h4>
        <p class="text-center">Him she'd let them sixth saw light</p>
      <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>"><button class="shop-button margin-left-105">Shop Now</button></a>
      </div>
    </div>
  </div>
</section>
<section class="best-sellers">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="best-sellers__header mt-5">Best <span class="blue-line">Features</span></h2>
        <small>Popular Item in the market</small>
      </div>
    </div>
  <?php echo do_shortcode('[featured_products limit="3"]'); ?>
  </div>
</section>
<section class="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <h2 class="latest-news__header">Latest <span class="blue-line">News</span></h2>
        <small>Popular Item in the market</small>
      </div>
    </div>
    <div class="row">
  <?php
  global $post;
  $args = array( 'posts_per_page' => 4);
  $myposts = get_posts( $args );
  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      <div class="col-lg-3 col-sm-12">
        <div class="blog-image mt-2">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="blog-title p-2 text-center ">
          <a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="blog-short-description p-2 text-justify">
          <?php the_excerpt(); ?>
        </div>
      </div>
  <?php endforeach;
  wp_reset_postdata();?>

    </div>
  </div>
</section>

<?php
get_footer();
