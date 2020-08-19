<?php
if($_POST["message"]){
    mail("emmanuelle.salga2007@gmail.com", "form to email message",
    $_POST["message"], "From: anemail@address");

}
?>