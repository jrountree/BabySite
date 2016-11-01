<?php

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$subject="Baby Guessing Game Submission";
$Month = $_POST['user_month'];
$day = $_POST['user_day']; 
$hour = $_POST['user_hour'];
$minute = $_POST['user_minute'];
$ampm = $_POST['user_ampm'];
$headersep = "\r\n";
$header = "From: $name <$email>" . $headersep . "Reply-To: $name <$email> . $headersep";
$message = "From: $name\n\nMessage: \n\nEmail: $email\n\nMonth: $Month\n\nDay: $day\n\nTime: $hour$minute$ampm";
$to ='jesse.a.rountree@gmail.com,jennyvdh@yahoo.com';
$confirmation = "From: $name\n\nMessage: \n\nThank you for your game submission!  This is the information you provided for your records.  Good luck!\n\nYour Guess:\n\nMonth: $Month\n\nDay: $day\n\nTime: $hour$minute$ampm";

if (!empty ($_POST['user_email']) 
	&& !empty ($_POST['user_name']) 
	&& ($_POST['user_month']) != "choose"
	&& ($_POST['user_day']) != "choose" 
	&& ($_POST['user_hour']) != "choose"
	&& ($_POST['user_day']) != "choose"
	&& !empty($_POST['user_ampm']))	{

  		mail($to, $subject, $message, $header);

		// Confirmation Email to User
		mail($_POST['user_email'], $subject, $confirmation, $header);
		header('Location: http://www.jesserountree.com/babyjamesrountree/submission.html');

}

else {
	header('Location: http://www.jesserountree.com/babyjamesrountree/fail.html');
}

?>
