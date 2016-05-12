jQuery(document).ready(function($){  
		$('#loginForm').click(function(e) {
		         e.stopPropagation();
		    });
		$("#loginLink").click(function () {
		    $("#loginContainer").addClass('show');
		});
		$("#loginContainer").click(function () {
		    $("#loginContainer").removeClass('show');   
		});
		$('#user_login').attr( 'placeholder', 'Username' );
		$('#user_pass').attr( 'placeholder', 'Password' );
		
});
