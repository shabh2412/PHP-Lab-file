<?php
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'ssl';
    $mail -> Host = 'smtp.gmail.com';
    $mail -> Port = 465;
    $mail->isHTML();
    $mail->Username = 'automated.rishabh.panesar@gmail.com';
    $mail->Password = 'R#$%HHJK';
    $mail->setFrom('automated.rishabh.panesar@gmail.com');
    $mail->Subject = 'Automated Mail by Rishabh Panesar';
    $mail->Body = 'Hi there! This is an automated test email which has been sent using PHP';
    $saga = 'sagarikasahoo16@gmail.com';
    $rish = 'rishabh.panesar2609@gmail.com';
    $mail->addAddress($rish);
    $mail->addCC($saga);
    $self = 'automated.rishabh.panesar@gmail.com';
    $mail->addReplyTo($self,'Rishabh Panesar');
    if($mail->validateAddress($rish,FILTER_VALIDATE_EMAIL)){
        echo "Validated";
        if (!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; } else { 
            echo "Message sent!";
        }
    } else{
        echo "Invalid email";
    }
?>