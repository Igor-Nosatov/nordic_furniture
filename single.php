<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Nordic
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

<section class="shop-area pt-5 mt-5">
	<div class="container">
		<div class="row no-gutters">
			<div class=" col-sm-12 col-lg-8 pr-3">
		<?php
		while ( have_posts() ) :
			the_post();
      gt_set_post_view();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile; // End of the loop.
		?>
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
</section>

<?php
get_footer();
