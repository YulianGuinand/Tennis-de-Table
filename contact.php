<?php

// Vérifie si le formulaire a été soumis
if (isset($_POST['submit'])) {
  // Récupère les données du formulaire
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Valide les données du formulaire
  $name = htmlspecialchars($name);
  $email = htmlspecialchars($email);
  $message = htmlspecialchars($message);

  // Prépare le corps du message
  $to = 'yulianguinand365@gmail.com';
  $subject = 'Nouveau message de la part de '.$name;
  $message = 'De : '.$name.' ('.$email.')'."\r\n\r\n".$message;
  $headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n".'X-Mailer: PHP/'.phpversion();

  // Envoie le message
  if (mail($to, $subject, $message, $headers)) {
    $success = true;
  } else {
    $error = true;
  }
}

?>