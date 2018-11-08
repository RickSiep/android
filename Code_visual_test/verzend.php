<?php

$to = '24609@ma-web.nl';
$naam = $_POST['naam'];
$onderwerp = $_POST['onderwerp'];
$inhoud = $_POST['inhoud'];
$headers = 'From: ' . $_POST['from'];

mail($to, $onderwerp,$naam, $inhoud, $headers);

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/verzend.css">
    <meta charset="utf-8">
    <title>gefeliciteerd!</title>
  </head>
  <body>

    <div class="zoom">
    <h1>Gelukt!</h1>
    <h2>Binnen 24 uur zult u een mailtje terug krijgen met een gepast antwoord.</h2>
    <h2>Klik <a href="index.html">hier</a> terug te gaan naar de homepage</h2>
  </div>

  </body>
</html>
