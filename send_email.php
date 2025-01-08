<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'PHPMailer/vendor/phpmailer/phpmailer/src/Exception.php';
require_once 'PHPMailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once 'PHPMailer/vendor/phpmailer/phpmailer/src/SMTP.php';
require_once 'PHPMailer/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $comments = htmlspecialchars($_POST['comments']);

    $response = email($email, $comments, $name, $phone);
    echo json_encode(['status' => $response === "success" ? 'success' : 'error', 'message' => $response]);
    exit;
}

function email($email, $comments, $name, $phone)
{
    $sender = 'support@crimsonhawkltd.co.ke';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'mail.crimsonhawkltd.co.ke';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls'; // Use TLS as 'ssl' is deprecated
    $mail->Port = 587;
    $mail->isHTML(true);
    $mail->Username = $sender;
    $mail->Password = 'Pass4Support!!';

    $mail->Subject = 'New Contact Form Submission';
    $mail->setFrom($sender, 'Crimson Support');
    $mail->Body = '<h3>New Contact Form Submission</h3>
                   <p><strong>Name:</strong> ' . $name . '</p>
                   <p><strong>Email:</strong> ' . $email . '</p>
                   <p><strong>Phone:</strong> ' . $phone . '</p>
                   <p><strong>Message:</strong></p>
                   <p>' . $comments . '</p>';
    $mail->addAddress('pmanyara97@gmail.com'); // Send to the fixed recipient

    if (!$mail->send()) {
        return "Email sending failed: " . $mail->ErrorInfo;
    }

    return "success";
}
