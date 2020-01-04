<?php
/**
 * The template for displaying the footer
 */

?>
	<footer class="footer mt-4">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm-12 col-lg-5">
          <h4 class="footer-header">Our Mission</h4>
          <img src="" alt="" class="footer-image mb-3">
					<?php dynamic_sidebar( 'footer-image' ); ?>
          <p class="text-white text-justify pt-3 pr-5">Nordic Furniture today is one of the most respected and
            admired home furnishings companies in the world.<br>Our dining, bedroom, home entertainment, home office and accent furniture
            is distinguished by beautiful quality craftsmanship and functional features to make your
            life easier.</p>
        </div>
        <div class="col-sm-6 col-lg-2">
          <h4 class="footer-header">Quick Links</h4>
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'footer-menu1',
						'depth'             => 0,
						'container'         => '',
						'menu_class'        => 'nav flex-column font-weight-bold  text-dark',
					 ) );
					?>
        </div>
        <div class="col-sm-6 col-lg-2">
          <h4 class="footer-header">Company</h4>
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'footer-menu2',
						'depth'             => 0,
						'container'         => '',
						'menu_class'        => 'nav flex-column font-weight-bold  text-dark',
					 ) );
					?>
        </div>
        <div class="col-sm-12 col-lg-3">
          <h4 class="footer-header">Contact Us</h4>
          <ul class="nav">
            <li class="nav-item  text-dark">
              <a class="nav-link" href="#">
                <div class="d-flex flex-row">
                  <div>
                    <i class="fas fa-location-arrow fa-lg  footer-icon"></i>
                  </div>
                  <div>
                    <span class="text-capitalize"> 233, Main Street, Kiev, Ukraine</span>
                    <span class="text-capitalize"> 233, Main Street, Dnipro, Ukraine</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="nav-item  text-dark">
              <a class="nav-link" href="#">
                <div class="d-flex flex-row">
                  <div>
                    <i class="fas fa-phone fa-lg  footer-icon"></i>
                  </div>
                  <div>
                    <span class="text-lowercase"> +044 456 4567 </span> <br>
                    <span class="text-lowercase"> +098 456 8342 </span>
                  </div>
                </div>
              </a>
            </li>
            <li class="nav-item  text-dark">
              <a class="nav-link" href="#">
                <div class="d-flex flex-row">
                  <div>
                    <i class="far fa-envelope fa-lg footer-icon"></i>
                  </div>
                  <div>
                    <span class="text-lowercase"> www.nordic.com</span><br>
                    <span class="text-lowercase"> www.nordic-furniture.com</span>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
