<?php /* Template Name: About Template */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<section id="fullpage" class="about container-fluid">
    <div class="section">
        <div class="row d-flex align-items-center h-100">
            <div class="col-lg-4 mx-auto text-center">
                <h1><?php the_title(); ?></h1>
                <div class="row">
                    <div class="col-lg-3">
                        <img src="<?php echo get_field('photo') ?>" alt="Jérôme RADOJCIC - Webdesigner" class="photo">
                    </div>
                    <div class="col-lg-3 description text-left">
                        <p class="hello-world">HELLO WORLD!</p>
                        <?php echo get_field('description-about'); ?>
                        <a href="<?php echo get_field('dl-cv'); ?>" target="_blank">Télécharger le CV &#8250;</a>
                    </div>
                </div>
            </div>
            <div class="info-contact items">
                <a href="<?php echo get_the_permalink(14);?>"><span data-hover="Contact"><?php echo get_the_title(14); ?></span></a>
            </div>
        </div>
        <div class="line-scroll mx-auto">
        </div>
    </div>
    <div class="section competences">
        <div class="row d-flex align-items-center h-100">
            <div class="col-lg-2 mx-auto text-center  wow fadeInUp">
                <h2>Compétences</h2>
                    <div class="skills">
                       <!-- skill -->
                       <div class="skill">
                          <!-- title -->
                          <div class="skill-title">
                             <strong>Web</strong> (HTML5, CSS3, Sass, Javascript, Wordpress, GitHub)
                          </div>
                          <!-- bar -->
                          <div class="skill-bar" data-bar="80"><span></span></div>
                       </div>
                       <!-- #skill -->
                       <!-- skill -->
                       <div class="skill">
                          <!-- title -->
                          <div class="skill-title">
                             <strong>Design</strong> (Photoshop, Illustrator, InDesign, Sketch)
                          </div>
                          <!-- bar -->
                          <div class="skill-bar" data-bar="80"><span></span></div>
                       </div>
                       <!-- #skill -->
                       <!-- skill -->
                       <div class="skill">
                          <!-- title -->
                          <div class="skill-title">
                            <strong> UX, SEO, SEA, Web Marketing</strong>
                          </div>
                          <!-- bar -->
                          <div class="skill-bar" data-bar="60"><span></span></div>
                       </div>
                       <!-- #skill -->
                       <!-- skill -->
                       <div class="skill">
                          <!-- title -->
                          <div class="skill-title">
                            <strong> Vidéo</strong> (After Effects, Premiere Pro)
                          </div>
                          <!-- bar -->
                          <div class="skill-bar" data-bar="50"><span></span></div>
                       </div>
                       <!-- #skill -->
                    </div>
                    <div class="text-center pre-btn-perso">
                        <a style="margin-top:3%;" href="<?php echo get_the_permalink(11);?>" class="bounce">Tous les projets</a>
                    </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php else: ?>

    <!-- article -->
    <article>

        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>


<?php get_footer(); ?>
