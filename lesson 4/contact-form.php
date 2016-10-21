<?php

$to = "c.hendricks@ufl.edu";
$subject = "New Contact Form Submission";
$message = trim(stripslashes($_POST['Message'])); //input comes from form
$from = trim(stripslashes($_POST['Email']));
$name = trim(stripslashes($_POST['Name']));
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;  // if this page errors out this sends to error page
}
$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n"; // this is a page break
$body .= "Email: ";
$body .= $from;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";
$success = mail($to, $subject, $body, "From: <$from>");
if($success) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.php\">";
} else {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
} //takes to thank you pg if successful, error pg if not

?>
