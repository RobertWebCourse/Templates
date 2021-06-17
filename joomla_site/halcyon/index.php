<?php defined("_JEXEC") or die();

	$doc = JFactory::getDocument();

	$doc->addStyleSheet($doc->baseurl."/templates/".$doc->template."/css/article.css");
	$doc->addStyleSheet($doc->baseurl."/templates/".$doc->template."/css/style.css");
	$doc->addStyleSheet($doc->baseurl."/templates/".$doc->template."/fonts/font-awesome-4.7.0/css/font-awesome.min.css");

	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/skroll.min.js");
	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/tilt.jquery.min.js");
	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/script.js");
	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/ajax.js");

	if($this->params->get('colorSite')) {

		if($_SESSION['color']['position'] === 'Active') {
			$this->addStyleDeclaration('
				body {
					animation-duration: 0s !important;
				}
			');
		}

		$this->addStyleDeclaration('
			body {
				animation-name: changeColor;
				animation-duration: 1.5s;
				animation-fill-mode: forwards;
				animation-timing-function: ease;
			}

			@keyframes changeColor{
				from {
					background-color: white;
				}
				to {
					background-color:' . $this->params->get('colorSite') . ';
				}
			}
		');
		$_SESSION['color'] = [
			'position' =>'Active',
			'activeColor' => $this->params->get('colorSite')
		];
	} else {
		if(isset($_SESSION['color']['activeColor'])) {
			$this->addStyleDeclaration('
				body {
					animation-name: resetColor;
					animation-duration: 1.5s;
					animation-fill-mode: forwards;
					animation-timing-function: ease;
				}

				@keyframes resetColor {
					from {
						background-color: '. $_SESSION['color']['activeColor'] .';
					}
					to {
						background-color: white;
					}
				}
			');
			$_SESSION['color'] = [
				'position' => 'Deactive'
			];
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="wraper">
		<header>
			<div class="head__pos res">
				<div id="burger__pos">
					<div class="burger">
						<span></span>
					</div>
					<div id="burger__list">

						<jdoc:include type="modules" name="position-0"/>

					</div>
				</div>
				<div id="header__content">
					<div id="head-main">
						<h1>HALCYON<span>DAYS</span></h1>
						<p>An exclusive HTML5/CSS3 freebie by Peter Finlan, for <span>Codrops.</span></p>
						<a href="#">Learn More</a>
					</div>
				</div>
			</div>
		</header>

		<main>

			<jdoc:include type="component"/>

		<!-- Section For Portfolio -->

			<section class="section-portfolio">
				<div class="section-block res">

					<jdoc:include type="modules" name="position-1" style="xhtml"/>

				</div>
			</section>

			<section class="section-motivation">
				<div class="our-motivation res">

					<jdoc:include type="modules" name="position-2" style="xhtml"/>
		
				</div>
			</section>
		</main>

		<section class="section-responsive">
			<div class="res-block">

		

				<!-- Slide -->
				<div class="res-block-info">
					<jdoc:include type="modules" name="position-3" style="xhtml"/>
					<!-- <div class="res-blocks">
						<div class="h-theme-block">
							<h3 class="h-theme">A creative portfolio template</h3>
							<span></span>
						</div>
						<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Eligendi debitis quasi nisi odio enim doloribus .</p>
						<p>Lorem ipsum dolor sit amet consectetur</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, commodi.</p>
					</div>
					<div class="res-blocks">
						<div class="h-theme-block">
							<h3 class="h-theme">Responsive design specialist</h3>
							<span></span>
						</div>
						<p>Lorem ipsum, dolor sit amet consectetur</p>
						<p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur</p>
						<p>Lorem ipsum dolor.</p>
					</div>
					<div class="res-blocks">
						<div class="h-theme-block">
							<h3 class="h-theme">Block Number 3</h3>
							<span></span>
						</div>
						<p>Lorem ipsum, dolor sit</p>
						<p>Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Vel doloribus eveniet ea impedit quis, repellat amet ducimus. Nemo, maiores, facilis.</p>
						<p>Lorem ipsum dolor sit amet.</p>
					</div> -->

					<div class="slide-res">
			 			<label class="radiobutton">
			 				<input type="radio" value="1_slide" checked name="radio_slide">
			 				<span></span>
			 			</label>
			 			<label class="radiobutton">
			 				<input type="radio" value="2_slide" name="radio_slide">
			 				<span></span>
			 			</label>
			 			<label class="radiobutton">
			 				<input type="radio" value="3_slide" name="radio_slide">
			 				<span></span>
			 			</label>
					</div>

				</div>
			</div>
		</section>

		<section class="secton-banner">
			<div class="textContent">
				<h1>I got 99 problems</h1>
				<h3>but <em>design</em>‘ aint one</h3>
				<div class="arrow">
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</div>
			</div>
		</section>

		<section class="section-our-pluses">
			<div class="our-pluses__content res">

				<jdoc:include type="modules" name="position-4" style="xhtml"/>

			    <div class="slide-res">
		 			<label class="radiobutton">
		 				<input type="radio" value="1_slide_pl" checked name="radio_slide_pl">
		 				<span></span>
		 			</label>
		 			<label class="radiobutton">
		 				<input type="radio" value="2_slide_pl" name="radio_slide_pl">
		 				<span></span>
		 			</label>
		 			<label class="radiobutton">
		 				<input type="radio" value="3_slide_pl" name="radio_slide_pl">
		 				<span></span>
		 			</label>
				</div>

			</div>
		</section>

		<article class="article-application">
			<div id="app-content">
				<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/fire.gif" alt="">
				<p>ignite your passion</p>
			</div>
		</article>

		<section class="section-team">
			<div class="team-content res">
				
				<jdoc:include type="modules" name="position-5" style="xhtml"/>

				<!-- <div class="h-theme-block">
					<h3 class="h-theme">We're a team that adore what we do</h3>
					<span></span>
				</div>
				<div class="section-team__slider">
					<div class="section-team__slider-res">
						<div class="section-team__slider-sec-block">
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers.jpg" alt="Team Picture">
								<h3 class="h-slide">Jon Snow</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eveniet, quaerat, voluptatem excepturi in ducimus voluptatibus praesentium accusantium eius magnam quo laudantium distinctio?</p>
								<div class="team-slide__social">
									<div class="social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers_1.jpg" alt="Team Picture">
								<h3 class="h-slide">Cersei Lannister</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Doloribus impedit ipsam eos quod minus harum neque, porro at, minima ad explicabo perferendis delectus dolore laudantium sapiente veritatis voluptatum quasi velit, aspernatur tenetur nulla vero quidem quisquam. Quam, odio pariatur, quidem tempore sed, voluptatibus, alias cum odit quibusdam officiis quia rerum.</p>
								<div class="team-slide__social">
									<div class="social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>



							</div>
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers_2.jpg" alt="Team Picture">
								<h3 class="h-slide">Jamie Lannister</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ducimus dolorum, nostrum aperiam, nulla et numquam amet quisquam illum. Molestias atque ducimus ratione et nemo ab magnam quibusdam harum repudiandae soluta, officiis non expedita maiores, commodi velit iure. Voluptate tempora ad soluta praesentium, officia et provident, esse eos commodi molestiae quaerat corrupti, explicabo eaque repellat veritatis laborum vitae deserunt ratione!</p>
								<div class="team-slide__social">
									<div class="social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section-team__slider-res">
						<div class="section-team__slider-sec-block">
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers.jpg" alt="Team Picture">
								<h3 class="h-slide">Creative minds</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eveniet, quaerat, voluptatem excepturi in ducimus voluptatibus praesentium accusantium eius magnam quo laudantium distinctio?</p>
								<div class="team-slide__social">
									<div class="social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers_1.jpg" alt="Team Picture">
								<h3 class="h-slide">Creative minds</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eveniet, quaerat, voluptatem excepturi in ducimus voluptatibus praesentium accusantium eius magnam quo laudantium distinctio?</p>
								<div class="team-slide__social">
									<div class="social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>



							</div>
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers_2.jpg" alt="Team Picture">
								<h3 class="h-slide">Creative minds</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eveniet, quaerat, voluptatem excepturi in ducimus voluptatibus praesentium accusantium eius magnam quo laudantium distinctio?</p>
								<div class="team-slide__social">
									<div class="social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section-team__slider-res">
						<div class="section-team__slider-sec-block">
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers.jpg" alt="Team Picture">
								<h3 class="h-slide">Creative minds</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eveniet, quaerat, voluptatem excepturi in ducimus voluptatibus praesentium accusantium eius magnam quo laudantium distinctio?</p>
								<div class="team-slide__social">
									<div class="social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>
							</div>
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers_1.jpg" alt="Team Picture">
								<h3 class="h-slide">Creative minds</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eveniet, quaerat, voluptatem excepturi in ducimus voluptatibus praesentium accusantium eius magnam quo laudantium distinctio?</p>
								<div class="team-slide__social">
									<div class="social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>



							</div>
							<div class="team-slide-block">
								<img src="<?php echo $doc->baseurl.'/templates/'.$doc->template?>/images/team_pers_2.jpg" alt="Team Picture">
								<h3 class="h-slide">Creative minds</h3>
								<hr class="dec-line">
								<p class="t-slide">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore eveniet, quaerat, voluptatem excepturi in ducimus voluptatibus praesentium accusantium eius magnam quo laudantium distinctio?</p>
								<div class="team-slide__social social-nav">
									<div class="social-block social-block">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
									<div class="social-block">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<div class="slide-res">
		 			<label class="radiobutton">
		 				<input type="radio" value="1_slide_team" checked name="radio_slide_team">
		 				<span></span>
		 			</label>
		 			<label class="radiobutton">
		 				<input type="radio" value="2_slide_team" name="radio_slide_team">
		 				<span></span>
		 			</label>
		 			<label class="radiobutton">
		 				<input type="radio" value="3_slide_team" name="radio_slide_team">
		 				<span></span>
		 			</label>
				</div>
			</div>
		</section>

		<section class="section-subscribe">
			 <div class="subscribe-content">
			 	<i class="fa fa-paper-plane" aria-hidden="true"></i>
			 	<p>Subscribe to stay in the loop</p>
			 	<form>
			 		<input type="email">
			 		<input type="submit" value="send">
			 		<p class="error"></p>
			 	</form>
			 </div>
			 <div class="btn-top">
			 	<i class="fa fa-chevron-up" aria-hidden="true"></i>
			 </div>
		</section>

		<!-- Create a 3D hover contact -->

		<section class="section-navivation">
			<div class="contacts-block res">
				<jdoc:include type="modules" name="position-8" style="xhtml"/>
				<!-- <div class="h-theme-block">
					<h3 class="h-theme">Drop us a line</h3>
					<span></span>
				</div>
				<div id="contacts-content">
					<div class="contacts-blocks">
						<i class="fa fa-map-marker"></i>
						<p>Address</p>
						<p>Level 6, 23 pitt St,Sydney</p>
					</div>
					<div class="contacts-blocks">
						<i class="fa fa-mobile"></i>
						<p>Address</p>
						<p>Level 6, 23 pitt St,Sydney</p>
					</div>
					<div class="contacts-blocks">
						<i class="fa fa-paper-plane"></i>
						<p>Address</p>
						<p>Level 6, 23 pitt St,Sydney</p>
					</div> -->
				</div>
				<div class="team-slide__social social-contacts">
					<?php if($this->params->get('urlWebSite')) { ?>
						<div class="social-block">
							<a href="<?php echo $this->params->get('urlWebSite'); ?>"></a>
						</div>
					<?php } ?>
					<?php if($this->params->get('urlTwitSite')) { ?>
						<div class="social-block">
							<a href="<?php echo $this->params->get('urlTwitSite'); ?>"></a>
						</div>
					<?php } ?>
					<?php if($this->params->get('urlGmailSite')) { ?>
						<div class="social-block">
							<a href="<?php echo $this->params->get('urlGmailSite'); ?>"></a>
						</div>
					<?php } ?>
				</div>
		</section>

		<footer>
			<div class="footer-content res">
				<p>Terms & Conditions <span>|</span> Legals</p>
			</div>
		</footer>

		</main>
	</div>
</body>
</html>