<!--
Template Name: Luthum
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_field('nom_entreprise', 'option'); ?></title>
    <meta name="robots" content="noindex, nofollow">

    <!-- WP -->
    <?php wp_head() ?>

</head>

<body id="top">

<div class="header-info">
    
  <div class="container-fluid">
    
    <div class="row">
      
      <div class="col text-center">
        
        <p><i class="fas fa-map-marker-alt"></i><?php the_field('email', 'option'); ?><span> | </span> <i class="fas fa-phone-alt"></i><?php the_field('telephone', 'option'); ?></p>

      </div>

    </div>

  </div>

</div>

<?php $image = get_field('background-image');  ?>
<?php $logo = get_field('logo', 'option'); ?> 

<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url(<?php echo $image; ?>);"> 
  <div class="wrapper row1 ">
    <header id="header" class="hoc clear"> 

      <div id="logo" class="fl_left">
        <img src="<?php echo $logo; ?>" class="img-fluid">
      </div>

      <nav id="mainav" class="fl_right">
      <div class="clear"></div>
        <?php wp_nav_menu([
            'theme_location' => 'header', 
            'container' => false
            ]); 
        ?>
    
      </nav>
    </header>

  </div>
  <!-- FIN HEADER -->

  <!-- MAIN-->
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h1 class="heading"><?php the_field('nom_entreprise', 'option'); ?></h1>
      <p>IMPOSSIBLE veut simplement dire que vous n’avez pas encore trouvé la solution</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="<?php the_permalink(28); ?>">projet</a></li>
          <li><a class="btn inverse" href="<?php the_permalink(32); ?>">Contact</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>
<!-- End Top Background Image Wrapper -->

<!-- Projet Fini-->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="btmspace-50 center">
      <h2 class="orange">Projet fini</h2>
      <p>Les derniers projet fini de l'entreprise</p>
    </div>
    
    <ul class="row list-style-none text-center projet-accueil">

    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'title',
      );
      $my_query = new WP_Query($args);
      if($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
    ?>

      <li class="col-md-4">
        <article class="excerpt">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <div class="excerpttxt">
            <h6 class="heading font-x1"><?php the_title(); ?></h6>
            <ul class="nospace inline pushright font-xs">
              <li><i class="fas fa-calendar"></i> <?php the_time('d/m/Y'); ?></li>
            </ul>
            <?php echo get_field('description_accueil'); ?>
            <p><a href="<?php the_permalink(); ?>" class="btn-projet btn text-uppercase">Voir plus</a></p>
          </div>
        </article>
      </li>

    <?php
    endwhile;
    endif; 
    wp_reset_postdata();
    ?>
      
    </ul>

  </section>
</div>
<!-- Projet fin-->

<!-- Citation-->
<div class="wrapper bgded overlay" style="background-image:url('<?php echo get_field('fond_citation'); ?>');">
  <article class="hoc container"> 
    <div class="group btmspace-30">
      <div class="fl_left" style="margin-right:20px;"><img src="<?php echo get_field('image_dauteur'); ?>" alt="" style="height: 60px; width:auto"></div>
      <div class="fl_left">
        <h3 class="heading"><?php echo get_field('citation_connu_auteur'); ?></h3>
      </div>
    </div>
    <blockquote><?php echo get_field('citation_connu'); ?></blockquote>
    <em class="block btmspace-50 font-xs"><?php echo get_field('livre_dou_elle_sort'); ?></em>
  </article>
</div>
<!-- Fin citation-->


<!-- Newsletters-->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <h3 class="ml-5">Newsletters</h3>
    <div class="three_quarter first">
      <input type="email" class="newsletters" placeholder="Exemple@exemple.fr"></input>
    </div>
    <button class="one_quarter btn p-2" href="#">M'INSCRIRE</button>
    
  </section>
</div>
<!-- Fin newsletters-->

<?php get_footer(); ?>