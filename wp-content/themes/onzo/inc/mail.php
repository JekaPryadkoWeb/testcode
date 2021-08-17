<?php
add_action('wp_ajax_send_contactus', 'send_contactus');
add_action('wp_ajax_nopriv_send_contactus', 'send_contactus');

function send_contactus()
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['message'];

	$to = get_option('contact_email');

	$message = "";
	$message .= "<p><b>From:</b> " . $email . "</p>";
	$message .= "<p><b>Name:</b> " . $name . "</p>";
	$message .= "<p><b>Message:</b> " . $msg . "</p>";

	remove_all_filters('wp_mail_from');
	remove_all_filters('wp_mail_from_name');

	$from = $name . " <" . $email . ">";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: " . $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$subject = 'Контактная форма AtlasLogistics';

	$mail = wp_mail($to, $subject, $message, $headers);

	if($mail){
		echo json_encode( array( 'success' => true), JSON_FORCE_OBJECT );
	}else{
		echo json_encode( array( 'success' => false), JSON_FORCE_OBJECT );
	}

	wp_die();
}
