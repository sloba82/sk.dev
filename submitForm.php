<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';


$urlprezent = $_POST['urlprezent'];
$urlprezent = strtok($urlprezent, '?');

if (  $_POST['name'] != '' ){
    getPostAndSendMail();
    header('Location: '.$urlprezent.'?message=susses');
}else {
    header('Location: '.$urlprezent.'?message=no_susses');
    die();
}
 
    function getPostAndSendMail(){   
        $message;
        foreach($_POST as $key => $value) {
            if ($value == '') {
                $value = "NODATA";
            }
            $message .= $key.": "." ".$value."<br>";
        }
        sendMail($message);
    }        

    function sendMail($message){

        include 'pass.php';
        $mail = new PHPMailer;

        $mail->isSMTP();

        $mail->SMTPDebug = 0; //Enable SMTP debugging, 0 = off (for production use), 1 = client messages, 2 = client and server messages
        $mail->Debugoutput = 'html';

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->Username = $email;
        $mail->Password = $pass;

        $mail->setFrom('dizajnistampa@gmail.com', 'web');
        $mail->addAddress('dizajnistampa@gmail.com', 'print');
        $mail->Subject = 'Stampa knjiga poruka';
        $mail->msgHTML($message);
        $mail->Body = $message;

        if (!$mail->send()) {
            return 9;
        } else {
            return 1;

        }

    }




      
