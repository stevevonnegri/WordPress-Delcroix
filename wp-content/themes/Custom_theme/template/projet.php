<!--
Template Name: Projet
Author: Steve
-->

<?php get_header(); ?>

<main class="ml-1">

<div class="modal fade modal-search" id="myModal" tabindex="-1" role="dialog"   aria-hidden="true">

    <button type="button" class="close" data-dismiss="modal">×</button>

    <div class="modal-dialog myModal-search">
    <!-- Modal content-->

        <div class="modal-content">                                        

            <div class="modal-body">

                <form role="search" method="get" class="search-form">

                    <input class="search-field" placeholder="Search here..." value="" title="" type="search">

                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>

                </form>

            </div>

        </div>
    
    </div>

</div>
<!-- End Modal Search-->


<div id="page">
    <div id="skrollr-body">

        <section id="content" class="padding">
            <div class="container">

            <h2 class="orange text-uppercase mb-4">Projet fini</h2>

                <div class="row projet-responsive">
                    <div class="col-md-8">
                        <div class="blog-list text-center">


                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'order' => 'DESC',
                                'orderby' => 'title',
                            );
                            $my_query = new WP_Query($args);
                            if($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                            ?>

                            <article class="mb-4">
                                <figure class="projet-img-date">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <div class="projet-date text-uppercase">
                                        <span class="day"><?php the_time('d/'); ?></span>
                                        <span class="month"><?php the_time('M'); ?></span>
                                    </div>
                                    
                                </figure>
                                <div class="latest-blog-post-description">
                                    <a class="orange" href="<?php the_permalink() ?>"><h3><?php the_title(); ?></h3></a>

                                    <?php the_excerpt(); ?>
                                    
                                    <a href="<?php the_permalink() ?>" class="btn-projet btn text-uppercase">Continue ...</a>
                                </div>
                            </article>

                            <?php
                            endwhile;
                            ?>

                            <?= custom_theme_pagination() ?>

                            <?php
                            endif; 
                            wp_reset_postdata();
                            ?>

                        </div>

                    </div> <!-- End Col -->

                    <!-- Widget blog -->
                    <div class="col-md-3">
                        <div class="main-sidebar">
                      
                            <aside class="widget widget_text">
                                <h3 class="widget-title text-cap">About</h3>
                                <div class="tiny-border"></div>                                         
                                <div class="textwidget">
                                    <p>
                                        <?php echo get_field('About_projet'); ?>
                                    </p>                              
                                </div>
                            </aside>

                            <aside class="widget widget_search">
                                <?php echo get_search_form(); ?>
                            </aside>

                            <?= get_sidebar( 'projet'); ?>   
                  
                        </div>
                    </div><!-- End Col -->
                </div>
            </div>
        </section>
    <!-- End Content -->
    </div>
</div>
</main>

<?php get_footer(); ?>