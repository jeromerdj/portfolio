<?php /* Template Name: Projects Template */ get_header(); ?>

<section id="fullpage" class="projets container-fluid">
        <?php

            $projets = get_posts( array(
            'posts_per_page' => -1,
            'post_type' => 'projets',
            'post_status' => 'publish',
            'orderby' => 'post_date',
            'order' => 'DESC'
            ));

            foreach( $projets as $projet) {
                echo '<div class="row section all-projets">';
                    echo '<div class="col-lg-6 h-100">';
                        echo '<div class="row align-items-center h-100">';
                            echo '<div class="col-lg-4 visuel">';
                                echo  '<a href="'.get_the_permalink($projet->ID).'" >'.get_the_post_thumbnail($projet->ID).'</a>';
                            echo '</div>';
                            echo '<div class="col-lg-2 ensemble-infos-projet">';
                                echo '<h2><a href="'.get_the_permalink($projet->ID).'">'.get_the_title($projet->ID).'</h2></a>';
                                echo '<hr class="text-left">';
                                echo '<p class="description">'.get_field('description-projet' , $projet->ID).'</p>';
                                echo '<p class="type"> Type : <strong>'.get_field('type-projet' , $projet->ID).'</strong></p>';
                                echo '<p class="date"> Année : <strong> '.get_field('date-projet' , $projet->ID).'</strong> </p>';
                                echo '<a href="'.get_the_permalink($projet->ID).'"  class="bounce">Voir le projet</a>';
                            echo '</div>';
                        echo '</div>';
                        echo '<a href="#" class="scroll-icon"></a>';
                    echo '</div>';
                echo '</div>';
            }
         ?>
         <div class="info-contact items">
             <a href="<?php echo get_the_permalink(14);?>"><span data-hover="Contact"><?php echo get_the_title(14); ?></span></a>
         </div>
</section>


<?php get_footer(); ?>
