<?php /* Template Name: Home Template */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<a href="https://www.netflix.com/fr/title/80192098" target="_blank"><div class="tableau"></div></a>
<a href="https://www.youtube.com/watch?v=FmUDe7P0fzg" target="_blank"><div class="musique"></div></a>
<a href="https://www.starbucks.fr/" target="_blank"><div class="cafe"></div></a>
<a href="https://www.guerrilla-games.com/play/horizon" target="_blank"><div class="game"></div></a>

<section id="fullpage" class="home container-fluid">
    <div class="section total-home">
        <div class="row d-flex align-items-center h-100">
            <div class="presentation col-lg-2 mx-auto text-center">
                <h1>Jérôme Radojcic</h1>
                <h2>Webdesigner - Intégrateur</h2>
                <div id="bodymovin"></div>
                <p class="description padding-perso"> <span class="helloworld">HELLO WORLD!</span><br>  <?php echo get_field('description'); ?></p>
            </div>
            <div class="infos-gauche d-flex justify-content-around">
                <div class="">Webdesigner</div>
                <div class="">Strasbourg | France</div>
                <div class=""></div>
            </div>
            <div class="info-contact items">
                <a href="<?php echo get_the_permalink(14);?>"><span data-hover="Contact"><?php echo get_the_title(14); ?></span></a>
            </div>
            <div class="line-scroll mx-auto wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
            </div>
        </div>
    </div>
    <div class="section projets-home">
        <div class="row d-flex align-items-center h-100">
            <div class="col-lg-4 mx-auto wow fadeInUp">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <?php echo '<h3>'.get_the_title(11).'</h3>'; ?>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                        <?php

                            $projets = get_posts( array(
                            'posts_per_page' => 2,
                            'post_type' => 'projets',
                            'post_status' => 'publish',
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                            ));

                            foreach( $projets as $projet) {
                            echo '<div class="col-lg-3 padding-perso text-center projet-solo">';
                            echo '<h4><a href="'.get_the_permalink($projet->ID).'">'.get_the_title($projet->ID).'</a></h4>';
                            echo '<a href="'.get_the_permalink($projet->ID).'" class="miniature-projet">'.get_the_post_thumbnail($projet->ID).'</a>';

                            echo '<p>'.get_the_excerpt( $projet->ID).'</p>';
                            echo '<strong class="semi-bold"><a href="'.get_the_permalink($projet->ID).'">Voir le projet &#8250;</a></strong>';
                            echo '</div>';
                            }
                         ?>
                </div>
                <div class="row">
                    <div class="col-lg-6 text-center pre-btn-perso">
                        <a href="<?php echo get_the_permalink(11);?>" class="bounce">Tous les projets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section presentation-home wow fadeInUp">
        <div class="row d-flex align-items-center h-100">
            <div class="col-lg-4 mx-auto text-center">
                <h3><?php echo get_the_title(9); ?></h3>
                <div class="row img-txt">
                    <div class="col-lg-3">
                        <img src="<?php echo get_field('photo', 9); ?>" alt="Jérôme RADOJCIC - Webdesigner" class="photo">
                    </div>
                    <div class="col-lg-3 description text-left">
                        <p>
                            <?php
                                $id = 9;
                                $included_page = get_page( $id );
                                $content = apply_filters('the_content', $included_page->post_content);
                                echo $content;
                            ?>
                        </p>
                        <a href="<?php echo get_the_permalink(9); ?>" class="bounce">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php else: ?>

    <!-- article -->
    <article>
        <h2><?php _e( 'Sorry, nothing to display.', 'portfolio' ); ?></h2>
    </article>
    <!-- /article -->

<?php endif; ?>

<script type="text/javascript">
// ANIMATION SVG
var anim;
var animData = {
    container: document.getElementById('bodymovin'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    autoloadSegments: true,
    rendererSettings: {
        progressiveLoad:false
    },
    path: '<?php echo get_template_directory_uri(); ?>/js/data.json'
};
anim = bodymovin.loadAnimation(animData);
</script>

<?php get_footer(); ?>
