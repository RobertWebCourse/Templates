"use strict"

function sendEmail () {
	let getSubmit = document.getElementsByName('sendEmail')[0];

	if(getSubmit) {
		getSubmit.addEventListener("click", (e) => {
			e.preventDefault();
			let getFields = document.querySelectorAll('.right__main form input');

			for(let i = 0; i < getFields.length; i++) {
				if(getFields[i].classList.contains('error')) {
					getFields[i].classList.remove('error');
				}
			}

			let name = document.querySelector('.form__user form input[type="text"]').value;
			let email = document.querySelector('.form__user form input[type="email"]').value;
			let textArea = document.querySelector('.form__user form textarea').value;

			const request = new XMLHttpRequest();
			const url = "wp-admin/admin-ajax.php?action=send_user";
			const params = "userName=" + name + "&emailUser=" + email + "&textFromUser=" + textArea;

			request.responseType = "json";
			request.open('POST', url, true);
			request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

			request.addEventListener("readystatechange", () => {
				if(request.readyState === 4 && request.status === 200) {
					let obj = request.response;
					if (obj.status === true) {
						window.location.reload();
					} else {

						if(obj.type === 1) {
							obj.fields.forEach(function (field) {
								document.querySelector(`input[name="${field}"]`).classList.add('error');
							});

							let getMsgElement = document.getElementsByClassName('errorMsg')[0];
							getMsgElement.classList.remove('hideError');
							getMsgElement.innerText = obj.message;

							console.log('Registration is not succesfull');
						}
					}	
				}

				if(request.readyState === 2 && request.status === 200) {
					console.log('Please wait, sending info...');
				}
			});
			request.send(params);
		});
	}
}


function sendEmailFromFooter () {
	let getSubmitFooter = document.querySelector('.desc_footer input[type="submit"]');

	if(getSubmitFooter) {
		getSubmitFooter.addEventListener("click", (e) => {
			e.preventDefault();

			let emailFooter = document.querySelector('.desc_footer input[type="email"]');
			let emailFooterValue = emailFooter.value;


			const request = new XMLHttpRequest();
			const url = "wp-admin/admin-ajax.php?action=send_email";
			const params = "emailFooter=" + emailFooterValue;

			request.responseType = "json";
			request.open("POST", url, true);
			request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

			request.addEventListener("readystatechange", () => {
				if(request.readyState === 4 && request.status === 200) {

					let obj = request.response;
					
					if (obj.status === true) {
						window.location.reload();
					} else {

						if(obj.type === 1) {
							emailFooter.classList.add('error');

							let getMsgElement = document.getElementsByClassName('errorMsgFooter')[0];
							getMsgElement.classList.remove('hideError');
							getMsgElement.innerText = obj.message;

							console.log('Registration is not succesfull');
						}
					}	
				}
				if(request.readyState === 2 && request.status === 200) {
					console.log('Please wait, sending info...');
				}
			});
			request.send(params);
		});
	}
}


function sendImages () {
	let getParent = document.querySelector('.our_happy_moments');
	let image = false;

	getParent.addEventListener('click', (e) => {

		let target = e.target;
		if(target.className == 'file') {

			let getFileInput = document.querySelector('.file-input input[type="file"]');
			getFileInput.addEventListener('change', (e) => {
				image = e.target.files[0];
			});
		}

		if(target.className == 'send-file' || target.className == 'secret-text') {

			let getFileT = document.getElementsByClassName('error_file')[0];
			let getSizeT = document.getElementsByClassName('error_size')[0];
			let getCatT = document.getElementsByClassName('error_category')[0];
			let getNameT = document.getElementsByClassName('error_name')[0];

			let getNameUser = document.querySelector('.name-hack input[type="text"]').value;
			let getCategory = document.querySelector('.category-hack select').value;
			let getSize = document.querySelector('.size-hack select').value;

			let formData = new FormData();
			formData.append('nameUser', getNameUser);
			formData.append('categoryFile', getCategory);
			formData.append('sizeFile', getSize);
			formData.append('file', image);

			const request = new XMLHttpRequest();
			const url = "wp-admin/admin-ajax.php?action=send_image";
			const params = formData;

			request.responseType = "json";
			request.open("POST", url, true);

			request.addEventListener("readystatechange", () => {
				if (request.readyState === 4 && request.status === 200) {

					let obj = request.response;
					let getErrorsH = document.querySelectorAll('.error_secret');
					for(let i = 0; i < getErrorsH.length; i++) {
						getErrorsH[i].style.display = 'none';
						getErrorsH[i].textContent = '';
					}

					if (obj.status === true) {
						console.log("Succesfull sending");
						window.location.reload();
					} else {
						if(obj.fields.indexOf('nameFile') != -1) {
							getNameT.style.display = 'block';
							getNameT.textContent = "Please enter a name in the field";
						}
						if(obj.fields.indexOf('categoryUser') != -1) {
							getCatT.style.display = 'block';
							getCatT.textContent = "Please select category";
						}
						if(obj.fields.indexOf('sizetFile') != -1) {
							getSizeT.style.display = 'block';
							getSizeT.textContent = "Please select image size";
						}
						if(obj.type === 5) {
							getFileT.style.display = 'block';
							getFileT.textContent = "Image not selected";
						}
						if(obj.type === 6) {
							getFileT.style.display = 'block';
							getFileT.textContent = "Error loading file";
						}
						if(obj.type === 7) {
							getFileT.style.display = 'block';
							getFileT.textContent = "Wrong format selected";
						}
						if(obj.type === 8) {
							getFileT.style.display = 'block';
							getFileT.textContent = "That image is exists";
						}
					}
				}

				if (request.readyState === 2 && request.status === 200) {
					console.log('Sending info...');
				}
			});
			request.send(params);
		}
	});
}

