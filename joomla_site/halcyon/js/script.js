jQuery(function($) {
    $('.burger').click(function() {
		$('#burger__list').toggle('easing');
		$(this).toggleClass('active-x');
	});

	$(".pl_block .t-slide").each(function() {
		let textBlock = $(this).text();
		if(textBlock.length >= 200) {
	    	$(this).data('full', $(this).html());
	   		$(this).html($(this).html().substr(0, 200) + '...');
	    }
	});

	function wrapBlocks(itemWrap, parentWrap, countItem) {
		const divs = itemWrap;

		for (let i = 0; i < divs.length; i += countItem) {
		  divs.slice(i, i + countItem).wrapAll(parentWrap);
		}
	}

	wrapBlocks($(".our-pluses__content > .pl_block"), "<div class='pl_slide-block'></div>", 3);
	wrapBlocks($(".section-team__slider > .team-slide-block"), "<div class='section-team__slider-sec-block'></div>", 3);
	$('.section-team__slider-sec-block').wrap("<div class='section-team__slider-res'></div>");

	//Add icons to sldie-3 buttons

	$('.social-block:first-child a').append('<i class="fa fa-dribbble" aria-hidden="true"></i>');
	$('.social-block:nth-child(2) a').append('<i class="fa fa-twitter" aria-hidden="true"></i>');
	$('.social-block:nth-child(3) a').append('<i class="fa fa-envelope" aria-hidden="true"></i>');

	//Add icons to Contacts

	$('.contacts-blocks:first-child').prepend('<i class="fa fa-map-marker"></i>');
	$('.contacts-blocks:nth-child(2)').prepend('<i class="fa fa-mobile"></i>');
	$('.contacts-blocks:nth-child(3)').prepend('<i class="fa fa-paper-plane"></i>');

	// Add views in the end article

	$('.article-info .views').appendTo('.info-block');


	function customSlider(btn, elements, animation, durationAnimation, showElem) {
		btn.each(function(i) {
			elements.hide();
			$('.res-blocks:first-child').show();
			$('.pl_slide-block:first-child').show().css({'transform': 'translate(0px, 0px)'});
			$('.section-team__slider-res').show().css({'margin-left': '0'});
			$(this).click(function() {
				if(btn + ':checked') {
					$(this).addClass('active-btn').prop('disabled', true);
					elements.hide();
				}
				if(showElem === false) {
					elements.hide();
				} else {
					elements.show();
				}
				btn.not(this).prop('disabled', false).removeClass('active-btn');
				switch (animation) {
					case 'fadeIn':
						elements.eq(i).fadeIn(durationAnimation);
						break;
					case 'showLeft':
						elements.css({'transform': 'translate(103%, 0px)', 'transition' : 'all ease ' + durationAnimation + 'ms'});
						elements.eq(i).show();
						setTimeout(() => {
							elements.eq(i).css({'transform': 'translate(0px, 0px)'});
						}, 0);
						break;
					case 'slideLeft':
						elements.css({'transition' : 'all ' + durationAnimation + 'ms ease'});
						if($(this).val() == '2_slide_team') {
							elements.eq(0).css({'margin-left' : '-100%'});
						} else if($(this).val() == '3_slide_team') {
							elements.eq(0).css({'margin-left' : '-200%'});
						} else {
							elements.eq(0).css({'margin-left': '0%'});
						}
						break;
					default:
						elements.eq(i).fadeIn(durationAnimation);
						break;
				}
			});
		});
	}

	customSlider($('.section-responsive .radiobutton input'),$('.section-responsive .res-blocks'), 'fadeIn', 400, false);
	customSlider($('.our-pluses__content .radiobutton input'),$('.our-pluses__content .pl_slide-block'), 'showLeft', 400, false);
	customSlider($('.section-team .radiobutton input'),$('.section-team .section-team__slider-res'), 'slideLeft', 1000, true);


	// Animate when scrolling
	let skroll = new Skroll({
		mobile: true
		})
		.add('#header__content h1', {
			animation: 'zoomIn',
			delay:100,
			duration: 1200
		})
		.add('#header__content p', {
			animation: 'fadeInLeftBig',
			delay:200,
			duration: 1200
		})
		.add('#header__content a', {
			animation: 'zoomIn',
			delay: 100,
			duration: 1200
		})
		.add('.h-theme-block:not(.res-blocks .h-theme-block)', {
			animation: 'fadeInUp',
			delay:100,
			duration: 1200
		})
		.add('.section-block p', {
			animation: 'rotateRightIn',
			delay:100,
			duration: 1200
		})
		.add('#our-motivation__block .our-motivation__blocks:first-child', {
			animation: 'fadeInRight',
			delay:100,
			duration: 1200
		})
		.add('#our-motivation__block .our-motivation__blocks:nth-child(2)', {
			animation: 'fadeInRight',
			delay:200,
			duration: 1200
		})
		.add('#our-motivation__block .our-motivation__blocks:nth-child(3)', {
			animation: 'fadeInRight',
			delay:300,
			duration: 1200
		})
		.add('.secton-banner h1', {
			animation: 'zoomIn',
			delay:100,
			duration: 1200
		})
		.add('.secton-banner h3', {
			animation: 'zoomIn',
			delay:200,
			duration: 1200
		})
		.add('.section-our-pluses .pl_slide-block:first-child .pl_block', {
			animation: 'slideInLeft',
			delay:300,
			duration: 500
		})
		.add('.secton-banner .arrow', {
			animation: 'flipInX',
			delay:500,
			duration: 700
		})
		.add('.section-team__slider-res:first-child .team-slide-block', {
			animation: 'growInRight',
			delay:100,
			duration: 300
		})
		.add('#app-content img', {
			animation:{
				start: function(el) {
					$(el).css({
						opacity: '0'
					})
				},
				end: function(el) {
					$(el).css({
						opacity: '0.35'
					})
				}
			},
			delay:100,
			duration: 2500
		})
		.add('.section-subscribe .fa-paper-plane', {
			animation: 'fadeInLeft',
			delay:100,
			duration: 1200
		})
		.add('.section-subscribe p', {
			animation: 'fadeInLeft',
			delay:200,
			duration: 1200
		})
		.add('.section-subscribe form', {
			animation: 'zoomIn',
			delay:400,
			duration: 800
		})
		.add('.section-navivation .contacts-blocks', {
			animation: 'zoomIn',
			delay:100,
			duration: 800
		})
	.init();

	// Create scroll to web team

	$('.arrow').click(function() {
		$('html, body').animate({
		    scrollTop: $(".team-content").offset().top
		}, 1000);
	});

	// Create scroll to top

	$('.btn-top').click(function() {
		$('html, body').animate({
		    scrollTop: $("#wraper").offset().top
		}, 1000);
	});

	// Tilt Hover Effect

	$('.contacts-blocks').tilt({
	    maxTilt: 10
	})
});

// Check URL (fix bag for articles)

let getUrl = window.location.href;
let hostname = window.location.origin;
console.log(getUrl);

if(getUrl != hostname + '/joomla/index.php') {
	console.log("It's not a home page");
}
