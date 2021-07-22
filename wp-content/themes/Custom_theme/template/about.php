<!--
Template Name: About
Author: Steve
-->

<?php get_header(); ?>


<main class="main ml-3 mr-2">


    <section class="">
        <div class="container">
            <div class="row">
                <div class="about-intro m-2">
                    <div class="first one_third align-middle">
                        <img src="<?= get_field('siege_entreprise') ?>" class="img-responsive img_about" alt="Image">
                    </div>
                    <div class="two_third">

                    <?php
                    if( have_rows('a_propos_about') ):
                        while ( have_rows('a_propos_about') ) : the_row(); ?>
                            <h2 class="text-uppercase orange mt-3"><?= the_sub_field('titre'); ?></h2>
                        <?= the_sub_field('description'); ?>
                        <div class="clearfix mgb20"></div>
                        <?php endwhile;
                    else :
                        // no rows found
                    endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>	
    <!-- End Section About Intro -->
    
    <section class="padding padding-bottom-0">
        <div class="container">
            <div class="row">
                <h2 class="title orange text-uppercase ml-1">notre equipe</h2>
                <!-- End Title -->
                <!-- The slideshow -->
                <div class="container">
                    <div class="carousel">

                        <?php
                            $args = array(
                                'post_type' => 'Equipes',
                                'posts_per_page' => -1,
                                'order' => 'DESC',
                                'orderby' => 'title',
                            );
                            $my_query = new WP_Query($args);
                            if($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                        ?>

                        <div class="item">
                            <div class="item-team">
                                <div class="portrait-member">
                                    <img src="<?= get_field('photo_employer');?>" alt="" class="img-fluid" >
                                </div>
                                <div class="member-info text-center hvr-float-shadow">
                                    <h5 class="text-uppercase mb-2"><?php the_title() ?></h5>
                                    <p class="member-job"><?php echo get_field('poste'); ?></p>
                                </div>
                            </div>
                        </div>

                        <?php
                        endwhile;
                        endif; 
                        wp_reset_postdata();
                        ?>

                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Owl Our Team -->

</main>

<?php get_footer(); ?>


<script>
    $(document).ready(function(){
    $('.carousel').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 2,
    dots: true,
    responsive: [
       {
        breakpoint: 950,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
        }
      }
    ]
  });
  });</script>

</body>
</html>