
$("document").ready(function(){
  //validating email_id
  $('#email_id').blur(function(){
	    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	    if (filter.test($('#email_id').val())) {
          $('#email_error').append('okkk');
          alert("error")
          return true;
	    }
	    else {
         $('#email_error').append('Email is incorrect');
	        return false;
	    }
	});

  // password chaking
  // chaking password length 8
  $('#cnf_psw').focusin(function(){
    $('#password_error').empty();
		$('#password_error').append('olx');
  });
  $('#cnf_psw').focusout(function(){
    if(($('#pswd').val().length >= 8) && ($('#pswd').val().length <= 25)){

    }
    else{
      $('#password_error').append('Password between 8 - 25 charecter ');
    }

    //chaking password and confraim password is matched or not
    if($('#cnf_psw').val() != $('#pswd').val()){
      $('#cnfpswd_error').append('password did\'t match');
    }
  });

  //if blank field then dont submit the form
  $('#sub').click(function(){
    var input_val_collection = $('input');
		var flag = 0;
    for(i=0;i<input_val_collection.length;i++)
    {
      if(input_val_collection[i].value == ''){
				flag = 1;
        return false;
      }
    }
		if(flag >= 0)
		{
			$('#blank_error').append('Fields can\'t be empty').css({'color','red'});
		}
  });
});

/*swarup slider*/
	$(function() {
            // create the image rotator
            setInterval("rotateImages()", 2000);
        });

    function rotateImages() 
    {
            var oCurPhoto = $('#hero div.current');
            var oNxtPhoto = oCurPhoto.next();
            if (oNxtPhoto.length == 0)
                oNxtPhoto = $('#hero div:first');

            oCurPhoto.removeClass('current').addClass('previous');
            oNxtPhoto.css({ opacity: 0.0 }).addClass('current')
                    .animate({ opacity: 1.0 }, 1000,
                                function() {
                                    oCurPhoto.removeClass('previous');
                                });
    }
	/*end swarup slider*/
