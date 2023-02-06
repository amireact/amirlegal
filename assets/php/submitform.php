<?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "amir.aman@gmail.com";
    $subject = "New Message from $name";
    $txt = "You have received a new message from $name.\n\n" .
           "Email: $email\n\n" .
           "Message:\n$message";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $txt, $headers)) {
      echo "Message sent successfully!";
    } else {
      echo "Error: Could not send email. Please try again later.";
    }
  }
?>
