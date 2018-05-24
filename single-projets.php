<?php get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<section class="projet container-fluid" >
		<div class="row d-flex align-items-center h-100">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-4 right-visuel" style="z-index:500;">
						<span class="tour-visuel">
							<div class="visuel animated fadeInLeft">
								<?php
									the_post_thumbnail();
								 ?>
							</div>
						</span>
					</div>
					<div class="col-lg-2 ensemble-infos-projet animated fadeInRight d-flex align-items-center">
						<div>
							<?php
								echo '<h1>'.get_the_title().'</h1>';
								echo '<hr class="text-left">';
								echo '<p class="description">'.get_field('description-projet').'</p>';
								echo '<p class="type"> Type : <strong>'.get_field('type-projet').'</strong></p>';
								echo '<p class="date"> Année : <strong> '.get_field('date-projet').'</strong> </p>';
							?>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="scroll-icon"></a>
		</div>
	</section>
	<?php if( get_field('if-infographie') ): ?>
		<section class="infographie"  >
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 mx-auto">
						<div class="wow fadeInUp" data-wow-offset="4">
							<img src="<?php the_field('photo-1'); ?>">
						</div>
					</div>
				</div>
				<?php if( get_field('photo-2') ): ?>
					<div class="row">
						<div class="col-lg-4 mx-auto">
							<div class="wow fadeInUp" data-wow-offset="4">
								<img src="<?php the_field('photo-2'); ?>">
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if( get_field('video') ): ?>
					<div class="row">
						<div class="col-lg-4 mx-auto">
							<div class="wow fadeInUp" data-wow-offset="4">

									<video src="<?php the_field('video'); ?>" controls="controls">

									</video>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>
	<?php if( get_field('maquette') ): ?>
		<section class="maquette text-center" >
			<div class="background-maquette wow fadeInUp" data-wow-offset="1"  style="background-color:<?php the_field('color', $projet->ID); ?>"></div>
			<div class=" container-fluid">
				<div class="row">
					<div class="col-lg-4 mx-auto">
						<div class="wow fadeInUp" data-wow-offset="4">
							<img src="<?php echo get_field('maquette'); ?>">
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<section class="maquette-mobile">
		<?php if( get_field('maquette-mobile-1') ): ?>
			<div class=" container-fluid">
				<div class="row background-mobile"  style="background-color:<?php the_field('color', $projet->ID); ?>">
					<div class="col-lg-4 mx-auto">
						<div class="row mobiles">
							<!-- WEBDESIGN -->
								<div class="col-lg-3 mobile-img mob-1 wow fadeInLeft text-center" >
									<img src="<?php the_field('maquette-mobile-1');?>">
								</div>
								<div class="col-lg-3 mobile-img mob-2 wow fadeInRight text-center" >
									<img src="<?php the_field('maquette-mobile-2');?>">
								</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="info-contact items">
			<a href="<?php echo get_the_permalink(14);?>"><span data-hover="Contact"><?php echo get_the_title(14); ?></span></a>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 mx-auto">
					<div class="next-previous">
						<div class="next"> <?php previous_post_link('%link', 'Projet suivant &#8594;'); ?></div>
						<div class="previous"><?php next_post_link('%link', '&#8592; Projet précédent'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
