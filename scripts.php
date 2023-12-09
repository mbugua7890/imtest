<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate form data (add your own validation logic)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle validation error
        echo "Please fill in all the required fields.";
    } else {
        // Process the form data (you can send an email, save to a database, etc.)
        // For demonstration purposes, we'll just display the submitted data
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Message: $message<br>";
    }
} else {
    // Handle non-POST requests (optional)
    echo "Invalid request method.";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate form data (add your own validation logic)
    if (empty($name) || empty($email) || empty($message)) {
        // Handle validation error
        echo "Please fill in all the required fields.";
    } else {
        // Process the form data
        $to = "your_email@example.com"; // Replace with your email address
        $subject = "New Form Submission";
        $headers = "From: $email\r\nReply-To: $email";

        // Send email
        if (mail($to, $subject, $message, $headers)) {
            // Email sent successfully
            echo "Thank you for your submission! We will get back to you soon.";
        } else {
            // Failed to send email
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
} else {
    // Handle non-POST requests (optional)
    echo "Invalid request method.";
    // After the successful email send
header("Location: thank-you.html"); // Replace with the actual path of your thank-you page
exit(); // Ensure that no other content is sent
}
?>


  