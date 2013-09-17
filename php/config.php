<?
	//define the receiver of the email
	
	define('TO_NAME','Mike Delano');
	define('TO_EMAIL','michaelb.delano@gmail.com');
	define('SUBJECT','Contact from your website');	
	
	define('TEMPLATE_PATH','template/default.php');
 
	define('SMTP_ENABLE',true); // True to enable SMTP
	define('SMTP_HOST','mail.google.com');
	define('SMTP_USERNAME','michaelb.delano');
	define('SMTP_PASSWORD','Sn00p@l00p');

	// Messages
	define('MSG_INVALID_NAME','Please enter your name.');
	define('MSG_INVALID_EMAIL','Please enter valid e-mail.');
	define('MSG_INVALID_MESSAGE','Please enter your message.');
	define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');

?>