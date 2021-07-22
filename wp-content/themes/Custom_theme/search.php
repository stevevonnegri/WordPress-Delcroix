<?php get_header();

$recherche = $_GET['s'];?> 
<div class="mt-5">
    <div class="container">
        <div class="col-md-10">
            <h1>Resultat pour la recherche pour <?= $recherche; ?></h1>
        </div>
        <?php
            if (have_posts() ) :
                while ( have_posts() ) : the_post();
        ?>
        <div class="col-md-10 mt-2 mb-2">
            <h3 class="text-center"><?php the_title() ?></h3>
            <?php the_post_thumbnail() ?>
            <?php the_excerpt() ?>
            <a href="<?php the_permalink() ?>">
                <button class="btn btn-primary mr-xs mb-sm" type="button">En savoir plus</button>
            </a> 
        </div>
        <div>
            <?php endwhile; else : echo 'aucun resultat ne correspond a votre recherhche'; endif; ?>
        </div>
    </div>
</div>
	

<?php get_footer() ?>