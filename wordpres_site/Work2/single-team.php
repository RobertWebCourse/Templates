<?php get_header(); ?>
	<section class="info_about_team grid"> 
		<div class="info__about_team_left">
			<h2 class="top-title"><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		</div>
		<div class="info_about_team_right_block">
				<div class="info__about_team_right">
					<div class="info_team_person">
						<img src="<?php the_field('emp_picture'); ?>">
						<div class="info_about_person">
							<b><?php the_field('emp_name'); ?></b>
							<p><?php the_field('emp_pos'); ?></p>
						</div>
					</div>
				</div>
				<div class="info__about_team_right">
					<div class="info_team_person">
						<img src="<?php the_field('emp_picture_2'); ?>">
						<div class="info_about_person">
							<b><?php the_field('emp_name_2'); ?></b>
							<p><?php the_field('emp_pos_2'); ?></p>
						</div>
					</div>
				</div>
				<div class="info__about_team_right">
					<div class="info_team_person">
						<img src="<?php the_field('emp_picture_3'); ?>">
						<div class="info_about_person">
							<b><?php the_field('emp_name_3'); ?></b>
							<p><?php the_field('emp_pos_3'); ?></p>
						</div>
					</div>
				</div>
			</div>
	</section>
<?php get_footer(); ?>