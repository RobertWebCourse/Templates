
// Secret Code

// Доделать правильно функцию с аргументами

function updateSecretCode(yourCodeMas) {
	let arr = [];
	let secretCode = yourCodeMas;

	document.querySelector('body').onkeypress = (event) => {
		if(arr === false) {
			return;
		}

		arr.push(event.key);
		console.log(event.key);
		arr = arr.map(function(a) {
			return a.toUpperCase();
		});

		if(arr.length === secretCode.length) {
			if( secretCode.join() === arr.join() ) {
				console.log('Ok');

				function createText(element, text, elementClass = undefined) {
					element = document.createElement(element);
					element.textContent = text;
					elementClass = element.classList.add(elementClass);
					createInfoHackBlock.append(element);
				}

				function createElements(tagElement, classOrId, nameClassOrId, whereAdd, methodAdd, textElement, linkHref) {
					
					let createElement = document.createElement(tagElement);

					if(classOrId) {
						if(classOrId.charAt(0) === '.' || classOrId.charAt(0) === '#') {
							if(classOrId.charAt(0) === '.') {
								createElement.classList.add(nameClassOrId);

								if(linkHref) {
									createElement.href = linkHref;
								}

								if(textElement) {
									createElement.textContent = textElement;
								}

								if(whereAdd && methodAdd) {
									methodAdd.toLowerCase();
									switch(methodAdd) {
										case 'append':
											whereAdd.append(createElement);
											break;
										
										case 'prepend':
											whereAdd.prepend(createElement);
											break;
										
										case 'before':
											whereAdd.before(createElement);
											break;
										
										case 'after':
											whereAdd.after(createElement);
											break;

										default:
											console.log('Error: Wrong method name');
											break;
									}
								}

							} else {
								createElement.id = nameClassOrId;

								if(linkHref) {
									createElement.href = linkHref;
								}

								if(textElement) {
									createElement.textContent = textElement;
								}

								if(whereAdd && methodAdd) {
									methodAdd.toLowerCase();
									switch(methodAdd) {
										case 'append':
											whereAdd.append(createElement);
											break;
										
										case 'prepend':
											whereAdd.prepend(createElement);
											break;
										
										case 'before':
											whereAdd.before(createElement);
											break;
										
										case 'after':
											whereAdd.after(createElement);
											break;

										default:
											console.log('Error: Wrong method name');
											break;
									}
								}
							}
						} else {
							console.log('Error. You entered the wrong ID or class');
						}
					}
				}


				function createForms(tagFormItem, nameFormItem, tagFormType, classFormItem, idFormItem, textForm, nameFormValue, valueFormItem, whereAdd, methodAdd){
					
					let createFormItem = document.createElement(tagFormItem);

					if(nameFormItem) {
						createFormItem.name = nameFormItem;
					}

					if(classFormItem) {
						createFormItem.classList.add(classFormItem);
					}

					if(tagFormType) {
						createFormItem.type = tagFormType;
					}

					if(idFormItem) {
						createFormItem.id = idFormItem;
					}

					if(nameFormValue && valueFormItem) {
						createFormItem.setAttribute(nameFormValue, valueFormItem);
					}

					if(textForm) {
						createFormItem.textContent = textForm;
					}

					if(whereAdd && methodAdd) {
						methodAdd.toLowerCase();
						switch(methodAdd) {
							case 'append':
								whereAdd.append(createFormItem);
								break;
							
							case 'prepend':
								whereAdd.prepend(createFormItem);
								break;
							
							case 'before':
								whereAdd.before(createFormItem);
								break;
							
							case 'after':
								whereAdd.after(createFormItem);
								break;

							default:
								console.log('Error: Wrong method name');
								break;
						}
					}


				}

				createElements('div', '#', 'secret-blocks', document.getElementsByClassName('head_hp')[0], 'after');
				createElements('div', '.', 'secret-block', document.getElementById('secret-blocks'), 'prepend');
				createElements('div', '.', 'info-hack', document.getElementsByClassName('secret-block')[0], 'prepend');
				createElements('div', '.', 'secret-errors', document.querySelector('.secret-block'), 'after');
				createElements('a', '.', 'send-file', document.querySelector('.secret-block'), 'append', false, '#');
				createElements('span', '.', 'secret-text', document.querySelector('.send-file'), 'append', 'Send');
				createElements('div', '.', 'file-input', document.querySelector('.info-hack'), 'after');
				createElements('p', '.', 'file-name', document.querySelector('.file-input'), 'after');

				// Text Hack

				createElements('p', '.', 'logo-hack', document.querySelector('.info-hack'), 'append', 'HACK');
				createElements('p', '.', 'name-hack', document.querySelector('.info-hack'), 'append', 'Your Name:');
				createElements('p', '.', 'category-hack', document.querySelector('.info-hack'), 'append', 'Category:');
				createElements('p', '.', 'size-hack', document.querySelector('.info-hack'), 'append', 'Size(%):');

				// Errors

				createElements('span', '.', 'error_name', document.querySelector('.secret-errors'), 'append');
				createElements('span', '.', 'error_category', document.querySelector('.secret-errors'), 'append');
				createElements('span', '.', 'error_size', document.querySelector('.secret-errors'), 'append');
				createElements('span', '.', 'error_file', document.querySelector('.secret-errors'), 'append');

				let getErrors = document.querySelectorAll('.secret-errors span');

				for(let i = 0; i < getErrors.length; i++) {
					getErrors[i].classList.add('error_secret');
					getErrors[i].style.display = 'none';
				}



				// createText('p', 'HACK', 'logo-hack');
				// createText('p', 'Your Name:', 'name-hack');
				// createText('p', 'Category:', 'category-hack');
				// createText('p', 'Size(%):', 'size-hack');

				// Form Elements


				createForms('input', 'nameFile', 'text', undefined, undefined, undefined, undefined, undefined, document.querySelector('.secret-block .name-hack'), 'append');
				createForms('select', 'sizetFile', undefined, 'secret-input-size', 'sizing', undefined, undefined, undefined, document.querySelector('.secret-block .size-hack'), 'append');
				createForms('option', undefined, undefined, undefined, undefined, '24.449', 'value', '24.449', document.querySelector('.secret-input-size'), 'append');
				createForms('option', undefined, undefined, undefined, undefined, '32.992', 'value', '32.992', document.querySelector('.secret-input-size'), 'append');
				createForms('option', undefined, undefined, undefined, undefined, '41.539', 'value', '41.539', document.querySelector('.secret-input-size'), 'append');
				createForms('select', 'categoryUser', undefined, 'secret-input-category', 'category', undefined, 'name', 'name-category', document.querySelector('.secret-block .category-hack'), 'append');
				createForms('option', undefined, undefined, undefined, undefined, 'Business Plan', 'value', 'business', document.querySelector('.secret-block .secret-input-category'), 'append');
				createForms('option', undefined, undefined, undefined, undefined, 'Business Development', 'value', 'business-development', document.querySelector('.secret-block .secret-input-category'), 'append');
				createForms('option', undefined, undefined, undefined, undefined, 'Marketing', 'value', 'marketing', document.querySelector('.secret-block .secret-input-category'), 'append');
				createForms('option', undefined, undefined, undefined, undefined, 'Developmnet', 'value', 'development', document.querySelector('.secret-block .secret-input-category'), 'append');
				createForms('input', 'file', 'file', 'file', 'file', undefined, undefined, undefined, document.querySelector('.file-input'), 'append');
				createForms('label', undefined, undefined, undefined, undefined, 'Select File', 'for', 'file', document.querySelector('.secret-block .file-input'), 'append');

				document.querySelector('#secret-blocks a.send-file').addEventListener("click", (e) => {
					e.preventDefault();
				});
				document.querySelector('#secret-blocks a.send-file span').addEventListener("click", (e) => {
					e.preventDefault();
				});


				function animSecret() {
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

				}

				animSecret();


			} else {
				arr = [];
				console.log('Error');
			}
		}
	}
}