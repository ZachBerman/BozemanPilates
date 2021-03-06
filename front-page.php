<?php get_header(); ?>

    <!-- Header -->
    <header>

        <div class="container">
          <div class="intro-text">
            <div class="intro-heading"><?= the_field("hero_title"); ?></div>
            <div class="intro-lead-in"><?php bloginfo( 'description' ); ?></div>
            <a href="<?= the_field("hero_button_link"); ?>" class="page-scroll btn btn-xl"><?= the_field("hero_button_text"); ?></a>
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
        <div class="col-sm-12" style="padding-bottom: 20px;">
          <?= do_shortcode("[instagram-feed]"); ?>
        </div>
      </div>

    </section>

<?php get_footer(); ?>

