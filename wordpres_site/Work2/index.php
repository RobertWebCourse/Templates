<?php session_start(); ?>
<?php get_header();?>

			<div class="head_main">
				<aside>
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_time.png">Mon - Fri: 10am - 5pm</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_message.png">info@example.com</li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_phone.png">(555) 5678 12340</li>
					</ul>	
				</aside>

				<main class="grid">
					<div class="main-info-block">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rectangle_2_build.png" alt="Build image">

						<!-- If text length over 220 - edit string with JS-->

						<h1>We are Providing Be Business Service</h1>
						<p><?php bloginfo('description'); ?></p>
						<div class="main-buttons">
							<a href="#">Our Services</a>
							<a href="#">Contact Us</a>
						</div>
					</div>
				</main>
			</div>

			<div id="main-partners">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/alisa_part.svg" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/microwave_part.svg" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/natural_part.svg" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/urban_part.svg" alt="">

			</div>

			<!-- Отредактировать с помощью Флексбоксов -->

			<section class="form__user grid">
				<div class="right__main">
					<?php if(!isset($_SESSION['register'])): ?>
						<form>
							<h2 class="top-title" id="comeBack">Get in tuch</h2>
							<input type="text" placeholder="Enter your name" name="name">
							<input type="email" placeholder="Enter your email" name="email">
							<textarea name="message__user" cols="30" rows="8">Message</textarea>
							<input type="submit" value="Send" name="sendEmail">
						</form>
						<p class="errorMsg hideError">This is test message</p>
					<?php endif; ?>
					<?php if(isset($_SESSION['register'])): ?>
						<div class="register_succesfull">
							<div class="register-info">
								<h2>Thank you for registration, <?php print_r($_SESSION['register']['name']) ?></h2>
								<p>Do you want to register one more user? <a href="<?php echo get_template_directory_uri(); ?>/php/logout.php'">Register</a></p>
							</div>
						</div>
						<!-- <p>Succesfull Registration</p> -->
					<?php endif; ?>
				</div>
				<div class="left__main">
					<h2 class="top-title">We are Unique & different</h2>
					<div class="about-business">
						<p><span>About our Business<hr></span></p>
					</div>
					<p><b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit. Voluptate eaque, maxime voluptas magni aliquid pariatur atque, ab a repudiandae ut. Esse temporibus accusamus, suscipit, aut ut praesentium ducimus adipisci reiciendis.</p><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque consequuntur facilis esse est, mollitia fugit, laboriosam quo culpa. Iure, hic voluptas maxime optio iste velit? Atque, cumque! Eveniet, corrupti?</p>
					<div id="stat-block">
						<div class="stat-business">
							<p class="stat-business">2300</p>
							<span>Award</span>
						</div>
						<div class="stat-business">
							<p class="stat-business">10333</p>
							<span>Reviews</span>
						</div>
						<div class="stat-business">
							<p class="stat-business" >105</p>
							<span>Award</span>
						</div>
					</div>
				</div>
			</section>
			
			<!-- Отредактировать с помощью Флексбоксов -->

			<section class="info__how_it_work">
				<div class="content-info">
					<div class="content-info-left">
						<h2 class="top-title">How do we work ...</h2>
						<div class="task-list">
							<div class="tast-list__block">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/task_complete.png" alt="Icon Task Complete">
								<div class="task_list__block-txt">
									<b>All Necessary Data Collection</b><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam velit similique nisi repellat nostrum</p>
								</div>
							</div>
							<div class="tast-list__block">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/graph_analysis.png" alt="Icon Graphic Analysis">
								<div class="task_list__block-txt">
									<b>All Necessary Data Collection</b><p>Illum provident deleniti accusantium, aspernatur ullam a expedita consequatur eos iste.</p>
								</div>
							</div>
							<div class="tast-list__block">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/forma_1.png" alt="Icon Form">
								<div class="task_list__block-txt">
									<b>All Necessary Data Collection</b><p> Illum provident deleniti accusantium, aspernatur ullam a expedita consequatur eos iste.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="content-player">
						<div class="content-pos">
							<a href="#">
								<div class="hover-bg"></div>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/video_img.jpg" alt="Player Video">
								<div class="butt-class">
									<div class="butt-class_1">
										<div class="butt-class_2">
											<div class="butt-class_3">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/music_player_play.png" alt="play video">
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			
			<!-- Отредактировать с помощью Флексбоксов -->

			<section class="about__our_service">
				<div class="about__our_service-content grid">
					<div class="about__top-block">
						<h2 class="top-title">About Our Service</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur illo fugiat voluptatum, optio cupiditate vel quas aut illum placeat labore, eos ipsam perspiciatis voluptatem rem quia! Dolore iusto, delectus expedita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, fugiat! Quo facilis libero quisquam veniam commodi explicabo repudiandae et, impedit ab natus accusamus sunt debitis dolores minus odit nisi iusto.</p>
					</div>
					<div class="about__our_service_blocks">
						<div class="about__our_service_block_info">
							<div class="about__our-service-head">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape_abuout_us.svg" alt="Shape icon" class="svg-f">
								<b>Financial Consulting</b>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta nobis iure enim totam ex! Voluptatum laborum repellat debitis dignissimos quo reiciendis possimus autem delectus. Error commodi tenetur reprehenderit dolorum distinctio.</p>
						</div>
						<div class="about__our_service_block_info">
							<div class="about__our-service-head">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/graph_abuout_us.png" alt="Graphic icon">
								<b>Audit & Assurance</b>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt id asperiores rem unde ad, quae fugiat nisi repellendus delectus incidunt reiciendis consequuntur recusandae quas blanditiis nobis aspernatur, odio labore. Reprehenderit?</p>
						</div>
						<div class="about__our_service_block_info">
							<div class="about__our-service-head">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tasks_about_us.svg" alt="Forma icon" class="svg">
								<b>Business Services</b>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error illo id impedit fugiat? Excepturi et dolore voluptates inventore nisi, ex facere incidunt. Quo maiores ab dignissimos illum obcaecati aliquid dolorem!</p>
						</div>
						<div class="about__our_service_block_info">
							<div class="about__our-service-head">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/stud_abuout_us.png" alt="Tasks icon">
								<b>Training and Couching</b>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui magnam aspernatur magni natus, non optio laboriosam, libero, in fugiat delectus itaque error est quos numquam perspiciatis doloribus voluptates accusamus quaerat.</p>
						</div>
						<div class="about__our_service_block_info">
							<div class="about__our-service-head">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/finance_abuout_us.svg" alt="Training icon" class="svg">
								<b>Investment Planning</b>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt possimus fugiat accusantium nam deleniti distinctio nesciunt voluptatum, id rem, exercitationem ex quibusdam reprehenderit officia excepturi dolorem voluptates cumque incidunt harum.</p>
						</div>
						<div class="about__our_service_block_info">
							<div class="about__our-service-head">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/group_abuout_us.svg" alt="Finance icon" class="svg">
								<b>Marketing Analysis</b>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia ipsam delectus nam corporis sapiente nobis, libero iusto, aliquam quasi ducimus totam ad esse? Id cum repudiandae ratione quos, recusandae, accusantium. </p>
						</div>
					</div>
					<div class="eclipse_bc">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ellipse_about.png">
					</div>
			</section>
				</div>
			
			<!-- Отредактировать с помощью Флексбоксов -->
			<section class="info__port">
				<div class="info__port_blocks grid">
					<div class="info__port_block">
						<h2 class="top-title">1230</h2>
						<b>Project Completed</b>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum perferendis ut temporibus maxime quaerat. </p>
					</div>
					<div class="info__port_block">
						<h2 class="top-title">961</h2>
						<b>Happy Clients</b>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto eum, quaerat ratione quis nisi eveniet suscipit .</p>
					</div>
					<div class="info__port_block">
						<h2 class="top-title">1322</h2>
						<b>3D Modeling</b>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ex a culpa aliquam quis incidunt .</p>
					</div>
					<div class="info__port_block">
						<h2 class="top-title">9650</h2>
						<b>Cup of Tea</b>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus impedit nemo animi rem .</p>
					</div>
				</div>
			</section>

			<section class="info_about_team grid">
				<?php 
					$args = array(
						'numberposts' => 1,
						'post_type' => 'post',
						'supperss_filters' => true,
						'category_name' => 'Team'
					);

					$posts = get_posts($args);

					foreach($posts as $post) { setup_postdata($post);
				?>
						<div class="info__about_team_left">
							<h2 class="top-title"><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">Learn More</a>
						</div>

				<div class="info_about_team_right_block">
					<div class="info__about_team_right">
						<div class="info_team_person">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_field('emp_picture'); ?>">
								<div class="info_about_person">
									<b><?php the_field('emp_name'); ?></b>
									<p><?php the_field('emp_pos'); ?></p>
								</div>
							</a>
						</div>
					</div>
					<div class="info__about_team_right">
						<div class="info_team_person">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_field('emp_picture_2'); ?>">
								<div class="info_about_person">
									<b><?php the_field('emp_name_2'); ?></b>
									<p><?php the_field('emp_pos_2'); ?></p>
								</div>
							</a>
						</div>
					</div>
					<div class="info__about_team_right">
						<div class="info_team_person">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_field('emp_picture_3'); ?>">
								<div class="info_about_person">
									<b><?php the_field('emp_name_3'); ?></b>
									<p><?php the_field('emp_pos_3'); ?></p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<?php
					}
					wp_reset_postdata();
				?>
			</section>
			
			<section class="latest_news">
				<div class="triangle_bc">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/triangle_latest_news.png">
				</div>
				<div class="latest_news_top">
					<div class="latest_news_content grid">
						<div class="latest_news_top_title">
							<h2 class="top-title">Latest News</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt sapiente repellendus velit, asperiores vitae assumenda esse quos modi repellat quia aliquid consequatur impedit quidem, molestiae tempora soluta nisi, accusamus dolore.</p>
						</div>
						
						<!-- Отредактировать с помощью Флексбоксов -->
						
						<div id="blocks_from_latest_news">
							<?php 
								$args = array(
									'numberposts' => 3,
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
						<a href="<?php echo get_page_link( 107 ); ?>" class="learn-more-ln">Learn More</a>
					</div>
				</div>
			</section>


			<section class="our_happy_moments grid">
				<div class="head_hp">
					<h2 class="top-title">Our Happy Moments</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro doloremque libero error hic labore blanditiis </p>
					<a href="#">Learn More</a>
				</div>
				<ul>
					<li><a href="#" data-filter=".all">All</a></li>
					<li><a href="#" data-filter=".business">Business Plan</a></li>
					<li><a href="#" data-filter=".business-development">Business Development</a></li>
					<li><a href="#" data-filter=".marketing">Marketing</a></li>
					<li><a href="#" data-filter=".development">Development</a></li>
				</ul>

				<!-- Auto-position image in gallery if width/hight are logic to pos-->
				<div id="contain-grid">
					<div class="grid-layout">
						<div class="grid-gallery">
							<div class="grid-sizer"></div>
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_happy_moments_1.jpg" class="grid-item grid-item--width2 business all">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_happy_moments_2.jpg" class="grid-item grid-item--width business all">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_happy_moments_3.jpg" class="grid-item grid-item--width3 business-development all">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_happy_moments_6.jpg" class="grid-item grid-item--width3 development all">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_happy_moments_4.jpg" class="grid-item grid-item--width3 marketing all">
						  	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img_happy_moments_5.jpg" class="grid-item grid-item--width3 marketing all">
						  	<?php
						  		require_once('php/bd.php');
						  		$getImages = "SELECT * FROM rob_hack_image";
						  		$getImages = $pdo -> prepare($getImages);
						  		$getImages -> execute();

						  		while ($row = $getImages -> fetch(PDO:: FETCH_ASSOC)) {
						  			echo "<img src = '{$row['image_dir']}{$row['image_name']}' style = 'width:{$row['size']}%' class = 'all grid-item {$row['category']}'>";
						  		}
						  	?>
					   </div>
					</div>
					<!-- A shortcode can be inserted here "[FinalTilesGallery id='1']"  -->
				</div>

				<!-- Сделать автодобавление через PHP изображения + Сделать коррекцию размеров изображения для корректного отображения -->

			</section>
			<aside class="map_coord">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31255.578383322973!2d25.336479395085448!3d54.39081781811645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dddad79f283f13%3A0xc5758b54927a6366!2sZavi%C5%A1onys!5e0!3m2!1sru!2slt!4v1597770799105!5m2!1sru!2slt" width="100%" height="405" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</aside>


<?php get_footer(); ?>