<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_field('nom_entreprise', 'option'); ?> | <?php wp_title() ?></title>

    <!-- WP -->
    <?php wp_head() ?>

</head>

<body id="top">

    <!-- DEBUT HEADER -->

    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <p><i class="fas fa-map-marker-alt"></i><?php the_field('email', 'option'); ?><span> | </span> <i class="fas fa-phone-alt"></i><?php the_field('telephone', 'option'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php $image = get_field('fond_header', 'option');  ?>
    <?php $logo = get_field('logo', 'option'); ?> 

    <!-- Top Background Image Wrapper -->
    <div class="bgded overlay pl-3" style="background-image:url('<?php echo $image ?>');">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">

                <div id="logo" class="fl_left">
                    <img src="<?php echo $logo ?>" class="img-fluid">
                </div>
                <nav id="mainav" class="fl_right">
                    <div class="clear"></div>
                <?php wp_nav_menu([
                    'theme_location' => 'header', 
                    'container' => false
                    ]); ?>
                </nav>

            </header>
            <div id="breadcrumb" class="hoc clear">

                <ul>
                    <li><a href="<?= get_option('home'); ?>">Home</a></li>
                    <li><a href="<?php the_permalink(); ?>"><?php wp_title(); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
        <!-- FIN HEADER -->
