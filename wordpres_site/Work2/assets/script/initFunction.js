function ajaxInit (functionName) {
	return functionName;
}

// Ajax
ajaxInit(sendEmail('.form__user form input[type="text"]', '.form__user form input[type="email"]', '.form__user form textarea', 'sendEmail', '.right__main'));
ajaxInit(sendEmailFromFooter('.desc_footer input[type="email"]', '.desc_footer input[type="submit"]', '.errorMsgFooter'));
ajaxInit(sendImages('.name-hack input[type="text"]', '.category-hack select', '.size-hack select', '.file-input input[type="file"]', '.our_happy_moments', ));

// Burger
ajaxInit(burgerAnimation());

// In header cutting text
ajaxInit(clippingText(document.querySelector('.main-info-block p'), 0, 220));

// Image gallery in footer
ajaxInit(gridGallery());

// Video Player
ajaxInit(videoPlayer());

// Anim footer Email input
ajaxInit(animInput(document.querySelector('.desc-f-form input[type="email"]'), '#959595', 'purple'));

// Secret code ;)
updateSecretCode(['H', 'A', 'C', 'K']);