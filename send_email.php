<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Change for other providers (GoDaddy, Bluehost, etc.)
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com';  // Replace with your Gmail
    $mail->Password = 'your-app-password';  // Use an App Password (see below)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Who gets the email
    $mail->setFrom('your-email@gmail.com', 'Astha Shakti');
    $mail->addAddress('your-email@gmail.com'); // Replace with the recipient email
    
    $mail->Subject = 'New Volunteer Registration - Astha Shakti';

    // Form Data
    $mail->Body = "Name: " . $_POST['name'] . "\n";
    $mail->Body .= "Email: " . $_POST['email'] . "\n";
    $mail->Body .= "Phone: " . $_POST['phone'] . "\n";
    $mail->Body .= "Occupation: " . $_POST['occupation'] . "\n";
    $mail->Body .= "Area of Interest: " . $_POST['interest'] . "\n";
    $mail->Body .= "Message: " . $_POST['message'] . "\n";

    // Send email
    $mail->send();
    echo "Thank you! Your registration has been received.";
} catch (Exception $e) {
    echo "Error sending registration: " . $mail->ErrorInfo;
}
?>
