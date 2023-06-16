$(document).ready(function () {
	'use strict';
	//Login Register Validation
	if ($("form.form-horizontal").attr("novalidate") != undefined) {
		$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
	}

	if ($("#user-password").val() != 'We1c0me@123') {
		$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
	}

	$("#user-password").focusout(function () {
		if ($("#user-password").val() != 'We1c0me@123') {
			$("#wrong_password").show();
		} else if ($("#user-password").val() == 'We1c0me@123') {
			$("#wrong_password").hide();
		}
	});

	$("form.form-horizontal").submit(function (e) {
		if ($("#user-password").val() != 'We1c0me@123') {
			$("#wrong_password").show();
			e.preventDefault();
		} else if ($("#user-password").val() == 'We1c0me@123') {
			$("#wrong_password").hide();

		}
	});

	// Remember checkbox
	if ($('.chk-remember').length) {
		$('.chk-remember').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
		});
	}

	// For change default year in copyright
	var $year = new Date().getFullYear();
	$(".year").text($year);



	$("input#user-password").blur(function () {
		$('#dynamic').removeClass("dynamic_margin");
		$("#pwd_strength_wrap").fadeOut(400);
	});
	$("input#user-password").on("focus keyup", function () {
		var score = 0;
		var a = $(this).val();
		var desc = new Array();

		// strength desc
		desc[0] = "Too short";
		desc[1] = "Weak";
		desc[2] = "Good";
		desc[3] = "Strong";
		desc[4] = "Best";

		$("#pwd_strength_wrap").fadeIn(400);

		// password length
		if (a.length >= 6) {
			$("#length").removeClass("invalid").addClass("valid");
			score++;
		} else {
			$("#length").removeClass("valid").addClass("invalid");
		}

		// at least 1 digit in password
		if (a.match(/\d/)) {
			$("#pnum").removeClass("invalid").addClass("valid");
			score++;
		} else {
			$("#pnum").removeClass("valid").addClass("invalid");
		}

		// at least 1 capital & lower letter in password
		if (a.match(/[A-Z]/) && a.match(/[a-z]/)) {
			$("#capital").removeClass("invalid").addClass("valid");
			score++;
		} else {
			$("#capital").removeClass("valid").addClass("invalid");
		}

		// at least 1 special character in password {
		if (a.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) {
			$("#spchar").removeClass("invalid").addClass("valid");
			score++;
		} else {
			$("#spchar").removeClass("valid").addClass("invalid");
		}
		if (score > 1) {
			$('#cnfm_pwd').prop('disabled', false);
			$('#cnfm_pwd').removeClass('disabled_input');
		} else if (score < 2) {
			$('#cnfm_pwd').prop('disabled', true);
			$('#cnfm_pwd').addClass('disabled_input');
			$('#cnfm_pwd').val('');
		}
		if (a.length > 0) {
			//show strength text
			$("#passwordDescription").text(desc[score]);
			// show indicator
			$("#passwordStrength").removeClass().addClass("strength" + score);
		} else {
			$("#passwordDescription").text("Password not entered");
			$("#passwordStrength").removeClass().addClass("strength" + score);
		}
	});

	$("#forget_username_no").hide();
	$("#email_check").click(function () {
		$("#forget_username_ip").show()
		// $("#email_span").show()
		// $("#mobile_span").hide()
		$("#forget_username_no").hide()
	});

	$("#mobile_no").click(function () {
		$("#forget_username_no").show()
		$("#forget_username_ip").hide()
	});

	$("#forget_username_submit").click(function () {
		if (($("#email_check").is(":checked"))) {
			$(".before_submit").hide();
			$(".submit_div").show();
			$('.email_span').show();
			$('.mobile_span').hide();
			$("#forget_username_submit").hide()
			$(".login_link_btn").removeClass("float-sm-left");


		} else if (($("#mobile_no").is(":checked"))) {
			$(".before_submit").hide();
			$(".submit_div").show();
			$('.email_span').hide();
			$('.mobile_span').show();
			$("#forget_username_submit").hide()
			$(".login_link_btn").removeClass("float-sm-left");


		}
	});
});