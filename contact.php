<?php
 header( 'Location: www.gabstechspace.com' );
    $from = $name;
    $to = "gabstechspace@gmail.com";
    $subject = "New Message from Gab's Tech Space!";
    $name = Trim($_POST['name']);
    $email = Trim($_POST['email']);
    $message = Trim($_POST['message']);
    
    $body ="";
    $body .="Name: ";
    $body .=$name;
    $body .="\n";
    $body .="Email: ";
    $body .=$email;
    $body .="\n";
    $body .="Message: ";
    $body .=$message;
    $body .="\n";

    $send = mail($to, $subject, $body, "From: <$from>");
    

    if($send) {
        print("Thank you for your submission! I should be getting back to you shortly.");
    }
    else {
        print("Unable to send!");
    }
?>