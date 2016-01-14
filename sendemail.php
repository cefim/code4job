<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
$to   		= 'name@domain.dot';//replace with your email

$headers = 'MIME-Version: 1.0'."\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1'."\n";
$headers .= 'From:'. $name .'<'. $from .'>'."\n";
$headers .= 'Reply-To:'. $from ."\n";
$headers .= 'Subject: {$subject}'."\n";
$headers .= 'X-Mailer: PHP/'.phpversion();

mail($to, $subject, $message, $headers);

die;
