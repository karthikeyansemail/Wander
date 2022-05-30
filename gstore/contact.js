
(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {
        $(document).on('submit','#contact-form',function(e){
            
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();

            if (!name) {
                 $('#name').removeClass('error');
                 $('#name').addClass('error').attr('placeholder','Name *');
             }else{
                 $('#name').removeClass('error');
             }
            if (!email) {
                 $('#email').removeClass('error');
                 $('#email').addClass('error').attr('placeholder','Email *')
             }else{
                 $('#email').removeClass('error');
             }
            if (!message) {
                 $('#message').removeClass('error');
                 $('#message').addClass('error').attr('placeholder','Message *')
             }else{
                 $('#message').removeClass('error');
             }
             
            
            if ( name && email && message ) {
             	$.ajax({
	                 type: "GET",
	                 url:'https://www.growstoreindia.com/mailer/mailer_website.php',
	                 data:{
                         'name': name,
                         'email': email,
                         'email_content': message,
	                 },
	                 success:function(data){
                         $('#contact_form_submit').children('.email-success').remove();
                         $('#contact_form_submit').prepend('<span class="alert alert-success email-success">Message Sent Sucessfully</span>');
                         $('#name').val('');
                         $('#email').val('');
                         $('#message').val('');
						  document.getElementById("message_submit_progress").style.display="none";
							document.getElementById("msg_submit").style.display="block";
 
                         $('.email-success').fadeOut(7000);
	                 }
	             });
             }else{
                $('#contact_form_submit').children('.email-success').remove();
                $('#contact_form_submit').prepend('<span class="alert alert-danger email-success">somenthing is wrong</span>');
                $('.email-success').fadeOut(6000);
             }

            
            
        });
    })

}(jQuery));	
