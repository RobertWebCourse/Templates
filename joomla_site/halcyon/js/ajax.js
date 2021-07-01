jQuery(function($) {
	function sendEmail() {
		let subButton = $('.section-subscribe input[type="submit"]');

		subButton.click(function(e) {
			e.preventDefault();

			if($('input[type="email"]').hasClass('error')) {
				$('input[type="email"]').removeClass('error');
			}

			if($('.subscribe-content form p').hasClass('error')) {
				$('.subscribe-content form p').css('display', 'none');
				$('.subscribe-content form p.error').text('');
			}

			
			let getEmail = $('.section-subscribe input[type="email"]').val();


			$.ajax({
				url: "templates/halcyon/php/form.php",
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
				console.log(xhr.responseText)
			}
		});
	}

	sendEmail();
});