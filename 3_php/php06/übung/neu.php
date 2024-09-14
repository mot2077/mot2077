<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
    $db = @mysqli_connect("localhost", "root", "", "kunde") or DIE("Keine Verbindung zur Datenbank");

    $sql = "SELECT * FROM adresse";

    $ergebnis = @mysqli_query($db, $sql) or DIE("SQL-Fehler");
    
    while($zeile = @mysqli_fetch_assoc($ergebnis))
    {
      echo "$zeile[kundennummer] $zeile[vorname] $zeile[nachname] $zeile[strasse] $zeile[plz] $zeile[ort] <br>";
    }

    @mysqli_close($db);
    ?>
  </body>
</html>