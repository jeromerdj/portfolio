<?php /* Template Name: Contact Template */ get_header(); ?>

<section id="contact" class="container-fluid">
    <div class="row d-flex align-items-center h-100">
        <div class="col-lg-2 mx-auto">
             <h1 class="text-center"><?php the_title();?></h1>
             <p class="text-center message-gentil">Si vous êtes arrivé jusqu'ici, c'est l'occasion de me laisser un <strong>gentil&nbsp;message</strong> via ce formulaire. Je vous répondrai avec plaisir.</p>
            <?php echo do_shortcode('[contact-form-7 id="76" title="Contact"]'); ?>
        </div>
    </div>
</section>



<?php get_footer(); ?>
