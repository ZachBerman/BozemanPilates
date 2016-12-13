<?php get_header(); ?>

    <!-- Header -->
    <header>

        <div class="container">
          <div class="intro-text">
            <div class="intro-heading"><?php bloginfo( 'name' ); ?></div>
            <div class="intro-lead-in"><?php bloginfo( 'description' ); ?></div>
            <a href="#" class="page-scroll btn btn-xl">Class Schedule</a>
          </div>
        </div>

    </header>

    <!-- Services Section -->
    <section id="services">

      <div class="container">
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <a href="#">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
              </a>
            </span>
            <h4 class="service-heading"><?php the_field('left_sub-title'); ?></h4>
            <p class="text-main"><?php the_field('service_left_column'); ?></p>
              <a href=<?php the_field('left_button_link'); ?> class="btn btn-services"><?php the_field('left_button'); ?></a>
          </div>
          <div class="col-md-4 service-block">
            <span class="fa-stack fa-4x">
              <a href="#">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-child fa-stack-1x fa-inverse"></i>
              </a>
            </span>
            <h4 class="service-heading"><?php the_field('center_sub-title'); ?></h4>
            <p class="text-main"><?php the_field('service_center_column'); ?></p>
            <a href=<?php the_field('center_button_link'); ?> class="btn btn-services"><?php the_field('center_button'); ?></a>
          </div>
          <div class="col-md-4 service-block">
            <span class="fa-stack fa-4x">
              <a href="#">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
              </a>
            </span>
            <h4 class="service-heading"><?php the_field('right_sub-title'); ?></h4>
            <p class="text-main"><?php the_field('service_right_column'); ?></p>
            <a href=<?php the_field('right_button_link'); ?> class="btn btn-services"><?php the_field('right_button'); ?></a>
          </div>
        </div>
      </div>

    </section>

    <!-- Mission Section -->
    <section id="mission">

      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Mission Statement</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10 text-center">
        <p class="text-main"><?php
          if (have_posts()) :
              while (have_posts()) :
                    the_post();
                    the_content();
              endwhile;
          endif;
        ?></p>
        </div>
      </div>

    </section>

    <section id="instagram">

      <div class="row">
        <div class="text-center">
          <h2 class="insta-header">Check us out on Instagram!</h2>
        </div>
        <div class = "col-md-3 text-center">
          <img class = "img-responsive center-block" src ="<?= get_template_directory_uri(); ?>/img/pilates-insta-photo.jpg" />
        </div>
        <div class = "col-md-3">
          <img class = "img-responsive center-block" src = "<?= get_template_directory_uri(); ?>/img/pilates-insta-photo.jpg" />
        </div>
        <div class = "col-md-3">
          <img class = "img-responsive center-block" src = "<?= get_template_directory_uri(); ?>/img/pilates-insta-photo.jpg" />
        </div>
        <div class = "col-md-3">
          <img class = "img-responsive center-block" src = "<?= get_template_directory_uri(); ?>/img/pilates-insta-photo.jpg" />
        </div>
      </div>

    </section>

<?php get_footer(); ?>

