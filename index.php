<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient email address (change this to your desired email)
    $to = 'kanusukhija11@gmail.com';

    // Email subject
    $email_subject = 'New Contact Form Submission: ' . $subject;

    // Compose email content
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Full Name: " . $fullname . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Phone: " . $phone . "\n";
    $email_body .= "Message:\n" . $message . "\n";

    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Redirect after successful submission (optional)
        header('Location: thank-you.html');
        exit;
    } else {
        // Handle error
        echo 'Failed to send email. Please try again.';
    }
}
?>
