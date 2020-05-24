$('document').ready(function(){
 var uname_state = false;
 var mail_state = false;
 $('#uname').on('blur', function(){
  var uname= $('#uname').val();
  if (uname== '') {
  	uname_state = false;
  	return;
  }
  $.ajax({
    url: 'registration.php',
    type: 'post',
    data: {
    	'uname_check' : 1,
    	'uname' : uname,
    },
    success: function(response){
      if (response == 'taken' ) {
      	uname_state = false;
      	$('#uname').parent().removeClass();
      	$('#uname').parent().addClass("form_error");
      	$('#uname').siblings("span").text('Sorry... uname already taken');
      }else if (response == 'not_taken') {
      	uname_state = true;
      	$('#uname').parent().removeClass();
      	$('#uname').parent().addClass("form_success");
      	$('#uname').siblings("span").text('uname available');
      }
    }
  });
 });		
  $('#mail').on('blur', function(){
 	var mail = $('#mail').val();
 	if (mail == '') {
 		mail_state = false;
 		return;
 	}
 	$.ajax({
      url: 'registration.php',
      type: 'post',
      data: {
      	'mail_check' : 1,
      	'mail' : mail,
      },
      success: function(response){
      	if (response == 'taken' ) {
          mail_state = false;
          $('#mail').parent().removeClass();
          $('#mail').parent().addClass("form_error");
          $('#mail').siblings("span").text('Sorry... Email already taken');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#mail').parent().removeClass();
      	  $('#mail').parent().addClass("form_success");
      	  $('#mail').siblings("span").text('Email available');
      	}
      }
 	});
 });

 $('#reg_btn').on('click', function(){
 	var uname= $('#uname').val();
 	var email = $('#mail').val();
 	var password = $('#password').val();
 	if (uname_state == false || mail_state == false) {
	  $('#error_msg').text('Fix the errors in the form first');
	}else{
      // proceed with form submission
      $.ajax({
      	url: 'registration.php',
      	type: 'post',
      	data: {
      		'save' : 1,
      		'email' : mail,
      		'uname' : uname,
      		'password' : password,
      	},
      	success: function(response){
      		alert('user saved');
      		$('#username').val('');
      		$('#email').val('');
      		$('#password').val('');
      	}
      });
 	}
 });
});