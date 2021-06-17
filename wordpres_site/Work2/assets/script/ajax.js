"use strict"

let getSubmit = document.getElementsByName('sendEmail')[0];

// Из за этого может быть ошибка addEventListener и форма не будет отправляться!

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

		$.ajax ({
			url: 'wp-admin/admin-ajax.php?action=send_user',
			type: "POST",
			dataType: 'JSON',
			data: {
				userName: name,
				emailUser: email,
				textFromUser: textArea
			},
			beforeSend: beforeSendInfo,
			success: succesSend
		});

		function beforeSendInfo () {
			console.log('Please wait, sending info...');
		}

		function succesSend(data) {
			if (data.status === true) {
				window.location.reload();
			} else {

				if(data.type === 1) {
					data.fields.forEach(function (field) {
						document.querySelector(`input[name="${field}"]`).classList.add('error');
					});

					let getMsgElement = document.getElementsByClassName('errorMsg')[0];
					getMsgElement.classList.remove('hideError');
					getMsgElement.innerText = data.message;

					console.log('Registration is not succesfull');
				}
			}
		}
	});
}




let getSubmitFooter = document.querySelector('.desc_footer input[type="submit"]');

if(getSubmitFooter) {
	getSubmitFooter.addEventListener("click", (e) => {

		e.preventDefault();

		let emailFooter = document.querySelector('.desc_footer input[type="email"]');
		let emailFooterValue = emailFooter.value;

		$.ajax({
			url: 'wp-admin/admin-ajax.php?action=send_email',
			type: "POST",
			dataType: 'JSON',
			data: {
				emailFooter: emailFooterValue,
			},
			beforeSend: beforeSendInfo,
			success: succesSend
		});

		function beforeSendInfo () {
			console.log('Please wait, sending info...');
		}

		function succesSend(data) {
			if (data.status === true) {
				window.location.reload();
			} else {

				if(data.type === 1) {
					emailFooter.classList.add('error');

					let getMsgElement = document.getElementsByClassName('errorMsgFooter')[0];
					getMsgElement.classList.remove('hideError');
					getMsgElement.innerText = data.message;

					console.log('Registration is not succesfull');
				}
			}
		}
	});
}

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

		$.ajax({
			url: "wp-admin/admin-ajax.php?action=send_image",
			type: "POST",
			dataType: 'json',
			processData: false,
			contentType: false,
			cache: false,
			data: formData,
			beforeSend: beforeSendInfo,
			success: succesSend
		});
		function beforeSendInfo () {
			console.log('Sending info...');
		}

		function succesSend(data) {
			let getErrorsH = document.querySelectorAll('.error_secret');
			for(let i = 0; i < getErrorsH.length; i++) {
				getErrorsH[i].style.display = 'none';
				getErrorsH[i].textContent = '';
			}


			if (data.status === true) {
				console.log("Succesfull sending");
				window.location.reload();
			} else {
				if(data.fields.indexOf('nameFile') != -1) {
					getNameT.style.display = 'block';
					getNameT.textContent = "Please enter a name in the field";
				}
				if(data.fields.indexOf('categoryUser') != -1) {
					getCatT.style.display = 'block';
					getCatT.textContent = "Please select category";
				}
				if(data.fields.indexOf('sizetFile') != -1) {
					getSizeT.style.display = 'block';
					getSizeT.textContent = "Please select image size";
				}
				if(data.type === 5) {
					getFileT.style.display = 'block';
					getFileT.textContent = "Image not selected";
				}
				if(data.type === 6) {
					getFileT.style.display = 'block';
					getFileT.textContent = "Error loading file";
				}
				if(data.type === 7) {
					getFileT.style.display = 'block';
					getFileT.textContent = "Wrong format selected";
				}
				if(data.type === 8) {
					getFileT.style.display = 'block';
					getFileT.textContent = "That image is exists";
				}
			}
		}
	}
});


