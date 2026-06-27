<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@mahalaxmimotors.co.in';
    $mail->Password = 'Vkatng&0354';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    $mail->setFrom('contact@mahalaxmimotors.co.in', 'Mahalaxmi Motors Website');
    
    // SEND TO BOTH
    $mail->addAddress('support@mahalaxmimotors.co.in');
    $mail->addAddress('contact@mahalaxmimotors.co.in');
    
    // Reply goes to customer
    if (!empty($_POST['email'])) {
        $mail->addReplyTo($_POST['email'], $_POST['name'] ?? 'Customer');
    }
    
    // Determine subject based on form type
    $hasServiceDate = !empty($_POST['service_date']);
    $hasRegistration = !empty($_POST['registration_no']);
    
    if ($hasServiceDate || $hasRegistration) {
        $mail->Subject = 'New Car Service Booking';
    } else {
        $mail->Subject = 'New Enquiry from Website';
    }
    
    // Build email body
    $mail->Body = "Name: " . ($_POST['name'] ?? '') . "\n" .
                  "Phone: " . ($_POST['phone'] ?? '') . "\n" .
                  "Email: " . ($_POST['email'] ?? '') . "\n";
    
    // Add optional fields if present
    if (!empty($_POST['car_model'])) {
        $mail->Body .= "Car Model: " . $_POST['car_model'] . "\n";
    }
    
    if (!empty($_POST['km_driven'])) {
        $mail->Body .= "KM Driven: " . $_POST['km_driven'] . "\n";
    }
    
    if (!empty($_POST['registration_no'])) {
        $mail->Body .= "Registration No: " . $_POST['registration_no'] . "\n";
    }
    
    if (!empty($_POST['service_date'])) {
        $mail->Body .= "Preferred Service Date: " . $_POST['service_date'] . "\n";
    }
    
    if (!empty($_POST['service_type'])) {
        $mail->Body .= "Service Type: " . $_POST['service_type'] . "\n";
    }
    
    if (!empty($_POST['message'])) {
        $mail->Body .= "\nMessage:\n" . $_POST['message'] . "\n";
    }
    
    $mail->send();
    
    echo json_encode([
        'status' => 'success'
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => $mail->ErrorInfo
    ]);
}