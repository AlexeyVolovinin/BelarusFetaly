<?php
    require 'class.phpmailer.php';

    $mail = new PHPMailer;
    
    // custom information
    $mail->From = 'EMAIL';
    $mail->FromName = 'Fetaly';
    $mail->addAddress('EMAIL');
    $mail->Subject = 'Buying product on Fetaly';
    $mail->Body = "Test with Fetaly";
    $mail->isHTML(true); 
    $mail->send();
    if(!$mail->send()) {
       echo 'Message could not be sent, please try again later.';
       exit;
    }
    
    echo 'Success';
?>