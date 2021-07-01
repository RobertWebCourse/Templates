// Burger
function burgerAnimation () {
	let getBurgerButton = document.getElementById('burger-menu-top');
	let getMenuNav = document.querySelector('header nav ul');

	getBurgerButton.onclick = () => {
		getBurgerButton.classList.toggle("active");
		getMenuNav.classList.toggle("active");
	}
}

// In header cutting text
function clippingText (element, firstPosText, lastPosText) {
	let getTextBlock = element;
	let getTextFromBlock = getTextBlock.textContent;

	let cutText = getTextFromBlock.slice(firstPosText, lastPosText);

	if(cutText.length < getTextFromBlock.length) {
		cutText = cutText.innerHTML = cutText + '...<a href="#">[More]</a>'
	}
	getTextBlock.innerHTML = cutText;
}

// Image gallery in footer
function gridGallery () {
	let gridMsnr = new Isotope('.grid-layout', {
	    itemSelector: '.grid-item',
	    masonry: {
	    	columnWidth: '.grid-sizer'
	    }
	});

	let filterBtn = document.querySelectorAll('.our_happy_moments ul li a');
	let selectedA;
	for( let i = 0; i < filterBtn.length; i++ ) {
		filterBtn[0].classList.add('active');
		filterBtn[i].onclick = function (click) {
			activeA(filterBtn[i]);
			function activeA (a) {
				filterBtn[0].classList.remove('active');
				if(selectedA) {

					selectedA.classList.remove('active');
				}
				selectedA = a;
				selectedA.classList.add('active');
			}


			click.preventDefault();
			let filterData = event.target.getAttribute('data-filter');
			gridMsnr.arrange({
				filter: filterData
			});
		};
	}
}

// Video Player
function videoPlayer() {
	let getContentPlayerLink = document.querySelector('.content-player a');
	let getContentVideo = document.getElementsByClassName('content-player')[0];
	getContentPlayerLink.onclick = (e) => {
		e.preventDefault();
	}

	let getModal = document.getElementsByClassName('modal-block');
	let getCloseElem = document.querySelector('.modal-ex');
	function modalScreen(item) {
		item.onclick = () => {
			getCloseElem.style.display = 'block';
			getModal[0].classList.add('grid-modal-open');
			getCloseElem.classList.add('close-ex');
			let createClone = item.cloneNode(true);
			getModal[0].appendChild(createClone);
			let getBody = document.getElementsByTagName('body')[0];
			getBody.style.overflow = 'hidden';
			createClone.classList.add('grid-modal-object');

			getModal[0].onclick = () => {
				if(event.target.tagName != item) {
					getModal[0].classList.add('grid-modal-close');
					getCloseElem.classList.remove('close-ex');
					createClone.classList.add('grid-modal-object-close');
					createClone.classList.remove('grid-modal-object');
					getBody.style.overflow = 'visible';

					setTimeout(() => {
						getCloseElem.style.display = 'none';
						getModal[0].removeChild(createClone);
						getModal[0].classList.remove('grid-modal-close');
						getModal[0].classList.remove('grid-modal-open');
					}, 300)
				}
			}
		}
	}
	modalScreen(getContentVideo);
}


// Anim footer Email input
function animInput(input, color, activeColor) {
	if(input) {
		let getForm = input;
		let getBody = document.getElementsByTagName('body')[0];
		getForm.style.borderBottom = '1px solid ' + color;

		getForm.onclick = () => {
			getForm.style.borderBottom = '1px solid ' + activeColor;
			getBody.onclick = (e) => {
				if(e.target.tagName != 'INPUT') {
					getForm.style.borderBottom = '1px solid ' + color;
				}
			}
		}
	}
}
