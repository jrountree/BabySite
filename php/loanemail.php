<?php

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$note = $_POST['user_note'];
$subject="Loan Assistance From Baby Site";
$headersep = "\r\n";
$header = "From: $name <$email>" . $headersep . "Reply-To: $name <$email> . $headersep";
$message = "From: $name\n\nMessage: \n\nEmail: $email\n\nNote:\n\n$note";
$to ='jesse.a.rountree@gmail.com,jennyvdh@yahoo.com';
$fail = "Please fill out everything before submitting.  Thank you!";


if (!empty ($_POST['user_email']) 
	&& !empty ($_POST['user_name'])
	&& !empty ($_POST['user_note']))	{

  		mail($to, $subject, $message, $header);
		header('Location: http://www.jesserountree.com/babyjamesrountree/submission.html');
}

else {

	header('Location: http://www.jesserountree.com/babyjamesrountree/fail.html');

}

?>
