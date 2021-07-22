<!--
Template Name: Contact
Author: Steve
-->

<?php get_header(); ?>


<main class="main">
    <div id="skrollr-body">

        <!-- Section form contact -->
        <section class="padding">
            <div class="container">
                <div class="row align-middle about-intro justify-content-around">
                    <div class="col-md-7 mt-4 mb-3 remove_margin">
                        <div class="left-contact  text-center">

                            <h2 class="orange text-uppercase">Nous contacter</h2>
                            
                            <?= do_shortcode( '[contact-form-7 id="6" html_class="contact" title="Formulaire de contact 1"]' ); ?>

                        </div> <!-- End form -->
                        <small><i>* Le nom et le mail sont obligatoire pour nous contacter *</i></small>
                  </div>


                    <div class="col-md-4 text-center mt-4 remove_margin">
                        <div class="cordonnees ">
                            <h2 class="text-uppercase mb-4 orange">Nos cordonnées</h2>
                            <img src="<?= get_field('logo', 'option') ?>" class="img-contact" alt="logo">
                            <p>
                                <p>IMPOSSIBLE veut simplement dire que vous n’avez pas encore trouvé la solution</p>
                                <p><?php the_field('adresse', 'option'); ?></p>
                                <p><?php the_field('ville', 'option'); ?></p>
                                <p><?php the_field('telephone', 'option'); ?></p>
                                <p><?php the_field('email', 'option'); ?></p>
                            </p>
                        </div>
                    </div> <!-- End Info -->
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Google Map -->
        <div class="no-padding ">
            <div id="map-canvas" class="text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d659.8558906089241!2d7.7474857!3d48.5825883!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c852768b1543%3A0x78019322038f8d20!2sCabinet%20d&#39;Architecture%20et%20d&#39;Urbanisme%20Georges%20Heintz%20et%20Associ%C3%A9s!5e0!3m2!1sfr!2sfr!4v1615449463416!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
</main>

<?php get_footer(); ?>