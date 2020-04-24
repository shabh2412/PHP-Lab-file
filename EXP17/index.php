<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'ssl';
    $mail -> Host = 'smtp.gmail.com';
    $mail -> Port = 465;
    $mail->isHTML();
    $mail->Username = 'Your Email';
    $mail->Password = 'Your Password';
    $mail->setFrom('Your Email');
    $mail->Subject = 'Subject of the mail';
    $mail->Body = 'Hi there! This is an automated test email which has been sent using PHP';
    $recipient1 = 'reciever\'s email address';
    $recipient2 = '2nd recievers email address';
    $mail->addAddress($recipient2);
    $mail->addCC($recipient1);
    $self = 'your email';
    $mail->addReplyTo($self,'your name');
    if($mail->validateAddress($recipient2,FILTER_VALIDATE_EMAIL)){
        echo "Validated";
        if (!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; } else { 
            echo "Message sent!";
        }
    } else{
        echo "Invalid email";
    }
?>