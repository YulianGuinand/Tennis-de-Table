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

<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de contact</title>
</head>
<body>
  <?php if (isset($success) && $success): ?>
    <p>Votre message a été envoyé avec succès !</p>
  <?php elseif (isset($error) && $error): ?>
    <p>Une erreur s'est produite lors de l'envoi de votre message.</p>
  <?php else: ?>
    <form action="" method="post">
        <input type="text" id="name" name="name" class="contact__text" placeholder="Nom :"><br>
        <input type="text" id="email" name="email" class="contact__text" placeholder="Email :"><br>
        <textarea id="message" name="message" class="contact__text" placeholder="Message"></textarea><br>
        <input class="contact__btn" name="submit" type="submit" value="Envoyer">
      </form>
  <?php endif; ?>
</body>
</html>
