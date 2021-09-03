<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Tilkoblingsinformasjon
      $tjener = "localhost";
      $brukernavn = "root";
      $passord = "root";
      $database = "Bibliotek"; //Endre på denne til din database

      // Opprette en kobling
      $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

      // Sjekk om koblingen virker
      if($kobling->connect_error) {
          die("Noe gikk galt: " . $kobling->connect_error);
      } else {
          //echo "Koblingen virker.<br>";
      }

      // Angi UTF-8 som tegnsett
      $kobling->set_charset("utf8");
      // Med linjeskift for 1 tabell
      $sql = "SELECT * FROM Bok"; //Skriv din sql kode her
      $resultat = $kobling->query($sql);

      echo "<ol>";
      while($rad = $resultat->fetch_assoc()) {
        $tittel = $rad["tittel"]; //Skriv ditt kolonnenavn her
        $isbn = $rad["ISBN"];

        echo "<li>$tittel : $isbn </li>";
      }
      echo "</ol>";
    ?>
  </body>
</html>
