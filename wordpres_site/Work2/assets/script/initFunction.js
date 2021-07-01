function ajaxInit (functionName) {
	return functionName;
}

// Ajax
ajaxInit(sendEmail());
ajaxInit(sendEmailFromFooter());
ajaxInit(sendImages());

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