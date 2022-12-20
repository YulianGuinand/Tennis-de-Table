<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "yulianguinand365@gmail.com";
  $subject = "Email depuis CCSVA Tennis de table;
  $headers = "From: $email" . "\r\n" .
             "CC: another@email.com";
  $mailBody = "Name: $name\nEmail: $email\n\n$message";
  
  mail($to, $subject, $mailBody, $headers);
  echo "Votre message a été envoyé !";
}
?>