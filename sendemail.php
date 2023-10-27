<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        $mail->setFrom('hberon00@gmail.com'); // Change this to your email address
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Email sending failed: " . $mail->ErrorInfo;
    }
}
?>