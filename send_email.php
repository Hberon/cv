<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: hberon00@gmail.com"; // Change this to your email address
$request = mail($to, $subject, $message, $headers);
    if ($request) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed." . "request: " . $request . "to: " . $to  . "subject: " . $subject . "message: " . $message ; 
    }
}
?>