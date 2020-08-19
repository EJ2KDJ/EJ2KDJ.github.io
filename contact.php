<?php
if($_POST["submit"]) {
    $recipient="emmanuelle.salga2007@gmail.com"
    $subject="Form to email message"
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"]
    $message=$_POST["message"]

    $mailBody="Name: $sender/nEmail:
   $senderEmail/n/n$message";

       mail($recipient, $subject, $mailBody, "from: $sender <$senderEmail>");

       $thankYou="<p> thank you! Your message has been sent.</p>";
}

?>