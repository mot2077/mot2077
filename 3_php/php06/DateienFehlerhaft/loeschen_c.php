<!DOCTYPE html>
<html>
<head>
<title>Kundendaten l&ouml;schen</title>
<meta charset="utf-8">
</head>
<body>
<?php
    /* Daten auslesen und übergeben */
   $kundennummer = $_POST["tfKundennummer"];

   if($_POST["lbutton"] == "loeschen")
   {
         /* Verbindung zum Server aufnehmen und Datenbank auswählen */
         $db = @mysqli_connect("localhost", "root", "", "kunde") or DIE("Keine Verbindung zur Datenbank");

         /* SQL-Abfrage ausführen */
         $sql = "DELETE from adresse where kundennummer=$kundennummer ";

         $eingabe = @mysqli_query($db, $sql) or DIE("SQL-Fehler");
         if (mysqli_errno($db)==0)
         {
            echo "Der Datensatz wurde erfolgreich gel&ouml;scht";
         }
         else
         {
            echo "Der Datensatz wurde nicht gel&ouml;scht";
         }
         /* Verbindung zur Datenbank beenden */
         mysqli_close($db);
     }
      else
        {
         echo "<a href='loeschen.html'>Bitte geben Sie eine Kundennummer ein.</a>";
        }
 ?>
</body>
</html>