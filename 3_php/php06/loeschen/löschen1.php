<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
    $kundennummer = $_POST["tfKundennummer"];
    if ($kundennummer != "")
    {
        $db = @mysqli_connect("localhost", "root", "", "adresse") or DIE("Keine Verbindung");
        $sql = "DELETE * FROM adresse WHERE kundennummer = $kundennummer";
        $ergbnis = @mysqli_query($db, $sql) or DIE("SQL-Fehler");
        
    } else{
        echo "Bitte geben Sie eine Kundennummer ein.";
    }
    ?>
  </body>
</html>