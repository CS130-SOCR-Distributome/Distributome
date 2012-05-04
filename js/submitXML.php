<?php
	// needed to ensure securimage Captcha will work
	session_start();

	// include the securimage library
	include_once 'securimage/securimage.php';

	// create a new Securimage object
	$securimage = new Securimage();
	
	
	if ( $securimage->check($_POST['captcha_code']) ) 
	{
		// captcha code entered was correct
		
		// gather inputs from user		
		$email = $_POST['email'];
		$xml = $_POST['xml'];
		
		$response = Array('status' => 'success');
	}
	else
	{
		
		$response = Array('status' => 'error');
	}
	
	

	header('Content-type: application/json');
	echo json_encode($response);
?>