<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        $captcha;
        if(isset($_POST['g-recaptcha-response'])){
            
            $captcha = $_POST['g-recaptcha-response'];
            $secretKey = "6LexBxAUAAAAAEbfuHDSmeicxnR8eS2gBFPGgftf";
            $ip = $_SERVER['REMOTE_ADDR'];
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
            
            $responseKeys = json_decode($response,true);
            
            if(intval($responseKeys["success"]) !== 1) {
                
                http_response_code(400);
                echo "Oops! The reCAPTCHA wasn't entered correctly. Try it again.(x01)";
                
            } else {
                // Your code here to handle a successful verification
        
                // Get the form fields and remove whitespace.
                $name 		= trim(filter_input(INPUT_POST, "InputName", FILTER_SANITIZE_STRING));
                $contact	= trim(filter_input(INPUT_POST, "InputContact", FILTER_SANITIZE_STRING));
                $message	= trim(filter_input(INPUT_POST, "TextareaMessage", FILTER_SANITIZE_STRING));

                // Check that data was sent to the mailer.
                if ( empty($name) OR empty($message) OR empty($name) ) {
                    // Set a 400 (bad request) response code and exit.
                    http_response_code(400);
                    echo "Oops! There was a problem with your submission. Please complete the form and try again.";
                    exit;
                }

                // Set the recipient email address.
                // FIXME: Update this to your desired email address.
                $recipient = "info@ncwbiblefellowship.com";
                //$recipient  = "grekowski@gmail.com";

                // Set the email subject.
                $subject = "New contact from $name";
        
                // Build the email content.
                $email_content = "User: " . $name . "\r\n\r\nWrote:\r\n\r\n" . $message . "\r\n\r\nContact to: " . $contact;

                // Build the email headers.
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email_headers = "From: " . $name . " <" . $contact . ">" . "\r\n";
                    $email_headers.= "Reply-To: " . $name . " <" . $contact . ">" . "\r\n";
                } else {
                    $email_headers = "From: donotreply@ncwbiblefellowship.com" . "\r\n";
                }
                $email_headers.= 'X-Mailer: PHP/' . phpversion();

                // Send the email.
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
            }
            
        } else {
            http_response_code(400);
            echo "Oops! The reCAPTCHA wasn't entered correctly. Try it again.(x03)";
        }
        
        if(!$captcha){
            http_response_code(400);
            echo "Oops! The reCAPTCHA wasn't entered correctly. Try it again.(x04)";
        }
                
                
    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>