let getBurgerButton = document.getElementById('burger-menu-top');
let getMenuNav = document.querySelector('header nav ul');

getBurgerButton.onclick = () => {
	getBurgerButton.classList.toggle("active");
	getMenuNav.classList.toggle("active");
}

// Get Main Text in header block

let getTextBlock = document.querySelector('.main-info-block p');
let getTextFromBlock = getTextBlock.textContent;

let cutText = getTextFromBlock.slice(0, 220);

if(cutText.length < getTextFromBlock.length) {
	cutText = cutText.innerHTML = cutText + '...<a href="#">[More]</a>'
}
getTextBlock.innerHTML = cutText;


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


// Anim footer Email input


let getFormEmail = document.querySelector('.desc-f-form input[type="email"]');
let getBody = document.getElementsByTagName('body')[0];
getFormEmail.style.borderBottom = '1px solid #959595';

getFormEmail.onclick = () => {
	getFormEmail.style.borderBottom = '1px solid purple';
	getBody.onclick = (e) => {
		if(e.target.tagName != 'INPUT') {
			getFormEmail.style.borderBottom = '1px solid #959595';
		}
	}
}

// Secret Code

let arr = [];
let secretCode = ['H', 'A', 'C', 'K'];
document.querySelector('body').onkeypress = (event) => {

	if(arr === false) {
		return;
	}

	if(event.code === "KeyH") {
		arr.push("H");
		console.log("Pushed key H");
	}

	if(event.code === "KeyA") {
		arr.push("A");
		console.log("Pushed key A");
	}

	if(event.code === "KeyC") {
		arr.push("C");
		console.log('Pushed key C');
	}

	if(event.code === "KeyK") {
		arr.push("K");
		console.log('Pushed key K');
	}

	if( arr.length === 4 ) {
		console.log("Arr length: " + arr.length);
		if( secretCode.join() === arr.join() ) {

			console.log("Succesfull");	

			function createText(element, text, elementClass = undefined) {
				element = document.createElement(element);
				element.textContent = text;
				elementClass = element.classList.add(elementClass);
				createInfoHackBlock.append(element);
			}

			let createSecretContent = document.createElement('div');
			createSecretContent.id = 'secret-blocks';

			let createSecretBlock = document.createElement('div');
			createSecretBlock.classList.add('secret-block');

			let createInfoHackBlock = document.createElement('div');
			createInfoHackBlock.classList.add('info-hack');

			let createSpanErrors = document.createElement('div');
			createSpanErrors.classList.add('secret-errors');

			createText('p', 'HACK', 'logo-hack');
			createText('p', 'Your Name:', 'name-hack');
			createText('p', 'Category:', 'category-hack');
			createText('p', 'Size(%) :', 'size-hack');

			let createInputText = document.createElement('input');
			createInputText.type = 'text';
			createInputText.name = "nameFile";

			let createInputSize = document.createElement('select');
			createInputSize.id = "sizing";
			createInputSize.name = "sizetFile";
			createInputSize.setAttribute("name", "sizeImages");
			createInputSize.classList.add('secret-input-size');

			let createOptionSize1 = document.createElement('option');
			createOptionSize1.setAttribute("value", "24.449");
			createOptionSize1.textContent = "24.449";

			let createOptionSize2 = document.createElement('option');
			createOptionSize2.setAttribute("value", "41.539");
			createOptionSize2.textContent = "41.539";

			let createOptionSize3 = document.createElement('option');
			createOptionSize3.setAttribute("value", "32.992");
			createOptionSize3.textContent = "32.992";

			let createCategory = document.createElement('select');
			createCategory.id = "category";
			createCategory.name = "categoryUser";
			createCategory.setAttribute("name", "name-category");
			createInputSize.classList.add('secret-input-category');

			let categories1 = document.createElement('option');
			categories1.setAttribute("value", "business");
			categories1.textContent = "Business Plan";

			let categories2 = document.createElement('option');
			categories2.setAttribute("value", "business-development");
			categories2.textContent = "Business Development";

			let categories3 = document.createElement('option');
			categories3.setAttribute("value", "marketing");
			categories3.textContent = "Marketing";

			let categories4 = document.createElement('option');
			categories4.setAttribute("value", "development");
			categories4.textContent = "Developmnet";

			let createSecretDiv = document.createElement('div');
			createSecretDiv.classList.add('file-input');

			let createSecretDivFile = document.createElement('input');
			createSecretDivFile.classList.add('file');
			createSecretDivFile.type = 'file';
			createSecretDivFile.id = 'file';
			createSecretDivFile.name = 'file';

			let createDescFile = document.createElement('p');
			createDescFile.classList.add('file-name');

			let createSecretLabel = document.createElement('label');
			createSecretLabel.setAttribute('for', 'file');
			createSecretLabel.textContent = 'Select File';

			let createSecretLink = document.createElement('a');
			createSecretLink.href = "#";
			createSecretLink.classList.add('send-file');

			let createSecretSpan = document.createElement('span');
			createSecretSpan.classList.add('secret-text');
			createSecretSpan.textContent = 'Send';

			createSecretBlock.append(createSecretLink);
			createSecretLink.append(createSecretSpan);
			
			let getElementHp = document.getElementsByClassName('head_hp')[0];

			getElementHp.after(createSecretContent);
			createSecretContent.prepend(createSecretBlock);
			createSecretBlock.prepend(createInfoHackBlock);
			createSecretBlock.after(createSpanErrors);

			let getNameText = document.querySelector('.secret-block .name-hack');
			getNameText.append(createInputText);

			let createCategoryInput = document.querySelector('.secret-block .category-hack');
			createCategoryInput.append(createCategory);

			let createSize = document.querySelector('.secret-block .size-hack'); 
			createSize.append(createInputSize);

			// Prevent Default Links
			createSecretLink.addEventListener("click", (e) => {
				e.preventDefault();
			});
			createSecretSpan.addEventListener("click", (e) => {
				e.preventDefault();
			});


			createInfoHackBlock.append(createSecretDiv);
			createSecretDiv.append(createSecretDivFile);
			createSecretDiv.append(createSecretLabel);
			createSecretDiv.append(createDescFile);
			createCategory.append(categories1);
			createCategory.append(categories2);
			createCategory.append(categories3);
			createCategory.append(categories4);
			createInputSize.append(createOptionSize1);
			createInputSize.append(createOptionSize2);
			createInputSize.append(createOptionSize3);

			createSecretBlock.append(createSecretLink);

			// Errors
			let createSpanErrorName = document.createElement('span');
			createSpanErrorName.classList.add('error_secret');
			createSpanErrorName.classList.add('error_name');
			createSpanErrorName.style.display = 'none';

			let createSpanErrorCategory = document.createElement('span');
			createSpanErrorCategory.classList.add('error_secret');
			createSpanErrorCategory.classList.add('error_category');
			createSpanErrorCategory.style.display = 'none';

			let createSpanErrorSize = document.createElement('span');
			createSpanErrorSize.classList.add('error_secret');
			createSpanErrorSize.classList.add('error_size');
			createSpanErrorSize.style.display = 'none';

			let createSpanErrorFile = document.createElement('span');
			createSpanErrorFile.classList.add('error_secret');
			createSpanErrorFile.classList.add('error_file');
			createSpanErrorFile.style.display = 'none';

			createSpanErrors.append(createSpanErrorName);
			createSpanErrors.append(createSpanErrorCategory);
			createSpanErrors.append(createSpanErrorSize);
			createSpanErrors.append(createSpanErrorFile);


			// Anim Intro
			let getHideBlock = document.querySelector('.test-hack-anim-hide');
			getHideBlock.classList.add('test-hack-anim');

			let getSecretDiv = document.querySelector(".secret-block");
			getSecretDiv.classList.add('secret-block-anim');

			let getSecretSpans = document.querySelectorAll('.hide-secret-span');

			for( let i = 0; i < getSecretSpans.length; i++ ) {
				if(getSecretSpans[i].classList.contains('hide-secret-span')) {
					getSecretSpans[i].classList.remove('hide-secret-span');
				}
			}

			let getTestHack = document.getElementsByClassName('test-hack-anim')[0];
			getTestHack.style.display = 'block';

			setTimeout(hideSecretBlock, 4500);

			function hideSecretBlock() {
				if(!getTestHack.classList.contains('hide-secret')) {
					getTestHack.classList.add('hide-secret-block');
				}
				setTimeout(() => {
					getTestHack.style.display = 'none';
				}, 600);
			}

			let getAchievment = document.querySelector('.achievment-hide');

			if(!getAchievment.classList.contains('achievment')) {
				getAchievment.classList.remove('achievment-hide');
				getAchievment.classList.add('achievment');
			}

			arr = false;

			const file = document.querySelector('#file');

			file.addEventListener('change', (e) => {
				const [file] = e.target.files;
				const {name: fileName, size} = file;
				const fileSize = (size / 1000).toFixed(2);

				const fileNameAndSize = `${fileName} - ${fileSize}KB`;
				document.querySelector('.file-name').textContent = fileNameAndSize;
			});

		} else {
			console.log("Not succesfull");
			arr = [];
		}
	}
}
