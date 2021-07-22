<?php $logo = get_field('logo', 'option'); ?> 

<!-- FOOTER -->
<div class="bgded overlay" style="background-image:url('<?php echo get_field('fond_footer', 'option') ?>');"> 
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear"> 
    
            <div class="one_third first">
                <img src="<?php echo $logo; ?>" class="img-fluid mb-3" style="height:100px">
                <h6 class="title"><?php the_field('nom_entreprise', 'option'); ?></h6>
                <p><?php echo get_field( 'description_entreprise', 'option' ) ?></p>
            </div>
    
            <div class="one_third">
                <h6 class="title orange">Coordonnées</h6>
                <ul class="nospace linklist contact">
                    <li><i class="fas fa-map-marker-alt"></i>
                    <address>
                    <?php the_field('adresse', 'option'); ?> | <br/>
                    <?php the_field('ville', 'option'); ?>
                    </address>
                    </li>
                    <li><i class="fas fa-phone"></i><?php the_field('telephone', 'option'); ?></li>
                    <li><i class="fas fa-fax"></i><?php the_field('fax', 'option'); ?></li>
                    <li><i class="fas fa-envelope"></i><?php the_field('email', 'option'); ?></li>
                </ul>
            </div>
    
            <div class="one_third">
                <h6 class="title">Plan du site</h6>
                <?php wp_nav_menu([
                    'theme_location' => 'footer', 
                    'container' => false,
                    'menu_class' =>"orange nospace linklist",
                    ]); ?>
            </div>
        </footer>
    </div>
    
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear"> 
            <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
            <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        </div>
    </div>
</div>
<!-- End Footer Background Image Wrapper -->

<!-- Fleche Remonter-->
<a id="backtotop" href="#top"><i class="fas fa-angle-double-up"></i></a>

<!-- WP -->
<?php wp_footer() ?>