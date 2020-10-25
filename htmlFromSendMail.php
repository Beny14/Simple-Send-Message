<?php
  include 'connect.php'; // include data base
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Send-Email</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <main>
      <p>SEND E-MAIL</p>
        <form class="contact-form" action="contactform.php" method="post">
          <input type="text" name="name" placeholder="Full name"><br><br>
          <input type="text" name="mail" placeholder="Your e-mail"><br><br>
          <input type="text" name="subject" placeholder="Subject"><br><br>
          <textarea name="mesage" placeholder="Message"></textarea><br><br>
          <button type="submit" name="submit">Send mail</button>
        </form>
    </main>
  </body>
</html>
