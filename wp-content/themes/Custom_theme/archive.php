<!--
Template Name: Projet
Author: Steve
-->

<?php get_header(); ?>

<main class="ml-1">

<!-- End Modal Search-->
<?php $name_taxonomy = get_queried_object()->name;?>

<div id="page">
    <div id="skrollr-body">

        <section id="content" class="padding">
            <div class="container">

            <h2 class="orange text-uppercase mb-4"><?= esc_html($name_taxonomy) ?></h2>

                <div class="row projet-responsive">
                    <div class="col-md-8">
                        <div class="blog-list text-center">


                        <?php
                            $taxonomy =get_terms(['toxonomy' => $name_taxonomy]);
                            if(have_posts()) : while (have_posts()) : the_post();                            
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
                            endif; 
                            wp_reset_postdata();
                            ?>

                        </div>

                    </div> <!-- End Col -->

                    <!-- Widget blog-->
                    <div class="col-md-3">
                        <div class="main-sidebar">

                            <aside class="widget widget_search">
                                <?php echo get_search_form(); ?>
                            </aside>

                            <?= get_sidebar( 'projet'); ?>   
                    
                        </div>
                </div>
            </div>
        </section>
    <!-- End Content -->
    </div>
</div>
</main>

<?php get_footer(); ?>