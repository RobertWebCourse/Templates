jQuery(function($) {

	function burgerAnimation() {
		$('.burger').click(function() {
			$('#burger__list').toggle('easing');
			$(this).toggleClass('active-x');
		});
	}

	burgerAnimation();

	// Animate when scrolling
	function scrollAnim(animElement, methodAnim, delayAnim, durationAnim, mobileAnim = false, ownAnimationCssName, ownAnimationCssStart, ownAnimationCssEnd) {
		if(mobileAnim === true) {

			let skroll = new Skroll({
				mobile: true
			})
			.add(animElement, {
				animation: methodAnim,
				delay: delayAnim,
				duration: durationAnim
			}).init();

			if(ownAnimationCssStart != undefined && ownAnimationCssEnd != undefined) {
				let skroll = new Skroll({
					mobile: true
				})
				.add(animElement, {
					animation: {
						start: function(el) {
							$(el).css(
								ownAnimationCssName, ownAnimationCssStart
							)
						},
						end: function(el) {
							$(el).css(
								ownAnimationCssName, ownAnimationCssEnd
							)
						}
					},
					delay: delayAnim,
					duration: durationAnim
				}).init();
			}

		} else {

			let skroll = new Skroll({
				mobile: false
			})
			.add(animElement, {
				animation: methodAnim,
				delay: delayAnim,
				duration: durationAnim
			}).init();

			if(ownAnimationCssStart != undefined && ownAnimationCssEnd != undefined) {
				let skroll = new Skroll({
					mobile: false
				})
				.add(animElement, {
					animation: {
						start: function(el) {
							$(el).css(
								ownAnimationCssName, ownAnimationCssStart
							)
						},
						end: function(el) {
							$(el).css(
								ownAnimationCssName, ownAnimationCssEnd
							)
						}
					},
					delay: delayAnim,
					duration: durationAnim
				}).init();
			}
		}
	}

	scrollAnim('#header__content h1', 'zoomIn', 100, 1200, true);
	scrollAnim('#header__content p', 'fadeInLeftBig', 200, 1200, true);
	scrollAnim('#header__content a', 'zoomIn', 100, 1200, true);
	scrollAnim('.h-theme-block:not(.res-blocks .h-theme-block)', 'fadeInUp', 100, 1200, true);
	scrollAnim('.section-block p', 'rotateRightIn', 100, 1200, true);
	scrollAnim('#our-motivation__block .our-motivation__blocks:first-child', 'fadeInRight', 110, 1200, true);
	scrollAnim('#our-motivation__block .our-motivation__blocks:nth-child(2)', 'fadeInRight', 120, 1200, true);
	scrollAnim('#our-motivation__block .our-motivation__blocks:nth-child(3)', 'fadeInRight', 130, 1200, true);
	scrollAnim('.secton-banner h1', 'zoomIn', 100, 1200, true);
	scrollAnim('.secton-banner h3', 'zoomIn', 200, 1200, true);
	scrollAnim('.section-our-pluses .pl_slide-block:first-child .pl_block', 'slideInLeft', 300, 500, true);
	scrollAnim('.secton-banner .arrow','flipInX', 500, 700, true);
	scrollAnim('.section-team__slider-res:first-child .team-slide-block', 'growInRight', 100, 700, true);
	scrollAnim('#app-content img', undefined, 100, 2500, true, 'opacity', 0, 0.35);
	scrollAnim('.section-subscribe .fa-paper-plane', 'fadeInLeft', 100, 1200, true);
	scrollAnim('.section-subscribe p', 'fadeInLeft', 200, 1200, true);
	scrollAnim('.section-subscribe form', 'zoomIn', 400, 800, true);
	scrollAnim('.section-navivation .contacts-blocks', 'zoomIn', 100, 800, true);

	// Tilt Hover Effect

	function tiltAnim(element, maxTiltElem) {
		element.tilt({
			maxTilt: maxTiltElem
		});
	}

	tiltAnim($('.contacts-blocks'), 10);

});