<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
    $kundennummer = $_POST["tfKundennummer"];
    $vorname = $_POST["tfVorname"];
    $nachname = $_POST["tfNachname"];
    $strasse = $_POST["tfStrasse"];
    $plz = $_POST["tfPlz"];
    $ort = $_POST["tfOrt"];

    $db = @mysqli_connect("localhost", "root", "", "kunde") or DIE("NEIN");

    //if ($kundennummer != null and ...)
    $i = 1;
    do
    {
        $erstellen = "INSERT INTO adresse (kundennummer, vorname, nachname, strasse, plz, ort) VALUES ($kundennummer, $vorname, $nachname, $strasse, $plz, $ort)";
        $i++;
    } while ($i = 1);

    @mysqli_close($db);
    ?>
  </body>
</html>