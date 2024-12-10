<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $to = "wlodzyn95@gmail.com";
    $subject = "Conference Registration: $name"; 
    $message = "Name: $name\nEmail: $email\n";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Registration successful. Thank you!"; }
    else {
        echo "Error sending registration. Please try again."; }
} 