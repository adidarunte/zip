<?php
header('Content-Type: application/json');

// Get form data
$guest_name = $_POST['guest_name'] ?? '';
$guest_email = $_POST['guest_email'] ?? '';
$guest_mobile = $_POST['guest_mobile'] ?? '';
$room_type = $_POST['room_type'] ?? '';
$checkin_date = $_POST['checkin_date'] ?? '';
$checkout_date = $_POST['checkout_date'] ?? '';
$adults_booking = $_POST['adults_booking'] ?? 1;
$childs_booking = $_POST['childs_booking'] ?? 0;

// Validate input
if (empty($guest_name) || empty($guest_email) || empty($guest_mobile) || empty($room_type) || empty($checkin_date) || empty($checkout_date)) {
    echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
    exit;
}

// Send email confirmation (same logic as before)
$to = $guest_email;
$subject = "Booking Confirmation - Hotel Five Elements";
$message = "<html><body>";
$message .= "<h2>Booking Confirmation</h2>";
$message .= "<p>Dear $guest_name,</p>";
$message .= "<p>Thank you for booking the <strong>$room_type</strong>.</p>";
$message .= "<p><strong>Check-in:</strong> $checkin_date</p>";
$message .= "<p><strong>Check-out:</strong> $checkout_date</p>";
$message .= "<p><strong>Adults:</strong> $adults_booking</p>";
$message .= "<p><strong>Children:</strong> $childs_booking</p>";
$message .= "<p>We look forward to welcoming you!</p>";
$message .= "</body></html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
$headers .= "From: bookings.fiveelements@gmail.com" . "\r\n";

$mail_sent = mail($to, $subject, $message, $headers);

if ($mail_sent) {
    echo json_encode(['status' => 'success', 'message' => 'Booking submitted successfully!']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to send confirmation email.']);
}
?>
