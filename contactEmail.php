<?php
$to = "neopunzalan@gmail.com";
$subject = "From TGI website";
$txt = "PHP mail";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = 'From: neopunzalan@gmail.com' . "\r\n" .
$headers .= 'CC: cppunzalan@trends.com.ph';

// mail($to,$subject,$txt,$headers);
if ( mail($to, $subject, $txt, $headers)) {
   echo("Email successfully sent to $to ...");
} else {
   echo("Email sending failed...");
}
?>
