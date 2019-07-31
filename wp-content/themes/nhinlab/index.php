<?php get_header(); ?>
  <main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section section-lg section-shaped pb-250">

<!-- Circles background -->
<div class="shape shape-style-1 shape-default alpha-3">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>
<!-- SVG separator -->
<div class="separator separator-bottom separator-skew">
<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
<polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
</svg>
</div>

        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-8">
			    <?php
			        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content', get_post_format() );
			        endwhile; endif;
			    ?>
              </div>
              <div class="col-lg-4">
		        <?php get_sidebar(); ?>
              </div>
            </div>
          </div>
        </div>
        </section>
    </div>
  </main>
<?php get_footer(); ?>
