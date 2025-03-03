<?php
// Get form data
$name = $_POST['name_contact'] ?? '';
$last_name = $_POST['lastname_contact'] ?? '';
$email = $_POST['email_contact'] ?? '';
$phone = $_POST['phone_contact'] ?? '';
$message_content = $_POST['message_contact'] ?? '';

// Validate input
if (empty($name) || empty($last_name) || empty($email) || empty($phone) || empty($message_content)) {
    die("Error: All fields are required.");
}

// -------------------------------
// Send email confirmation to the user
// -------------------------------
$to = $email;
$subject = "Thank You for Contacting Us - Hotel Five Elements";
$message = "
    <html>
    <head>
    <title>Contact Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9; }
        .header { text-align: center; background-color: #007BFF; color: white; padding: 10px; }
        .content { margin: 20px 0; }
        .footer { font-size: 12px; color: #555; text-align: center; }
    </style>
    </head>
    <body>
    <div class='container'>
        <div class='header'>
            <h2>Thank You for Contacting Us</h2>
        </div>
        <div class='content'>
            <p>Dear <strong>$name $last_name</strong>,</p>
            <p>Thank you for reaching out to us! We have received your message and will get back to you as soon as possible.</p>
            <p><strong>Your Message:</strong><br>$message_content</p>
            <p>If you have any urgent inquiries, feel free to contact us.</p>
        </div>
        <div class='footer'>
            <p>Hotel Five Elements | <a href='mailto:bookings.fiveelements@gmail.com'>bookings.fiveelements@gmail.com</a></p>
        </div>
    </div>
    </body>
    </html>
";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1" . "\r\n";
$headers .= "From: bookings.fiveelements@gmail.com" . "\r\n"; // Change to your email

$email_sent = mail($to, $subject, $message, $headers);

// -------------------------------
// Send email notification to the admin
// -------------------------------
$admin_email = "adinathd@websaritsolutions.com"; // Change to your admin email
$admin_subject = "New Contact Form Submission - Hotel Five Elements";
$admin_message = "
    <html>
    <head>
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9; }
        .header { text-align: center; background-color: #007BFF; color: white; padding: 10px; }
        .content { margin: 20px 0; }
        .footer { font-size: 12px; color: #555; text-align: center; }
    </style>
    </head>
    <body>
    <div class='container'>
        <div class='header'>
            <h2>New Contact Form Submission</h2>
        </div>
        <div class='content'>
            <p><strong>Name:</strong> $name $last_name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message_content</p>
            <p>Please review the details above and respond accordingly.</p>
        </div>
        <div class='footer'>
            <p>Hotel Five Elements | <a href='mailto:bookings.fiveelements@gmail.com'>bookings.fiveelements@gmail.com</a></p>
        </div>
    </div>
    </body>
    </html>
";
$admin_headers = "MIME-Version: 1.0" . "\r\n";
$admin_headers .= "Content-Type: text/html; charset=ISO-8859-1" . "\r\n";
$admin_headers .= "From: bookings.fiveelements@gmail.com" . "\r\n"; // Change to your email

$admin_notified = mail($admin_email, $admin_subject, $admin_message, $admin_headers);

// Check if emails are sent and notify the user
if ($email_sent && $admin_notified) {
   
    echo "Thank you! <brYour messages have been sent.";
    
} else {
    echo "<br>Failed to send emails.";
}
?>
