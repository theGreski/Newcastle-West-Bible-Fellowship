<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please try again later!";
        die();
    }

    // Check for honeypot 
    if (!$_POST['fname'] || strlen($_POST['fname'] > 0)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please try again later!";
        die();
    }

    $name 		= trim(filter_input(INPUT_POST, "InputName", FILTER_SANITIZE_STRING));
    $contact	= trim(filter_input(INPUT_POST, "InputContact", FILTER_SANITIZE_STRING));
    $message	= trim(filter_input(INPUT_POST, "TextareaMessage", FILTER_SANITIZE_STRING));
    $captcha	= trim(filter_input(INPUT_POST, "InputCaptcha", FILTER_SANITIZE_STRING));
    
    // Check that data was sent to the mailer.
    if (empty($name) OR empty($message) OR empty($name) OR empty($captcha)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        die();
    }

    if ($captcha !== "18") {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        die();
    }

    // Build the email.
    $headers = "From: donotreply@ncwbiblefellowship.com" . "\r\n";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers = "From: " . $name . " <" . $contact . ">" . "\r\n";
        $headers.= "Reply-To: " . $name . " <" . $contact . ">" . "\r\n";
    }
    $headers.= 'X-Mailer: PHP/' . phpversion();

    $to = "info@ncwbiblefellowship.com";
    //$to  = "grekowski@gmail.com";

    $subject = "New contact from $name";

    $content = "User: " . $name . "\r\n\r\nWrote:\r\n\r\n" . $message . "\r\n\r\nContact to: " . $contact;

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        //echo "Thank you for contacting ncwbiblefellowship.com. You are very important to us, all information received will always remain confidential. We will contact you as soon as we review your message.";
        echo "Message sent!";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.(x02)";
    }

?>