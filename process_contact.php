<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Include the Composer autoloader

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Set up the recipient email and subject
    $to = "brianodongo09@gmail.com";  // Change this to your email
    $subject = "New Message from Contact Form: $name";

    // Create email body
    $body = "You have received a new message from the contact form.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";
    
    // Instantiate PHPMailer
    $mail = new PHPMailer(true);  // The true parameter enables exceptions

    try {
        //Server settings
        $mail->isSMTP();  // Send using SMTP
        $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to Gmail (you can use other providers)
        $mail->SMTPAuth = true;  // Enable SMTP authentication
        $mail->Username = 'xyz@gmail.com';  // Your Gmail address
        $mail->Password = 'mgqdmayxam';  // Your Gmail app password (not your regular password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
        $mail->Port = 587;  // TCP port to connect to (587 is the standard for TLS)

        //Recipients
        $mail->setFrom($email, $name);  // Set the sender
        $mail->addAddress($to);  // Add a recipient (your email address)
        
        // Content
        $mail->isHTML(false);  // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body    = $body;

        // Send the email
        $mail->send();
        echo 'Message sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
