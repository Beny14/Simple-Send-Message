<?php

  if (isset($_POST['submit'])) { //verifica daca este apasat butonul de submit
    // mysqli_real_escape_string() - ne protejeaza de SQL Injection
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $subject = mysqli_real_escape_string($connect, $_POST['subject']);
    $mailFrom = mysqli_real_escape_string($connect, $_POST['mail']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);

    $mailTo = "beny_beny_14@yahoo.com"; // Catre cine sa se trimita email
    $headers = "From: " . $mailFrom;
    $txt = "You have recive an e-mail from " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers); // Functia de mail() folosita
    header("Location: otherphp.php?mailsend");
  }

?>
