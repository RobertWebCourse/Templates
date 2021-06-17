<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta description = "<?php bloginfo('description'); ?>">
	<title><?php bloginfo('name') ?></title>

	<?php wp_head() ?>
</head>
<body>

	<div id="wraper">

		<div class="test-hack-anim-hide">
			<p class="secret-slog hide-secret-span">MOMMY HACKER</p>
			<span class="first-line secret-block-intro-span1 hide-secret-span"></span>
			<span class="second-line secret-block-intro-span2 hide-secret-span"></span>
		</div>
		<div class="modal-block">
			<div class="modal-block-content">
				<span class="modal-ex"></span>
			</div>
		</div>

		<div id="content">

			<header class="grid">
				<div class="header_top_menu">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Peridona_logo.png" alt="Logo Peridona">

					<div id="burger-menu-top">
						<span></span>
					</div>

					<nav>

						<?php wp_nav_menu(array(
							'theme_location' => 'top_menu'
						)); ?>		
					</nav>
				</div>
			</header>