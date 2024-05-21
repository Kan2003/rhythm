<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are filled
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || empty($_POST['number'])) {
        echo "All fields are required.";
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $number = $_POST['number'];

        // Email information
        $to = "rhythmtrades06@gmail.com";
        $subject = "Contact Form Submission";
        $body = "Name: $name\n\nEmail: $email\n\nMessage: $message\n\nNumber: $number\n\n";

        // Send email
        if (mail($to, $subject, $body)) {
            header("Location: index.html");
        } else {
            echo "Message sending failed.";
        }
    }
}
