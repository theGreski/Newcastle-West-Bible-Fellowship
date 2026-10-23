<?php

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(400);
    echo "Oops! There was a problem with your submission. Please try again later!";
    exit();
}

// Check for honeypot 
if (!isset($_POST['fname']) || strlen($_POST['fname']) > 0) {
    http_response_code(400);
    echo "Oops! There was a problem with your submission. Please try again later!";
    exit();
}

$name    = trim(filter_input(INPUT_POST, "InputName", FILTER_UNSAFE_RAW) ?? '');
$contact = trim(filter_input(INPUT_POST, "InputContact", FILTER_UNSAFE_RAW) ?? '');
$message = trim(filter_input(INPUT_POST, "TextareaMessage", FILTER_UNSAFE_RAW) ?? '');
$cal     = trim(filter_input(INPUT_POST, "cal", FILTER_UNSAFE_RAW) ?? '');
$n1      = filter_input(INPUT_POST, "n1", FILTER_VALIDATE_INT) ?: 0;
$n2      = filter_input(INPUT_POST, "n2", FILTER_VALIDATE_INT) ?: 0;
$captcha = filter_input(INPUT_POST, "math", FILTER_VALIDATE_INT) ?: 0;

// Check that data was sent to the mailer.
if (empty($name) OR empty($message) OR empty($name) OR empty($captcha) OR empty($n1) OR empty($n2) OR empty($cal)) {
    http_response_code(400);
    echo "Oops! There was a problem with your submission. Please complete the form and try again.";
    exit();
}

// Validate math CAPTCHA calculation using strict comparison.
$isCaptchaValid = false;
switch ($cal) {
    case "+":
        $isCaptchaValid = ($n1 + $n2 === $captcha);
        break;
    case "*":
        $isCaptchaValid = ($n1 * $n2 === $captcha);
        break;
    default:
        $isCaptchaValid = false;
        break;
}

if (!$isCaptchaValid) {
    http_response_code(400);
    echo "Oops! There was a problem with your submission. Please complete the form and try again.";
    die();
}

// Strip unsafe tags for output safety in email headers and body
$safeName = strip_tags($name);
$safeMessage = strip_tags($message);

// Build the email headers securely.
$to = "info@ncwbiblefellowship.com";
$subject = "New contact from " . $safeName;

$headers = "From: donotreply@ncwbiblefellowship.com\r\n";

if (filter_var($contact, FILTER_VALIDATE_EMAIL)) {
    $headers = "From: " . $safeName . " <" . $contact . ">\r\n";
    $headers .= "Reply-To: " . $safeName . " <" . $contact . ">\r\n";
}
$headers .= 'X-Mailer: PHP/' . PHP_VERSION;

$content = "User: " . $safeName . "\r\n\r\nWrote:\r\n\r\n" . $safeMessage . "\r\n\r\nContact to: " . $contact;

// Send email
if (mail($to, $subject, $content, $headers)) {
    http_response_code(200);
    echo "Message sent!";
} else {
    http_response_code(500);
    echo "Oops! Something went wrong and we couldn't send your message.(x02)";
}

?>