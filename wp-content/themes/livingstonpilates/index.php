<?php get_header(); ?>

    <!-- Header -->
    <header>

        <div class="container">
          <div class="intro-text">
            <div class="intro-heading">Livingston Pilates</div>
            <div class="intro-lead-in">Subtitle here</div>
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
            <h4 class="service-heading">Studio Hours</h4>
            <p class="text-main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
              <a href="#" class="btn btn-services">Something here...</a>
          </div>
          <div class="col-md-4 service-block">
            <span class="fa-stack fa-4x">
              <a href="#">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-child fa-stack-1x fa-inverse"></i>
              </a>
            </span>
            <h4 class="service-heading">Our Classes</h4>
            <p class="text-main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            <a href="#" class="btn btn-services">Something here...</a>
          </div>
          <div class="col-md-4 service-block">
            <span class="fa-stack fa-4x">
              <a href="#">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
              </a>
            </span>
            <h4 class="service-heading">Meet Vanessa</h4>
            <p class="text-main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            <a href="#" class="btn btn-services">Something here...</a>
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
        <p class="text-main">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
    
  </main>

<?php get_footer(); ?>

