			<footer>
				<div class="desc_footer grid">
					<nav>
						<div class="desc-footer-info desc-info">
							<h2 class="footer-h-title"><?php bloginfo('name') ?></h2>
							<p><?php bloginfo('description'); ?></p>
							<div class="icons-footer">
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_f.svg" alt="Icon Facebook"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_t.svg" alt="Icon Twitter"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_i.png" alt="Icon Instagram"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_s.svg" alt="Icon Skype"></a>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_p.svg" alt="Icon P"></a>
							</div>
						</div>
						<div class="desc-footer-info">
							<h2 class="footer-h-title">Resources</h2>
							<?php wp_nav_menu(array(
								'theme_location' => 'bottom_menu_res'
							)); ?>
						</div>
						<div class="desc-footer-info">
							<h2 class="footer-h-title">Links</h2>
							<?php wp_nav_menu(array(
								'theme_location' => 'bottom_menu_links'
							)); ?>
						</div>
						<div class="desc-footer-info desc-f-form">
							<h2 class="footer-h-title">Subscription</h2>
							<?php if(!isset($_SESSION['subscribe'])): ?>
								<p>Subscribe us to get latest update</p>
								<input type="email" placeholder="Email" name="emailFooter" class="errorMsg">
								<input type="submit" value="Subscribe">
								<p class="errorMsgFooter hideError">This is test message</p>
							<?php endif; ?>
							<?php if(isset($_SESSION['subscribe'])): ?>
								<p class="subscribe_info">Thank you for subscribe!</p>
								<p>Did not get the email? <a href="<?php echo get_template_directory_uri(); ?>/php/resend.php" class="resFooter">Resend</a></p>
							<?php endif; ?>
						</div>
					</nav>
				</div>
				<div id="footer_copy">
					<p>Copyright <?php the_date('Y'); ?> - <?php bloginfo('name') ?> | All rights Reserved</p>
				</div>
			</footer>
		</div>
	</div>

<div class="achievment-hide">
	<p>HACKER</p>
	<span>Now you have permission to add images</span>
</div>
</body>

<?php wp_footer(); ?>

</html>
