<?php
/**
 * Template name:Contact page
 *
 */
get_header();
?>
<section class="contact-area">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm-12 col-lg-12">
          <div class="mt-5 mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d20309.075323923767!2d30.4721233!3d50.4851493!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1572123255264!5m2!1sru!2sua" width="100%" height="450" frameborder="0"
              style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
      <div class="row no-gutters mb-5 mt-5">
        <div class="col-sm-12 col-lg-3">
          <div class="border">
            <h4 class="footer-header text-dark text-center">Contact Us</h4>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <div class="d-flex flex-row">
                    <div>
                      <i class="fas fa-location-arrow fa-lg  footer-icon"></i>
                    </div>
                    <div>
                      <p class="text-left">123, Main Street, Zaporozhye</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <div class="d-flex flex-row">
                    <div>
                      <i class="fas fa-phone fa-lg  footer-icon"></i>
                    </div>
                    <div>
                      <p class="text-left">+123 456 7890 </p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <div class="d-flex flex-row">
                    <div>
                      <i class="far fa-envelope fa-lg footer-icon"></i>
                    </div>
                    <div>
                      <p class="text-left">www.infoexample.com</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-lg-9">
          <div class="border">
            <?php echo do_shortcode('[contact-form-7 id="146" title="contact-form-nordic"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
 get_footer();
