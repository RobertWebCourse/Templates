<?php get_header(); ?>

<div class="latest_new_full_block grid">
	
	<div class="block_info_latest_news full_latest_new">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image');  ?></a>
		<div class="block_info_block">
			<h2 class="top-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_content(); ?></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>