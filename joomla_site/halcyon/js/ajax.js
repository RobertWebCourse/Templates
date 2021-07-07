jQuery(function($) {
	function sendEmail(getEmailInput, getBtn) {
		let subButton = $(getBtn);

		subButton.click(function(e) {
			e.preventDefault();

			if($('input[type="email"]').hasClass('error')) {
				$('input[type="email"]').removeClass('error');
			}

			if($('.subscribe-content form p').hasClass('error')) {
				$('.subscribe-content form p').css('display', 'none');
				$('.subscribe-content form p.error').text('');
			}

			let getEmail = $(getEmailInput).val();


			$.ajax({
				url: "templates/halcyon/ph/form.php",
				type: "POST",
				dataType: "json",
				data: {
					email: getEmail
				},
				beforeSend: beforeSendInfo,
				success: succesSend,
				error: errorSend
			});

			function beforeSendInfo () {
				console.log('Please wait, sending info...');
			}

			function succesSend(data) {
				if(data.status === true) {
					window.location.reload();
				} else {
					$(`input[type="${data.field}"]`).addClass('error');
					$('.subscribe-content form p.error').css('display', 'block');
					$('.subscribe-content form p.error').text(data.message);
				}
			}

			function errorSend (xhr, status, error) {
				console.log('Error: ' + xhr.responseText)
			}
		});
	}

	sendEmail('.section-subscribe input[type="email"]', '.section-subscribe input[type="submit"]');
});