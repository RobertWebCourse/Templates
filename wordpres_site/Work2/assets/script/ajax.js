"use strict"

function sendEmail(nameUser, emailUser, messageUser, getBtnName, parentForm) {
	let getSubmit = document.getElementsByName(getBtnName)[0];
	if(getSubmit) {
		getSubmit.addEventListener("click", async (e) => {
			e.preventDefault();
			let getFields = document.querySelectorAll(parentForm + ' form input');

			for(let i = 0; i < getFields.length; i++) {
				if(getFields[i].classList.contains('error')) {
					getFields[i].classList.remove('error');
				}
			}

			let name = document.querySelector(nameUser).value;
			let email = document.querySelector(emailUser).value;
			let textArea = document.querySelector(messageUser).value;		

			let formData = new FormData();
			formData.append('userName', name);
			formData.append('emailUser', email);
			formData.append('textFromUser', textArea);

			let response = await fetch('wp-admin/admin-ajax.php?action=send_user', {
			  method: 'POST',
			  body: formData
			});

			console.log('Send Info...');
			let result = await response.json();

			if(response.ok) {
				if (result.status === true) {
					window.location.reload();
				} else {

					if(result.type === 1) {
						result.fields.forEach(function (field) {
							document.querySelector(`input[name="${field}"]`).classList.add('error');
						});

						let getMsgElement = document.getElementsByClassName('errorMsg')[0];
						getMsgElement.classList.remove('hideError');
						getMsgElement.innerText = result.message;

						console.log('Registration is not succesfull');
					}
				}	
			}
		});
	}
}

function sendEmailFromFooter (getEmail, getBtn, getMsg) {
	let getSubmitFooter = document.querySelector(getBtn);

	if(getSubmitFooter) {
		getSubmitFooter.addEventListener("click", async (e) => {
			e.preventDefault();

			let emailFooter = document.querySelector(getEmail);
			let getValueEmail = document.querySelector(getEmail).value;

			let formData = new FormData();
			formData.append('emailFooter', getValueEmail);

			let response = await fetch('wp-admin/admin-ajax.php?action=send_email', {
			  method: 'POST',
			  body: formData
			});

			console.log('Send Info...');
			let result = await response.json();

			if(response.ok) {
				if (result.status === true) {
					window.location.reload();
				} else {

					if(result.type === 1) {
						emailFooter.classList.add('error');

						let getMsgElement = document.querySelector(getMsg)
						getMsgElement.classList.remove('hideError');
						getMsgElement.innerText = result.message;
						console.log('Registration is not succesfull');
					}
				}	
			}
		});
	}
}


function sendImages (nameUser, categoryImage, sizeImage, fileInput, parentBlock) {
	let getParent = document.querySelector(parentBlock);
	let image = false;

	getParent.addEventListener('click', async (e) => {

		let target = e.target;
		if(target.className == 'file') {

			let getFileInput = document.querySelector(fileInput);
			getFileInput.addEventListener('change', (e) => {
				image = e.target.files[0];
			});
		}

		if(target.className == 'send-file' || target.className == 'secret-text') {

			let getFileT = document.getElementsByClassName('error_file')[0];
			let getSizeT = document.getElementsByClassName('error_size')[0];
			let getCatT = document.getElementsByClassName('error_category')[0];
			let getNameT = document.getElementsByClassName('error_name')[0];

			let getNameUser = document.querySelector(nameUser).value;
			let getCategory = document.querySelector(categoryImage).value;
			let getSize = document.querySelector(sizeImage).value;

			let formData = new FormData();
			formData.append('nameUser', getNameUser);
			formData.append('categoryFile', getCategory);
			formData.append('sizeFile', getSize);
			formData.append('file', image);

			let response = await fetch('wp-admin/admin-ajax.php?action=send_image', {
			  method: 'POST',
			  body: formData
			});

			console.log('Send Info...');
			let result = await response.json();

			if(response.ok) {
				let getErrorsH = document.querySelectorAll('.error_secret');
				for(let i = 0; i < getErrorsH.length; i++) {
					getErrorsH[i].style.display = 'none'
					getErrorsH[i].textContent = ''
				}

				if (result.status === true) {
					window.location.reload();
				} else {
					if(result.fields.indexOf('nameFile') != -1) {
						getNameT.style.display = 'block';
						getNameT.textContent = "Please enter a name in the field";
					}
					if(result.fields.indexOf('categoryUser') != -1) {
						getCatT.style.display = 'block';
						getCatT.textContent = "Please select category";
					}
					if(result.fields.indexOf('sizetFile') != -1) {
						getSizeT.style.display = 'block';
						getSizeT.textContent = "Please select image size";
					}
					if(result.type === 5) {
						getFileT.style.display = 'block';
						getFileT.textContent = "Image not selected";
					}
					if(result.type === 6) {
						getFileT.style.display = 'block';
						getFileT.textContent = "Error loading file";
					}
					if(result.type === 7) {
						getFileT.style.display = 'block';
						getFileT.textContent = "Wrong format selected";
					}
					if(result.type === 8) {
						getFileT.style.display = 'block';
						getFileT.textContent = "That image is exists";
					}
				}	
			}
		}
	});
}

