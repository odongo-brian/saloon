<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = strip_tags(trim($_POST["name"]));
    $email = strip_tags(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    // Check that data was provided
    if (empty($firstName) || empty($lastName) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        http_response_code(400);
        echo "Please complete all fields.";
        exit;
    }

    // Initialize PHPMailer object
    $phpmailer = new PHPMailer(true);

    try {
        // Set up SMTP with Mailtrap
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 25;
        $phpmailer->Username = 'c13e843fce5ee6'; // Mailtrap username
        $phpmailer->Password = '2b9657278e1a6a'; // Mailtrap password

        // Recipient and sender settings
        $phpmailer->setFrom($email, "$firstName $lastName");
        $phpmailer->addAddress('jemo9434@gmail.com'); // Recipient email

        // Email subject & body
        $phpmailer->isHTML(true);
        $phpmailer->Subject = "New Message from Swizz Beauty and Cutz: $subject";
        $phpmailer->Body = nl2br("First Name: $firstName\nLast Name: $lastName\nEmail: $email\n\nMessage:\n$message");

        // Send the email
        if ($phpmailer->send()) {
            http_response_code(200);
            echo "Thank you! Your message has been sent.";
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong, and we couldn't send your message.";
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo "Mailer Error: {$phpmailer->ErrorInfo}";
    }
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
