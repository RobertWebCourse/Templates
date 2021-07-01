<?php defined("_JEXEC") or die();

	$doc = JFactory::getDocument();

	$doc->addStyleSheet($doc->baseurl."/templates/".$doc->template."/css/style.css");
	$doc->addStyleSheet($doc->baseurl."/templates/".$doc->template."/fonts/font-awesome-4.7.0/css/font-awesome.min.css");

	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/skroll.min.js");
	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/tilt.jquery.min.js");
	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/script.js");
	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/animationMain.js");
	$doc->addScript($doc->baseurl."/templates/".$doc->template."/js/ajax.js");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<jdoc:include type="head" />
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
			</div>
		</section>

		<section class="section-responsive">
			<div class="res-block">

		

				<!-- Slide -->
				<div class="res-block-info">
					<jdoc:include type="modules" name="position-3" style="xhtml"/>

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
	
				</div>
				<div class="team-slide__social social-contacts">
					<div class="social-block">
						<a href="https://google.com"></a>
					</div>
					<div class="social-block">
						<a href="https://twitter.com"></a>
					</div>
					<div class="social-block">
						<a href="https://gmail.com"></a>
					</div>
				</div>
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