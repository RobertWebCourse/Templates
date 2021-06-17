<?php get_header(); ?>

	<div class="latests-news grid in-page-news">

		<?php 

		// Template Name: Latest News Page

		$args = array(
			'numberposts' => 6,
			'post_type' => 'post',
			'supperss_filters' => true,
			'category_name' => 'Latest News'
		);

		$posts = get_posts($args);

		foreach($posts as $post) { setup_postdata($post);
			?>
				<div class="block_info_latest_news">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-image');  ?></a>
					<div class="block_info_block">
						<h2 class="top-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
			<?php
		}
		wp_reset_postdata();
		?>
	</div>
<?php get_footer(); ?>