<!DOCTYPE html>
<html lang="de">
  <head>
  <link rel="shortcut icon" type="image/x-icon" href="Bilder/Logo.jpg">
  <link href="style.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>Baendeli-Startseite</title>
  </head>
  <body>


<?php

  if(isset($_POST["Submit"])) {
    mail("leo.bontorno@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' präorität: '.$_POST["präorität"].' Nachricht: '.$_POST["Nachricht"]);

     ?>
      <h1 id="geschafft">Formular wurde abgesendet</h1>
     <?php

  }


 ?>
    <div id="Kopf">
  <div id="Logo"></div>
  <div id="Übersicht">
  <p>
  <a href="#" id="Kontakte">Kontakte</a>
  <a href="#">Shop</a>
  <a href="#">Über uns</a>
  <a href="#">Startseite</a>
  </p>
  </div>
    </div>

    <div id="Banner">
  <h1 id="Muster">Baendeli-Shop</h1>
    </div>
<div id="text">

<div id="Eingabe-Feld">
  <legend id="überschrift">Kontaktformular</legend>
  <form action="index.php" method="post"><br>
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <textarea id="Textarea" name="Nachricht" rows="10" cols="35"></textarea><br>
    <select name="präorität" required><
        <option value="kauf">Kauf</option>
        <option value="Koperation">Koperation</option>
        <option value="Feed-back">Feed-back</option>
    </select>
    <button type="select" name="submit">Absenden</button>
  </form>
</div>


</div>
  </body>
</html>
