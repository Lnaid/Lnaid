$(document).ready(function(){

	var current_fs, next_fs, previous_fs; //fieldsets
	var opacity;
	var current = 1;
	var steps = $("fieldset").length;
	var isUnique = true;
	var isAjax = false;

	setProgressBar(current);
	// custom arguments for jquery validation
  	let args = {
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        // name: "required",
        email: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          email: true
        },
        // password: {
        //   required: true,
        //   minlength: 8
        // },

        // confirm_password: {
        //     required: true,
        //     equalTo: "#pass"
        // }
      },
      // Specify validation error messages
      messages: {
        // name: "Please enter your firstname",
        // pass: {
        //   required: "Please provide a password",
        // },

        // confirm_password: {
        //   required: "Please confirm your password",
        //   equalTo: "Password didn't match"
        // },
        email: "Please enter a valid email address"
      },

      // onkeyup: function(element) {$(element).valid()},
      // onfocusout: function(element) {$(element).valid()},
      // onChange: function(element) {$(element).valid()},
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    }

  var form = $("form[name='student-signup-msform']");
  form.validate(args)
  toastr.options = {
        preventDuplicates: true,
        positionClass: "toast-bottom-left",
        timeOut: 0,
    }

	$(".next").click(function(){
		if(form.valid()){
			current_fs = $(this).parent();
			next_fs = $(this).parent().next();

			//Add Class Active
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

			//show the next fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
				step: function(now) {
					// for making fielset appear animation
					opacity = 1 - now;

					current_fs.css({
						'display': 'none',
						'position': 'relative'
					});
					next_fs.css({'opacity': opacity});
				},
				duration: 500
			});
			setProgressBar(++current);
		}else{
			console.log(form.validate(args).valid())
		}
	});

	$(".previous").click(function(){

		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//Remove class active
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

		//show the previous fieldset
		previous_fs.show();

		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
		step: function(now) {
		// for making fielset appear animation
		opacity = 1 - now;

		current_fs.css({
		'display': 'none',
		'position': 'relative'
		});
		previous_fs.css({'opacity': opacity});
		},
		duration: 500
		});
		setProgressBar(--current);
	});

	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar").css("width",percent+"%")
	}

		
	$("#submit").click(function(){
		return ajaxSubmit(form);
		// console.log('sbmit')
	})


	function ajaxSubmit(form) {

			var formValues= form.serialize();
			
			console.log(formValues);

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				url: window.location.origin + '/signup-sponsor',
				method: 'POST',
				// data: {
				// 	"_token": $('meta[name="csrf-token"]').attr('content'),
				// 	"account_type": "individual",
				// 	"name": "John Ken",
				// 	"email": "aironde.v@gmail.com",
				// 	"password": "password"
				// },
				data: formValues,
				
				success: function(res){
					var success = "{{ Session::get('success')['message'] }}";
					console.log('ajax came back successfully')
					// toastr.error(success)
					return isAjax = true;
				},

				error: function(err){
					console.log(err)
				 	errors = err.responseJSON.errors
	                // console.log(err.responseJSON.errors)
	            	for(error in errors){
	                	toastr.error(errors[error][0]);
	                	isUnique = false;
	                	isAjax = true
	            	}
				}
			});
		
	}

});