<?php
/**
 * Template name:Blog page
 *
 */
get_header();
?>

<section class="breadcrumbs">
 <div class="row no-gutters">
   <div class="col-sm-12 col-lg-12 d-flex justify-content-center pt-5 pb-5 breadcrumbs__text">
     <?php
do_action( 'woocommerce_before_main_content' );
?>
      </div>
   </div>
 </section>
<section class="category-posts">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-sm-12 col-lg-4">
        <img src="<?php the_field('banner_category1'); ?>" alt="category-post" class="category-post">
        <div class="category-details">
          <h5 class="slide-overlay__header">Social Life</h5>
          <div class="blue-line"></div>
          <p slide-overlay__text>Enjoy your social life together</p>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
        <img src="<?php the_field('banner_category2'); ?>" alt="category-post" class="category-post">
        <div class="category-details">
          <h5 class="slide-overlay__header">Social Life</h5>
          <div class="blue-line"></div>
          <p slide-overlay__text>Enjoy your social life together</p>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
        <img src="<?php the_field('banner_category3'); ?>" alt="category-post" class="category-post">
        <div class="category-details">
          <h5 class="slide-overlay__header">Social Life</h5>
          <div class="blue-line"></div>
          <p slide-overlay__text>Enjoy your social life together</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog-area">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-sm-12 col-lg-8">
        <?php
        global $post;
        $args = array( 'posts_per_page' => 4);
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <article class="row no-gutters mt-4">
            <div class="col-lg-3  col-sm-12">
              <?php
              if(get_the_tag_list()) {
                  echo get_the_tag_list('<div class="d-flex flex-wrap">  <div class="post-tag">','</div>  <div class="post-tag">','</div></div>');
              }
              ?>
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link meta-data"><h3 class="font-weight-bold"><?php the_author(); ?></h3></a>
                </li>
                <li class="nav-item">
                <a class="nav-link meta-data"><?php the_time('F jS, Y'); ?>  <i class="fas fa-calendar-week fa-lg"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link meta-data">
                    <?php comments_number( 'No responses', 'One response', '% responses' ); ?>.
                    <i class="fas fa-comment fa-lg"></i></a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 col-sm-12">
              <div class="thumbnail-post mt-2 pr-3">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="blog-details">
                <a class="text-dark" href="<?php the_permalink(); ?>"><h2 class="blog-details__header"><?php the_title(); ?></h2></a>
                <p class="blog-details__text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>"><button class="blog__button">Read more</button></a>
              </div>
            </div>
          </article>
        <?php endforeach;
        wp_reset_postdata();?>
      </div>
      <div class="col-sm-12 col-lg-4 aside-area">
        <aside class="search-post">
          <form class="form-search-post  pl-5" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
            <div class="col-md-12 mb-3">
              <div class="input-group">
	             <input type="text" placeholder="Search..." required value="<?php echo get_search_query() ?>" name="s" id="s" />
                 <div class="input-group-prepend">
                  <button  type="submit" id="searchsubmit"  class="btn-search"><i class="fas fa-search fa-lg"></i></button>
                </div>
             </div>
           </div>
        </form>
          <div class="border-bottom  mt-5 mb-5"></div>
        </aside>
    
        <aside class="popular-post">
          <h4 class="blog-area__aside-header">Popular Posts</h4>
          <?php
          global $post;
          $args = array( 'posts_per_page' => 4);
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class="d-flex flex-row popular-post-area p-1">
                <div class="popular-post-area__image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="popular-post-area__info ml-2">
                  <a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
              </div>
          <?php endforeach;
          wp_reset_postdata();?>

          <div class="border-bottom mt-5 mb-5"></div>
        </aside>
        <aside class="post-categories">
          <h4 class="blog-area__aside-header">Post Categories</h4>
          <ul class="nav flex-column">
            <?php $categories = get_categories();
               foreach($categories as $category) {
                echo '<li class="nav-item"><a  class="nav-link d-flex justify-content-between post-categories__link text-uppercase font-weight-bold" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                }
            ?>
          </ul>
          <div class="border-bottom mt-5 mb-5"></div>
        </aside>
        <aside class="newsletter-area">
             <div class="p-4">
               <?php echo do_shortcode('[newsletter_form type="minimal"]'); ?>
             </div>
          <div class="border-bottom mt-5 mb-5"></div>
        </aside>
        <aside class="tag-clouds-area">
          <h4 class="blog-area__aside-header">Tag Clouds</h4>
          <div class="d-flex flex-wrap">

    <?php
    $tags = get_tags();
    if ( $tags ) :
        foreach ( $tags as $tag ) : ?>
            <div class="post-tag"><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></div>
        <?php endforeach; ?>
    <?php endif; ?>

          </div>
          <div class="border-bottom  mt-5 mb-5"></div>
        </aside>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
