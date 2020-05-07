/*
*Developed and Maintaining by:Siddharth Singh, v 01.00
*Detail:Use for Om contact form
*Author URI: http://fileworld.in/
*Email:siddharthsingh91@gmail.com
*/

jQuery(document).ready(function(e) {
	var message=jQuery(".message").text();
	
	if(message!=""){jQuery("#login h1").after('<p class="message-view">*'+message+'</p>');}
	jQuery(".message").hide();
    jQuery("#login h1").after('<h3><span>WELCOME </span><br/> "The difference between ordinary and extraordinary is that little extra".</h3>');
	
	jQuery("#backtoblog").html('<a title="Are you lost?" href="http://www.alacart.com">← Back to www.alacart.com</a>');
});





