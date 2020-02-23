<?php


    $visitor_name = "";
    $visitor_email = "";
    $visitor_subject = "";
    $visitor_message = "";
    $recipient = "dnv19191@gmail.com";

    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
    }

    if(isset($_POST['visitor_subject'])) {
        $visitor_subject = filter_var($_POST['visitor_subject'], FILTER_SANITIZE_STRING);
    }

    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }


    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";

    mail($recipient, $visitor_subject, $visitor_message, $headers);




?>
