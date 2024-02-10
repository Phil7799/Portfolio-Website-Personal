<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "philipwanyori@gmail.com"; // Replace with your email address
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // You can add additional logic here, e.g., redirect to a thank-you page.
}
?>
