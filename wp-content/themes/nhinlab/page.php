<?php get_header(); ?>

<main class="profile-page">
<section class="section-profile-cover section-shaped my-0">
<!-- Circles background -->
<div class="shape shape-default alpha-3">
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
</section>
<section class="section">
<div class="container">

            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="card card-profile shadow mt--300">
<div class="text-center mt-5">
<h3 class="text-primary text-uppercase"><?php the_title() ?></h3>
</div>
<div class="mt-5 py-5 border-top text-center">
<div class="row justify-content-center">
<div class="col-lg-9">
<p>
    <?php the_content() ?>
</p>
</div>
</div>
</div>
</div>
</div>

            <?php endwhile; endif;
                            ?>


</div>
</section>
</main>
<?php get_footer(); ?>
