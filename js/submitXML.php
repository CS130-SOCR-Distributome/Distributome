<?php
    // Getting errors without error logs
    // TODO: delete the two lines below during final release version
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    /* check for email injection on the email address
     * Such as:
     * someone@example.com%0ACc:person2@example.com
     * %0ABcc:person3@example.com,person3@example.com,
     * anotherperson4@example.com,person5@example.com
     * %0ABTo:person6@example.com
     */
    function spamcheck($field)
    {
        //filter_var() sanitizes the e-mail
        //address using FILTER_SANITIZE_EMAIL
        $field=filter_var($field, FILTER_SANITIZE_EMAIL);

        //filter_var() validates the e-mail
        //address using FILTER_VALIDATE_EMAIL
        if(filter_var($field, FILTER_VALIDATE_EMAIL))
            return TRUE;
        else
            return FALSE;
    }
    
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
		$from_email = $_POST['email'];
		ini_set("sendmail_from", $from_email);
		$headers = "From: ".$from_email;
		// by default: info@distributome.org
		$to_email = 'fayryuka@gmail.com';
		$subject = 'Request for XML edit';
		// TODO: figure out where to extract the xml message
		$xml = $_POST['xml'];
		
		// check for email address injection
		if (spamcheck($from_email))
		{
		    // compose an email
		    if (mail($to_email, $subject, $xml, $headers))
		    {
		        $response = Array('status' => 'success', 
		                          'from_email' => $from_email, 
		                          'to_email' => $to_email, 
		                          'subject' => $subject,
		                          'xml' => $xml, 
		                          'message' => 'An email has successfully sent to '.$to_email);
		    }
		    else
		    {
		        // fail to deliver the email
		        $response = Array('status' => 'error',
		                          'header' => $headers, 
		                          'to_email' => $to_email, 
		                          'subject' => $subject,
		                          'xml' => $xml, 
		                          'message' => 'Fail to deliver your mail. Please try again.');
		    }
		}
		else
		{
		    // Detect email injection, return failure
		    $response = Array('status' => 'error',
		                      'message' => 'Email address injection was detected. Please try again.');
		}
		
	}
	else
	{
		// captcha code was incorrect
		
		// return error response
		$response = Array('status' => 'error', 
		                  'message' => 'Capthchas do not match. Please try again.');
	}
	
	
	// set the header because we're returning a json object
	header('Content-type: application/json');
	
	// return the response
	echo json_encode($response);
?>
