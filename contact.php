<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
  $subject = "New contact request: $_POST[subject]";
  $message = $_POST['body'];
  $headers = 'From: admin@nextskillbd.com' . "\r\n" .
             'Reply-To: ' . $_POST['email']. "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail('mdnafiz221@gmail.com', $subject, $message, $headers);
  die('<h2>Thank you for your email</h2>');
}