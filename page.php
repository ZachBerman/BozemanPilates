<?php get_header(); ?>

    <section id="page1">

      <div class="sample1">
        <div class="container">
          <div class="col-sm-12">
            <h2 class="text-center sample-heading"><?php the_field('page_title'); ?></h2>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10">
          <p class="text-main text-center"><?php
          if (have_posts()) :
              while (have_posts()) :
                    the_post();
                    the_content();
              endwhile;
          endif;
        ?>
        </div>
      </div>

    </section>

<?php get_footer(); ?>