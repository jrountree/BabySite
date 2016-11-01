<?php

$EmailFrom = ($_POST['Email']);
$EmailTo = "jesse.a.rountree@gmail.com";
$Subject = "Baby Guessing Game Submission";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Month = Trim(stripslashes($_POST['Month'])); 
$Day = Trim(stripslashes($_POST['Day']));
$Hour = Trim(stripslashes($_POST['Hour']));
$Minute = Trim(stripslashes($_POST['Minute']));
$Ampm = Trim(stripslashes($_POST['Ampm']));


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Month;
$Body .= "\n";
$Body .= $Day;
$Body .= "\n";
$Body .= $Hour;
$Body .= "\n";
$Body .= $Minute;
$Body .= "\n";
$Body .= $Ampm;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>