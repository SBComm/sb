
$(document).ready(function(e) {
    $('#login').submit(function(){
			
		var dataString = 'username='+ $('#username').val() + '&password=' + $('#password').val() + '&formname=login';  
		
		$.ajax({  
			type: "POST",  
			url: "index.php",  
			data: dataString,  
			success: function(data) {  
				
				if(!data.is_error) document.location.reload(true);
				else{
					$("#wrapper").effect("shake", { times:2 }, 100);
					$("#loginstatus").html(data.error).addClass("errormsg");
					$("#password").val(""); $("#password").focus();
				}
				
				/*$('#contact_form').html("<div id='message'></div>");  
				$('#message').html("<h2>Contact Form Submitted!</h2>")  
				.append("<p>We will be in touch soon.</p>")  
				.hide()  
				.fadeIn(1500, function() {  
				  $('#message').append("<img id='checkmark' src='images/check.png' />");  
				}); */
			}  
		});
		
		return false;
	});
});