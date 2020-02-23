<?php

if(isset($_POST['submit'])) {
    $visitor_name = isset($_POST['visitor_name']);
    $visitor_email = isset($_POST['visitor_name']);
    $visitor_subject = isset($_POST['visitor_subject']);
    $visitor_message = isset($_POST['visitor_message']);
    $recipient = "dnv19191@gmail.com";


    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";

    if(mail($recipient, $visitor_subject, $visitor_message, $headers)) {
        echo "<p>Thank you for contacting me! , $visitor_name. Ill try to get back ASAP!.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }

} else {
    echo '<p>Something went wrong</p>';
}

?>
