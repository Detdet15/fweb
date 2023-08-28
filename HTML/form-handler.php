<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$course = $_POST['course'];
$message = $_POST['message'];

$email_from = 'maridettedc15@gmail.com';
$email_subject =  'New Form Submission';
$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "Course: $ourse.\n".
                "Message: $message.\n";

$to = 'jdetdc0915@gmail.com';
$headers = "From:  $email_from\r\n";
$headers = "Reply-To: $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>