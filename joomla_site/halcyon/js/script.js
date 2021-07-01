jQuery(function($) {

	// Cut Text Function

	function cutText(elementWithText, numbLettersStart, numbLettersFinish) {
		$(elementWithText).each(function() {
			let textBlock = $(this).text();
			if(textBlock.length >= 200) {
				$(this).data('full', $(this).html());
				$(this).html($(this).html().substr(numbLettersStart, numbLettersFinish) + '...');
			}
		});
	}

	cutText($(".pl_block .t-slide"), 0, 200);

	// Wrap elements in elements

	function wrapBlocks(itemWrap, parentWrap, countItem) {
		const divs = itemWrap;

		for (let i = 0; i < divs.length; i += countItem) {
		  divs.slice(i, i + countItem).wrapAll(parentWrap);
		}
	}

	wrapBlocks($(".our-pluses__content > .pl_block"), "<div class='pl_slide-block'></div>", 3);
	wrapBlocks($(".section-team__slider > .team-slide-block"), "<div class='section-team__slider-sec-block'</div>", 3);
	wrapBlocks($(".section-team__slider-sec-block"), "<div class='section-team__slider-res'></div>", 1);


	//Add icons to slide-3 buttons

	function addElements(element, whereAddElement, methodAdd) {
		switch (methodAdd) {
			case 'append':
				$(whereAddElement).append(element);
				break;
			case 'prepend':
				$(whereAddElement).prepend(element);
				break;
			case 'after':
				$(whereAddElement).after(element);
				break;
			case 'before':
				$(whereAddElement).before(element);
				break;
			default:
				console.error('Error: Wrong method name');
		}
	}
	addElements('<i class="fa fa-dribbble" aria-hidden="true"></i>', '.social-block:first-child a', 'append');
	addElements('<i class="fa fa-twitter" aria-hidden="true"></i>', '.social-block:nth-child(2) a', 'append');
	addElements('<i class="fa fa-envelope" aria-hidden="true"></i>', '.social-block:last-child a', 'append');

	//Add icons to Contacts

	addElements('<i class="fa fa-map-marker"></i>', '.contacts-blocks:first-child', 'prepend');
	addElements('<i class="fa fa-mobile"></i>', '.contacts-blocks:nth-child(2)', 'prepend');
	addElements('<i class="fa fa-paper-plane"></i>', '.contacts-blocks:nth-child(3)', 'prepend');


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

	
	// Create scroll to web team

	function scrollTo(startPointElem, endPointElem, transitionTime) {
		$(startPointElem).click(function() {
			$('html, body').animate({
				scrollTop: $(endPointElem).offset().top
			}, transitionTime);
		});
	}

	scrollTo($('.arrow'), $('.team-content'), 1000);
	scrollTo($('.btn-top'), $('#wraper'), 1000);
});
