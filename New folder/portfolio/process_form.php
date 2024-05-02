<?php
if ($_SERVER[“REQUEST_METHOD”] == “POST”) {
  $name = $_POST[‘Name’];
  $email = $_POST[‘Email’];
  $message = $_POST[‘Message’];

  // Email settings
  $to = “anixicore@gmail.com”;
  $subject = “New message from $name”;
  $body = “Name: $name\nEmail: $email\nMessage: $message”;

  // Send email
  if (mail($to, $subject, $body)) {
    echo “Message sent successfully!”;
  } else {
    echo “Error sending message.”;
  }
}
?>