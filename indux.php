<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Übung</title>
  </head>
  <body>
    <?php
    //hier wird der ganze Code geschrieben
      function addieren($a) {
        if($a > 5) {
          return;
        }
        echo $a . "<br>";
        addieren($a + 1);
      }
     ?>

     <?php
     //hier wird alles ausgeführt!
       addieren(1);
      ?>
  </body>
</html>
