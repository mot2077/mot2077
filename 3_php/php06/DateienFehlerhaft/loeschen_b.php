<!DOCTYPE html>
<html>
<head>
<title>Kundendaten l&ouml;schen</title>
<meta charset="utf-8">
</head>
<body>
<?php
     $kundennummer = $_POST["tfKundennummer"];
     if($kundennummer != "")
      { 
         /* Verbindung zum Server aufnehmen, Datenbank auswählen und Datensatz in Array einlesen */
         $db = @mysqli_connect("localhost", "root", "", "kunde") or DIE("Keine Verbindung zur Datenbank");

         /* SQL-Abfrage ausführen */
         $sql = "SELECT * from adresse where kundennummer=$kundennummer ";

         $ergebnis = @mysqli_query($db, $sql) or DIE("SQL-Fehler");

         $datensatz = @mysqli_fetch_assoc($ergebnis);

        /* Datensatz vorhanden? */
         if($datensatz['kundennummer'] != "")
         {

         echo "<h2>Wollen Sie die Daten wirklich l&ouml;schen?</h2> <p> ";
	    echo "<form  action='loeschen_c.php' method='post' > <p>";
         echo "<input name='tfKundennummer' value='$datensatz[kundennummer]' /> Kundennummer <p>";
         echo "<input name='tfNachname' value='$datensatz[nachname]' />  Nachname <p>";
         echo "<input name='tfVorname' value='$datensatz[vorname]' />  Vorname <p>";
         echo "<input name='tfStrasse' value='$datensatz[strasse]'  />  Strasse <p>";
         echo "<input name='tfPlz' value='$datensatz[plz]' />  PLZ <p>";
         echo "<input name='tfOrt' value='$datensatz[ort]' />  Ort <p>";
         echo "<input type='submit' name ='lbutton' value='loeschen'> <p> ";
         echo "<input type='submit' name='lbutton' value='nein'> ";
        echo " </form>";

        }
        else
        {
         echo "Diese Kundennummer gibt es in der Datenbank nicht! <p>";
         echo "<a href='loeschen.html'> Bitte neue Kundennummer eingeben</a>";
        }

        @mysqli_close($db);

   }
   else
   {
    echo "<a href='loeschen.html'>Bitte geben Sie eine Kundennummer ein </a>";
    }
?>

</body>
</html>